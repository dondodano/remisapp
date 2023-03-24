<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User\User;


class UserToken extends Model
{
    use HasFactory;

    protected $table = 'users_token';

    protected $fillable = [
        'user_id',
        'token',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }
}
