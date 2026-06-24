<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RolePolicy
{
    /**
     * Determine whether the user can view any models.
     */

    public function before($user)
    {
        if ($user->type == 'super-admin') {
            return true;
        }
    }

    public function viewAny(User $user): bool
    {
        return $user->hasAbility('roles.view');
    }

    public function create(User $user): bool
    {
        return $user->hasAbility('roles.create');
    }

    public function update(User $user, Role $role): bool
    {
        return $user->hasAbility('roles.update');
    }

    public function delete(User $user, Role $role): bool
    {
        return $user->hasAbility('roles.delete');
    }

    
}
