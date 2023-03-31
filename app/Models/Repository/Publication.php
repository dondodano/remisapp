<?php

namespace App\Models\Repository;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User\User;
use App\Models\Attachment\PublicationFile;
use App\Models\Evaluation\PublicationEvaluation;

use  App\Models\Feed\FeedableItem;

class Publication extends Model
{
    use HasFactory;

    protected $table = 'repository_publication';

    protected $fillable = [
        'date_published',
        'title',
        'author',
        'publisher',
        'volume',
        'issue',
        'page',
        'owner',
        'is_evaluated'
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function attachments()
    {
        return $this->hasMany(PublicationFile::class, 'publication_id', 'id');
    }

    public function evaluations()
    {
        return $this->hasMany(PublicationEvaluation::class, 'publication_id', 'id');
    }

    public function file_owner()
    {
        return $this->belongsTo(User::class, 'owner', 'id');
    }

    /**
     * Delegate || Morph
     */
    public function feedItem()
    {
        return $this->morphOne(FeedableItem::class, 'feedable');
    }

    public function content()
    {
        return $this->title;
    }
}
