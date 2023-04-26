<?php

namespace App\Models\Feed;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeedableItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'feedable_item';

    protected $fillable = [
        'feedable_id',
        'feedable_type',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
    const DELETED_AT = 'date_deleted';

    public function feedable()
    {
        return $this->morphTo('feedable');
    }

    public function feed_file_owner()
    {
        return $this->feedable->file_owner();
    }

    public function feed_quarter()
    {
        return $this->feedable->quarter();
    }

    public function feed_year()
    {
        return $this->feedable->year();
    }

    public function feed_content()
    {
        return $this->feedable->content();
    }

}
