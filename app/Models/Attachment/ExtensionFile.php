<?php

namespace App\Models\Attachment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtensionFile extends Model
{
    use HasFactory;

    protected $table = 'attachment_extension';

    protected $fillable = [
        'extension_id',
        'user_id',
        'file',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
}
