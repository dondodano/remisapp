<?php

namespace App\Models\Repository;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Notification;

use App\Models\User\User;
use App\Models\Attachment\TrainingFile;
use App\Models\Evaluation\TrainingEvaluation;
use App\Models\Misc\Miscellaneous as Relevance;

use App\Notifications\RepositoryCreated;
use App\Models\Log\LogUserActivity;
use  App\Models\Feed\FeedableItem;
use App\Events\PusherNotificationEvent;

class Training extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'repository_training';

    protected $fillable = [
        'title',
        'date_from',
        'date_to',
        'duration',
        'no_of_trainees',
        'weight',
        'no_of_trainees_surveyed',
        'quality_id',
        'relevance',
        'owner',
        'is_evaluated',
        'quarter',
        'year'
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
    const DELETED_AT = 'date_deleted';

    public function quality()
    {
        return $this->hasOne(Relevance::class, 'id', 'quality_id');
    }

    public function attachments()
    {
        return $this->hasMany(TrainingFile::class, 'training_id', 'id');
    }

    public function evaluations()
    {
        return $this->hasMany(TrainingEvaluation::class, 'training_id', 'id');
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

        static::created(function($training){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'created',
                'subject_id' =>  $training->id,
                'subject_type' => Training::class
            ])->save();

            $trainingAll = Training::with(['file_owner' => function($first){
                $first->select('id','firstname', 'middlename', 'lastname', 'avatar')->with(['temp_avatar' => function($second){
                    $second->select('user_id','avatar');
                }]);
            }])->findOrFail($training->id);

            Notification::send(User::all(), new RepositoryCreated($trainingAll, Training::class));

            event(new PusherNotificationEvent('NewNotification'));
        });

        static::updated(function($training){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'updated',
                'subject_id' => $training->id,
                'subject_type' => Training::class
            ])->save();

            //Notification::send(User::all(), new RepositoryCreated($training, Training::class,'updated'));
            event(new PusherNotificationEvent('NewNotification'));
        });

        static::deleted(function($training){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'deleted',
                'subject_id' => $training->id,
                'subject_type' => Training::class
            ])->save();

            FeedableItem::where('feedable_id', $training->id)->where('feedable_type', Training::class)->delete();

            event(new PusherNotificationEvent('NewNotification'));
        });
    }
}
