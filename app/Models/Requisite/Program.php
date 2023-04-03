<?php

namespace App\Models\Requisite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Requisite\Institute;
use App\Models\Log\LogUserActivity;

class Program extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'requisite_program';

    protected $fillable = [
        'institute_id',
        'term',
        'definition',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
    const DELETED_AT = 'date_deleted';

    public function institute()
    {
        return $this->belongsTo(Institute::class, 'institute_id', 'id');
    }

     /**
     * Override boot
     */
    public static function boot()
    {
        parent::boot();

        static::created(function($program){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'created',
                'subject_id' =>  $program->id,
                'subject_type' => Program::class
            ])->save();
        });

        static::updated(function($program){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'updated',
                'subject_id' => $program->id,
                'subject_type' => Program::class
            ])->save();
        });

        static::deleted(function($program){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'deleted',
                'subject_id' => $program->id,
                'subject_type' => Program::class
            ])->save();
        });
    }
}
