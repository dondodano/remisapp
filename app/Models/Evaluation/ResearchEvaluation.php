<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Repository\Research;
use App\Models\User\User;

class ResearchEvaluation extends Model
{
    use HasFactory;

    protected $table = 'evaluation_research';


    protected $fillable = [
        'research_id',
        'evaluator_id',
        'evaluation',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function research()
    {
        return $this->belongsTo(Research::class, 'id', 'research_id');
    }

    public function evaluators()
    {
        return $this->hasMany(User::class, 'id', 'evaluator_id');
    }
}
