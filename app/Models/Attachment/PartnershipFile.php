<?php

namespace App\Models\Attachment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnershipFile extends Model
{
    use HasFactory;

    protected $table = 'attachment_partnership';

    protected $fillable = [
        'partnership_id',
        'user_id',
        'file',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
}
