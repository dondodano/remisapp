<?php

namespace App\Models\Repository;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User\User;
use App\Models\Attachment\ExtensionFile;
use App\Models\Evaluation\ExtensionEvaluation;

use  App\Models\Feed\FeedableItem;

class Extension extends Model
{
    use HasFactory;

    protected $table = 'repository_extension';

    protected $fillable = [
        'extension',
        'date_from',
        'date_to',
        'quantity',
        'beneficiaries',
        'owner',
        'is_evaluated'
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function attachments()
    {
        return $this->hasMany(ExtensionFile::class, 'extension_id', 'id');
    }

    public function evaluations()
    {
        return $this->hasMany(ExtensionEvaluation::class, 'extension_id', 'id');
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
        return $this->extension;
    }
}
