<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User\User;

class UserTempAvatar extends Model
{
    use HasFactory;

    protected $table = 'users_temp_avatar';

    protected $fillable = [
        'user_id',
        'avatar',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
