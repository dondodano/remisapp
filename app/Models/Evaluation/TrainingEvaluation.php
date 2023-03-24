<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Repository\Training;
use App\Models\User\User;

class TrainingEvaluation extends Model
{
    use HasFactory;

    protected $table = 'evaluation_training';


    protected $fillable = [
        'training_id',
        'evaluator_id',
        'evaluation',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function training()
    {
        return $this->belongsTo(Training::class, 'id', 'training_id');
    }

    public function evaluators()
    {
        return $this->hasMany(User::class, 'id', 'evaluator_id');
    }
}
