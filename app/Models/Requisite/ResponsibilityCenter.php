<?php

namespace App\Models\Requisite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Requisite\Program;
use App\Models\Log\LogUserActivity;

class ResponsibilityCenter extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'requisite_responsibility_center';

    protected $fillable = [
        'term',
        'definition',
    ];

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';
    const DELETED_AT = 'date_deleted';

    public function program()
    {
        return $this->hasOne(Program::class, 'id', 'responsibility_center_id');
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

        static::created(function($responsibilitycenter){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'created',
                'subject_id' =>  $responsibilitycenter->id,
                'subject_type' => ResponsibilityCenter::class
            ])->save();
        });

        static::updated(function($responsibilitycenter){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'updated',
                'subject_id' => $responsibilitycenter->id,
                'subject_type' => ResponsibilityCenter::class
            ])->save();
        });

        static::deleted(function($responsibilitycenter){
            LogUserActivity::create([
                'user_id' => sessionGet('id'),
                'ip_address' => request()->ip(),
                'agent' =>  request()->header('User-Agent'),
                'activity' => 'deleted',
                'subject_id' => $responsibilitycenter->id,
                'subject_type' => ResponsibilityCenter::class
            ])->save();
        });
    }
}
