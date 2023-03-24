<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Repository\Partnership;
use App\Models\User\User;

class PartnershipEvaluation extends Model
{
    use HasFactory;

    protected $table = 'evaluation_partnership';


    protected $fillable = [
        'partnership_id',
        'evaluator_id',
        'evaluation',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function partnership()
    {
        return $this->belongsTo(Partnership::class, 'id', 'partnership_id');
    }

    public function evaluators()
    {
        return $this->hasMany(User::class, 'id', 'evaluator_id');
    }
}
