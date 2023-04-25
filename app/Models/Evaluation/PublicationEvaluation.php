<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Repository\Publication;
use App\Models\User\User;

class PublicationEvaluation extends Model
{
    use HasFactory;

    protected $table = 'evaluation_publication';


    protected $fillable = [
        'publication_id',
        'evaluator_id',
        'evaluation',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function publication()
    {
        return $this->belongsTo(Publication::class, 'id', 'publication_id');
    }

    public function evaluators()
    {
        return $this->hasMany(User::class, 'id', 'evaluator_id');
    }
}
