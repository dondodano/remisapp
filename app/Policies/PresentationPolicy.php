<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Repository\Presentation;
use App\Models\User\User;

class PresentationPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Presentation $presentation)
    {
        if(isRoleBelongsTo() === true)
        {
            return true;
        }else{
            return $user->id === $presentation->owner;
        }
    }
}
