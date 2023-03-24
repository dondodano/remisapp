<?php

namespace App\Models\Repository;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User\User;
use App\Models\Attachment\TrainingFile;
use App\Models\Evaluation\TrainingEvaluation;
use App\Models\Misc\Miscellaneous as Relevance;

class Training extends Model
{
    use HasFactory;

    protected $table = 'repository_training';

    protected $fillable = [
        'title',
        'date_from',
        'date_to',
        'duration',
        'no_of_trainees',
        'weight',
        'no_of_trainees_surveyed',
        'quality_id',
        'relevance',
        'owner',
        'is_evaluated'
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function quality()
    {
        return $this->hasOne(Relevance::class, 'id', 'quality_id');
    }

    public function attachments()
    {
        return $this->hasMany(TrainingFile::class, 'training_id', 'id');
    }

    public function evaluations()
    {
        return $this->hasMany(TrainingEvaluation::class, 'training_id', 'id');
    }

    public function file_owner()
    {
        return $this->belongsTo(User::class, 'owner', 'id');
    }
}
