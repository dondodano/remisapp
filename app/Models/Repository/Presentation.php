<?php

namespace App\Models\Repository;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User\User;
use App\Models\Misc\Miscellaneous as Type;
use App\Models\Attachment\PresentationFile;
use App\Models\Evaluation\PresentationEvaluation;

use  App\Models\Feed\FeedableItem;

class Presentation extends Model
{
    use HasFactory;

    protected $table = 'repository_presentation';

    protected $fillable = [
        'date_presented',
        'title',
        'author',
        'forum',
        'venue',
        'type_id',
        'owner',
        'is_evaluated'
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';


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
        });
    }
}
