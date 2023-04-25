<?php

namespace App\Models\Evaluation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Repository\Extension;
use App\Models\User\User;

class ExtensionEvaluation extends Model
{
    use HasFactory;

    protected $table = 'evaluation_extension';


    protected $fillable = [
        'extension_id',
        'evaluator_id',
        'evaluation',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function extension()
    {
        return $this->belongsTo(Extension::class, 'id', 'extension_id');
    }

    public function evaluators()
    {
        return $this->hasMany(User::class, 'id', 'evaluator_id');
    }

}
