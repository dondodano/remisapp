<?php

namespace App\Models\Repository;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User\User;
use App\Models\Attachment\ResearchFile;
use App\Models\Evaluation\ResearchEvaluation;
use App\Models\Misc\Miscellaneous as Fund;
use App\Models\Misc\Miscellaneous as Status;
use App\Models\Misc\Miscellaneous as Category;

use  App\Models\Feed\FeedableItem;

class Research extends Model
{
    use HasFactory;

    protected $table = 'repository_research';

    protected $fillable = [
        'commodity',
        'category_id',
        'program',
        'project',
        'researcher',
        'sites',
        'year_start',
        'year_end',
        'agency',
        'budget',
        'collaborative',
        'fund_id',
        'status_id',
        'owner',
        'is_evaluated'
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function fund()
    {
        return $this->hasOne(Fund::class, 'id', 'fund_id');
    }

    public function research_status()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }

    public function attachments()
    {
        return $this->hasMany(ResearchFile::class, 'research_id', 'id');
    }

    public function evaluations()
    {
        return $this->hasMany(ResearchEvaluation::class, 'research_id', 'id');
    }

    public function file_owner()
    {
        return $this->belongsTo(User::class, 'owner', 'id');
    }



    public function scopeShowActive()
    {
        return $this->where('active', 1);
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
        return $this->project;
    }
}
