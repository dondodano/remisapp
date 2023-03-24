<?php

namespace App\Models\Repository;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User\User;
use App\Models\Attachment\PartnershipFile;
use App\Models\Evaluation\PartnershipEvaluation;

class Partnership extends Model
{
    use HasFactory;

    protected $table = 'repository_partnership';

    protected $fillable = [
        'partner',
        'activity',
        'date_from',
        'date_to',
        'owner',
        'is_evaluated'
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';


    public function attachments()
    {
        return $this->hasMany(PartnershipFile::class, 'partnership_id', 'id');
    }

    public function evaluations()
    {
        return $this->hasMany(PartnershipEvaluation::class, 'partnership_id', 'id');
    }

    public function file_owner()
    {
        return $this->belongsTo(User::class, 'owner', 'id');
    }
}
