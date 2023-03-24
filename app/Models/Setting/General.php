<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
