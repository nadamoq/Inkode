<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function before( $user ){
        if($user->type=='super-admin'){
            return true;
        }
    }
    public function viewAny(User $user): bool
    {
        return $user->hasAbility('users.view');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user): bool
    {
        return $user->hasAbility('users.view');
    }

   

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user): bool
    {
        return $user->hasAbility('users.delete');
    }

   
}
