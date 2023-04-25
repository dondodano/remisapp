<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $table = 'users_role';

    protected $fillable = [
        'term',
        'is_visibile',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
}
