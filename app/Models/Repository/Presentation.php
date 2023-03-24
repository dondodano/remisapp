<?php

namespace App\Models\Repository;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User\User;
use App\Models\Misc\Miscellaneous as Type;
use App\Models\Attachment\PresentationFile;
use App\Models\Evaluation\PresentationEvaluation;

class Presentation extends Model
{
    use HasFactory;

    protected $table = 'repository_presentation';

    protected $fillable = [
        'date_presented',
        'title',
        'author',
        'forum',
        'venue',
        'type_id',
        'owner',
        'is_evaluated'
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';


    public function type()
    {
        return $this->hasOne(Type::class, 'id', 'type_id');
    }

    public function attachments()
    {
        return $this->hasMany(PresentationFile::class, 'presentation_id', 'id');
    }

    public function evaluations()
    {
        return $this->hasMany(PresentationEvaluation::class, 'presentation_id', 'id');
    }

    public function file_owner()
    {
        return $this->belongsTo(User::class, 'owner', 'id');
    }
}
