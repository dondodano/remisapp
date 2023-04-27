<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Repository\Extension;
use App\Models\User\User;

class ExtensionPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Extension $extension)
    {
        if(isRoleBelongsTo() === true)
        {
            return true;
        }else{
            return $user->id === $extension->owner;
        }
    }

}
