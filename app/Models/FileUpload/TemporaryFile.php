<?php

namespace App\Models\FileUpload;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryFile extends Model
{
    use HasFactory;

    protected $table = 'temporary_files';

    protected $fillable = [
        'token',
        'folder',
        'file',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
}
