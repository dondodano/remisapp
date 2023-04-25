<?php

namespace App\Models\Misc;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Repository\Research;

class Miscellaneous extends Model
{
    use HasFactory;

    protected $table = 'miscellaneous';

    protected $fillable = [
        'term',
        'group',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function category_research()
    {
        return $this->belongsTo(Research::class, 'category_id', 'id');
    }

    public function fund_research()
    {
        return $this->belongsTo(Research::class, 'fund_id', 'id');
    }

    public function status_research()
    {
        return $this->belongsTo(Research::class, 'status_id', 'id');
    }
}
