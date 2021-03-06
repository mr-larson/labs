<?php

namespace App\Policies;

use App\Models\Map;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MapPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Map  $map
     * @return mixed
     */
    public function view(User $user, Map $map)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Map  $map
     * @return mixed
     */
    public function update(User $user, Map $map)
    {
        return in_array($user->role_id, [1, 2]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Map  $map
     * @return mixed
     */
    public function delete(User $user, Map $map)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Map  $map
     * @return mixed
     */
    public function restore(User $user, Map $map)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Map  $map
     * @return mixed
     */
    public function forceDelete(User $user, Map $map)
    {
        //
    }
}
