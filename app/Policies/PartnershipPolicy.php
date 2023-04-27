<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Repository\Partnership;
use App\Models\User\User;

class PartnershipPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Partnership $partnership)
    {
        if(isRoleBelongsTo() === true)
        {
            return true;
        }else{
            return $user->id === $partnership->owner;
        }
    }
}
