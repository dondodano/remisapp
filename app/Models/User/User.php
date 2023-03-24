<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

//use Illuminate\Database\Eloquent\Model;


use App\Models\Log\LogUser;
use App\Models\User\UserRole;
use App\Models\User\UserToken;
use App\Models\User\UserTempAvatar;
use App\Models\Evaluation\ResearchEvaluation;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

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

}
