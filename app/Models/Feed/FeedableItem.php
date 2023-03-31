<?php

namespace App\Models\Feed;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedableItem extends Model
{
    use HasFactory;

    protected $table = 'feedable_item';

    protected $fillable = [
        'feedable_id',
        'feedable_type',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function feedable()
    {
        return $this->morphTo('feedable');
    }

    public function feed_file_owner()
    {
        return $this->feedable->file_owner();
    }

    public function feed_content()
    {
        return $this->feedable->content();
    }
}
