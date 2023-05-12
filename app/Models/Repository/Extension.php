<?php

namespace App\Models\Repository;

#use App\Scopes\RepositoryOwner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Notification;

use App\Models\User\User;
use App\Models\Attachment\ExtensionFile;
use App\Models\Evaluation\ExtensionEvaluation;

use App\Notifications\RepositoryCreated;
use App\Models\Log\LogUserActivity;
use  App\Models\Feed\FeedableItem;
use App\Events\PusherNotificationEvent;

class Extension extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'repository_extension';

    protected $fillable = [
        'extension',
        'date_from',
        'date_to',
        'quantity',
        'beneficiaries',
        'owner',
        'responsibility_center_id',
        'is_evaluated',
        'quarter',
        'year'
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
    const DELETED_AT = 'date_deleted';

    public function attachments()
    {
        return $this->hasMany(ExtensionFile::class, 'extension_id', 'id');
    }

    public function evaluations()
    {
        return $this->hasMany(ExtensionEvaluation::class, 'extension_id', 'id');
    }

    public function file_owner()
    {
        return $this->belongsTo(User::class, 'owner', 'id');
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
     * Delegate || Morph
     */
    public function feedItem()
    {
        return $this->morphOne(FeedableItem::class, 'feedable');
    }

    public function content()
    {
        return $this->extension;
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
     * Override boot
     */
    public static function boot()
    {
        parent::boot();

        static::created(function($extension){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'created',
                'subject_id' =>  $extension->id,
                'subject_type' => Extension::class
            ])->save();

            $extensionAll = Extension::with(['file_owner' => function($first){
                $first->select('id','firstname', 'middlename', 'lastname', 'avatar')->with(['temp_avatar' => function($second){
                    $second->select('user_id','avatar');
                }]);
            }])->findOrFail($extension->id);

            Notification::send(User::all(), new RepositoryCreated($extensionAll, Extension::class));

            event(new PusherNotificationEvent('NewNotification'));
        });

        static::updated(function($extension){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'updated',
                'subject_id' => $extension->id,
                'subject_type' => Extension::class
            ])->save();

            //Notification::send(User::all(), new RepositoryCreated($extension, Extension::class, 'updated'));
            event(new PusherNotificationEvent('NewNotification'));
        });

        static::deleted(function($extension){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'deleted',
                'subject_id' => $extension->id,
                'subject_type' => Extension::class
            ])->save();

            FeedableItem::where('feedable_id', $extension->id)->where('feedable_type', Extension::class)->delete();

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
