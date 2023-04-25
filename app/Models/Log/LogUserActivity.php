<?php

namespace App\Models\Log;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User\User;

class LogUserActivity extends Model
{
    use HasFactory;

    protected $table = 'log_user_activity';

    protected $fillable = [
        'user_id',
        'ip_address',
        'agent',
        'activity',
        'subject_id',
        'subject_type'
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
