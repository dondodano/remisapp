<?php

namespace App\Models\Repository;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Notification;

use App\Models\User\User;
use App\Models\Attachment\PublicationFile;
use App\Models\Evaluation\PublicationEvaluation;

use App\Notifications\RepositoryCreated;
use App\Models\Log\LogUserActivity;
use  App\Models\Feed\FeedableItem;
use App\Events\PusherNotificationEvent;

class Publication extends Model
{
    use HasFactory,  SoftDeletes;

    protected $table = 'repository_publication';

    protected $fillable = [
        'date_published',
        'title',
        'author',
        'publisher',
        'volume',
        'issue',
        'page',
        'owner',
        'is_evaluated',
        'quarter',
        'year'
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
    const DELETED_AT = 'date_deleted';

    public function attachments()
    {
        return $this->hasMany(PublicationFile::class, 'publication_id', 'id');
    }

    public function evaluations()
    {
        return $this->hasMany(PublicationEvaluation::class, 'publication_id', 'id');
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


    /**
     * Override boot
     */
    public static function boot()
    {
        parent::boot();

        static::created(function($publication){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'created',
                'subject_id' =>  $publication->id,
                'subject_type' => Publication::class
            ])->save();

            $publicationAll = Publication::with(['file_owner' => function($first){
                $first->select('id','firstname', 'middlename', 'lastname', 'avatar')->with(['temp_avatar' => function($second){
                    $second->select('user_id','avatar');
                }]);
            }])->findOrFail($publication->id);

            Notification::send(User::all(), new RepositoryCreated($publicationAll, Publication::class));

            event(new PusherNotificationEvent('NewNotification'));
        });

        static::updated(function($publication){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'updated',
                'subject_id' => $publication->id,
                'subject_type' => Publication::class
            ])->save();

            //Notification::send(User::all(), new RepositoryCreated($publication, Publication::class, 'updated'));
            event(new PusherNotificationEvent('NewNotification'));
        });

        static::deleted(function($publication){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'deleted',
                'subject_id' => $publication->id,
                'subject_type' => Publication::class
            ])->save();


            FeedableItem::where('feedable_id', $publication->id)->where('feedable_type', Publication::class)->delete();

            event(new PusherNotificationEvent('NewNotification'));
        });
    }
}
