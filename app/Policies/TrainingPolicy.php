<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Repository\Training;
use App\Models\User\User;

class TrainingPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Training $training)
    {
        if(isRoleBelongsTo() === true)
        {
            return true;
        }else{
            return $user->id === $training->owner;
        }
    }
}
