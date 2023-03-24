<?php

namespace App\Models\Requisite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Requisite\Institute;

class Program extends Model
{
    use HasFactory;

    protected $table = 'requisite_program';

    protected $fillable = [
        'institute_id',
        'term',
        'definition',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function institute()
    {
        return $this->belongsTo(Institute::class, 'institute_id', 'id');
    }
}
