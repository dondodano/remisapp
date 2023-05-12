<?php

namespace App\Models\Repository;

#use App\Scopes\RepositoryOwner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Notification;

use App\Models\User\User;
use App\Models\Misc\Miscellaneous as Type;
use App\Models\Attachment\PresentationFile;
use App\Models\Evaluation\PresentationEvaluation;

use App\Notifications\RepositoryCreated;
use App\Models\Log\LogUserActivity;
use  App\Models\Feed\FeedableItem;
use App\Events\PusherNotificationEvent;

class Presentation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'repository_presentation';

    protected $fillable = [
        'date_presented',
        'title',
        'author',
        'forum',
        'venue',
        'type_id',
        'owner',
        'responsibility_center_id',
        'is_evaluated',
        'quarter',
        'year'
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
    const DELETED_AT = 'date_deleted';


    public function type()
    {
        return $this->hasOne(Type::class, 'id', 'type_id');
    }

    public function attachments()
    {
        return $this->hasMany(PresentationFile::class, 'presentation_id', 'id');
    }

    public function evaluations()
    {
        return $this->hasMany(PresentationEvaluation::class, 'presentation_id', 'id');
    }

    public function file_owner()
    {
        return $this->belongsTo(User::class, 'owner', 'id');
    }

    /**
     * Delegate || Morph
     */
    public function feedItem()
    {
        return $this->morphOne(FeedableItem::class, 'feedable');
    }

    public function content()
    {
        return $this->title;
    }

    public function quarter()
    {
        return $this->quarter;
    }

    public function year()
    {
        return $this->year;
    }

    /**
     * Local Scope
     */
    public function scopeRepositoryOwner($query)
    {
        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $query->where('responsibility_center_id', sessionGet('responsibility_center_id'))
                ->where('quarter', getCurrentQuarter()['value'])
                ->where('year', getCurrentYear()['value']);
        }else{
            $query->where('quarter', getCurrentQuarter()['value'])
                ->where('year', getCurrentYear()['value']);
        }
    }

    /**
     * Override boot
     */
    public static function boot()
    {
        parent::boot();

        static::created(function($presentation){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'created',
                'subject_id' =>  $presentation->id,
                'subject_type' => Presentation::class
            ])->save();

            $presentationAll = Presentation::with(['file_owner' => function($first){
                $first->select('id','firstname', 'middlename', 'lastname', 'avatar')->with(['temp_avatar' => function($second){
                    $second->select('user_id','avatar');
                }]);
            }])->findOrFail($presentation->id);

            Notification::send(User::all(), new RepositoryCreated($presentationAll, Presentation::class));

            event(new PusherNotificationEvent('NewNotification'));
        });

        static::updated(function($presentation){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'updated',
                'subject_id' => $presentation->id,
                'subject_type' => Presentation::class
            ])->save();

            //Notification::send(User::all(), new RepositoryCreated($presentation, Presentation::class, 'updated'));
            event(new PusherNotificationEvent('NewNotification'));
        });

        static::deleted(function($presentation){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'deleted',
                'subject_id' => $presentation->id,
                'subject_type' => Presentation::class
            ])->save();

            FeedableItem::where('feedable_id', $presentation->id)->where('feedable_type', Presentation::class)->delete();

            event(new PusherNotificationEvent('NewNotification'));
        });
    }

    /**
     * Appply Global Scopes
     */
    public static function booted()
    {
        #static::addGlobalScope(new RepositoryOwner);
    }
}
