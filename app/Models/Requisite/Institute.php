<?php

namespace App\Models\Requisite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Requisite\Program;
use App\Models\Log\LogUserActivity;

class Institute extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'requisite_institute';

    protected $fillable = [
        'term',
        'definition',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
    const DELETED_AT = 'date_deleted';

    public function program()
    {
        return $this->hasOne(Program::class, 'id', 'institute_id');
    }


    /**
     * Scope
     */
    public function scopeActiveStatus($query)
    {
        $query->where('status',1);
    }


     /**
     * Override boot
     */
    public static function boot()
    {
        parent::boot();

        static::created(function($institute){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'created',
                'subject_id' =>  $institute->id,
                'subject_type' => Institute::class
            ])->save();
        });

        static::updated(function($institute){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'updated',
                'subject_id' => $institute->id,
                'subject_type' => Institute::class
            ])->save();
        });

        static::deleted(function($institute){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'deleted',
                'subject_id' => $institute->id,
                'subject_type' => Institute::class
            ])->save();
        });
    }
}
