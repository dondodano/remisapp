<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Repository\Research;
use App\Models\User\User;

class ResearchPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Research $research)
    {
        if(isRoleBelongsTo() === true)
        {
            return true;
        }else{
            return $user->id === $research->owner;
        }
    }
}
