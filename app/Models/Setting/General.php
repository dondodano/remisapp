<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Log\LogUserActivity;

class General extends Model
{
    use HasFactory;

    protected $table = 'general_setting';

    protected $fillable = [
        'site_title',
        'site_definition',
        'entity_name',
        'entity_definition',
        'app_url',
        'fav_icon'
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    /**
     * Override boot
     */
    public static function boot()
    {
        parent::boot();

        static::created(function($general){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'created',
                'subject_id' =>  $general->id,
                'subject_type' => General::class
            ])->save();
        });

        static::updated(function($general){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'updated',
                'subject_id' => $general->id,
                'subject_type' => General::class
            ])->save();
        });
    }
}
