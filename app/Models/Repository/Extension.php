<?php

namespace App\Models\Repository;

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
        'is_evaluated'
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

            Notification::send(User::all(), new RepositoryCreated($extension, Extension::class));

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

            Notification::send(User::all(), new RepositoryCreated($extension, Extension::class, 'updated'));
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
        });
    }
}
