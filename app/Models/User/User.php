<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Log\LogUserActivity;
use Illuminate\Database\Eloquent\SoftDeletes;

//use Illuminate\Database\Eloquent\Model;
use Cache;

use App\Models\Log\LogUser;
use App\Models\User\UserRole;
use App\Models\User\UserToken;
use App\Models\User\UserTempAvatar;
use App\Models\Evaluation\ResearchEvaluation;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'users';

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'extension',
        'title',
        'avatar',
        'email',
        'password',
        'role_id',
        'status',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
    const DELETED_AT = 'date_deleted';

    public function user_role()
    {
        return $this->hasOne(UserRole::class, 'id', 'role_id');
    }

    public function temp_avatar()
    {
        return $this->hasOne(UserTempAvatar::class, 'user_id', 'id');
    }

    public function research_evaluator()
    {
        return $this->belongsTo(ResearchEvaluation::class, 'evaluator_id','id');
    }

    public function user_token()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }


    /**
     * Override boot
     */
    public static function boot()
    {
        parent::boot();

        static::created(function($user){
            if($user->id != sessionGet('id'))
            {
                LogUserActivity::create([
                    'user_id' => sessionGet('id'),
                    'ip_address' => request()->ip(),
                    'agent' =>  request()->header('User-Agent'),
                    'activity' => 'created',
                    'subject_id' =>  $user->id,
                    'subject_type' => User::class
                ])->save();
            }
        });

        static::updated(function($user){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'updated',
                'subject_id' => $user->id,
                'subject_type' => User::class
            ])->save();
        });

        static::deleted(function($user){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'deleted',
                'subject_id' => $user->id,
                'subject_type' => User::class
            ])->save();
        });
    }
}
