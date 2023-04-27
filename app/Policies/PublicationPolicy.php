<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Repository\Publication;
use App\Models\User\User;

class PublicationPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Publication $publication)
    {
        if(isRoleBelongsTo() === true)
        {
            return true;
        }else{
            return $user->id === $publication->owner;
        }
    }
}
