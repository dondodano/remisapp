<?php

namespace App\Models\Requisite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Requisite\Program;

class Institute extends Model
{
    use HasFactory;

    protected $table = 'requisite_institute';

    protected $fillable = [
        'term',
        'definition',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function program()
    {
        return $this->hasOne(Program::class, 'id', 'institute_id');
    }
}
