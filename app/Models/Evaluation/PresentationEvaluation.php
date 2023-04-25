<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Repository\Presentation;
use App\Models\User\User;

class PresentationEvaluation extends Model
{
    use HasFactory;

    protected $table = 'evaluation_presentation';


    protected $fillable = [
        'presentation_id',
        'evaluator_id',
        'evaluation',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function presentation()
    {
        return $this->belongsTo(Presentation::class, 'id', 'presentation_id');
    }

    public function evaluators()
    {
        return $this->hasMany(User::class, 'id', 'evaluator_id');
    }
}
