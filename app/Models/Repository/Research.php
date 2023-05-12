<?php

namespace App\Models\Repository;

#use App\Scopes\RepositoryOwner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Notification;

use App\Models\User\User;
use App\Models\Attachment\ResearchFile;
use App\Models\Evaluation\ResearchEvaluation;
use App\Models\Misc\Miscellaneous as Fund;
use App\Models\Misc\Miscellaneous as Status;
use App\Models\Misc\Miscellaneous as Category;

use App\Notifications\RepositoryCreated;
use App\Models\Log\LogUserActivity;
use App\Models\Feed\FeedableItem;
use App\Events\PusherNotificationEvent;

class Research extends Model
{
    use HasFactory,  SoftDeletes;

    protected $table = 'repository_research';

    protected $fillable = [
        'commodity',
        'category_id',
        'program',
        'project',
        'researcher',
        'sites',
        'year_start',
        'year_end',
        'agency',
        'budget',
        'collaborative',
        'fund_id',
        'status_id',
        'owner',
        'responsibility_center_id',
        'is_evaluated',
        'quarter',
        'year',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
    const DELETED_AT = 'date_deleted';

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function fund()
    {
        return $this->hasOne(Fund::class, 'id', 'fund_id');
    }

    public function research_status()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }

    public function attachments()
    {
        return $this->hasMany(ResearchFile::class, 'research_id', 'id');
    }

    public function evaluations()
    {
        return $this->hasMany(ResearchEvaluation::class, 'research_id', 'id');
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
        return $this->project;
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

        static::created(function($research){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'created',
                'subject_id' =>  $research->id,
                'subject_type' => Research::class
            ])->save();


            $researchAll = Research::with(['file_owner' => function($first){
                $first->select('id','firstname', 'middlename', 'lastname', 'avatar')->with(['temp_avatar' => function($second){
                    $second->select('user_id','avatar');
                }]);
            }])->findOrFail($research->id);

            Notification::send(User::all(), new RepositoryCreated($researchAll, Research::class));

            event(new PusherNotificationEvent('NewNotification'));
        });

        static::updated(function($research){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'updated',
                'subject_id' => $research->id,
                'subject_type' => Research::class
            ])->save();

            //Notification::send(User::all(), new RepositoryCreated($research, Research::class,'updated'));
            event(new PusherNotificationEvent('NewNotification'));
        });

        static::deleted(function($research){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'deleted',
                'subject_id' => $research->id,
                'subject_type' => Research::class
            ])->save();

            FeedableItem::where('feedable_id', $research->id)->where('feedable_type', Research::class)->delete();

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
