<?php

namespace App\Models\Repository;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\User\User;
use App\Models\Attachment\PartnershipFile;
use App\Models\Evaluation\PartnershipEvaluation;

use App\Models\Log\LogUserActivity;
use  App\Models\Feed\FeedableItem;

class Partnership extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'repository_partnership';

    protected $fillable = [
        'partner',
        'activity',
        'date_from',
        'date_to',
        'owner',
        'is_evaluated'
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
    const DELETED_AT = 'date_deleted';


    public function attachments()
    {
        return $this->hasMany(PartnershipFile::class, 'partnership_id', 'id');
    }

    public function evaluations()
    {
        return $this->hasMany(PartnershipEvaluation::class, 'partnership_id', 'id');
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
        return $this->partner;
    }


    /**
     * Override boot
     */
    public static function boot()
    {
        parent::boot();

        static::created(function($partnership){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'created',
                'subject_id' =>  $partnership->id,
                'subject_type' => Partnership::class
            ])->save();
        });

        static::updated(function($partnership){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'updated',
                'subject_id' => $partnership->id,
                'subject_type' => Partnership::class
            ])->save();
        });

        static::deleted(function($partnership){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'deleted',
                'subject_id' => $partnership->id,
                'subject_type' => Partnership::class
            ])->save();


            FeedableItem::where('feedable_id', $partnership->id)->where('feedable_type', Partnership::class)->delete();
        });
    }
}
