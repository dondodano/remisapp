<?php

namespace App\Models\Attachment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Repository\Research;

class ResearchFile extends Model
{
    use HasFactory;

    protected $table = 'attachment_research';

    protected $fillable = [
        'research_id',
        'user_id',
        'file',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function research()
    {
        return $this->belongsTo(Research::class, 'id', 'research_id');
    }


}
