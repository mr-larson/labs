<?php

namespace App\Policies;

use App\Models\Titre;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TitrePolicy
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
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Titre  $titre
     * @return mixed
     */
    public function view(User $user, Titre $titre)
    {
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Titre  $titre
     * @return mixed
     */
    public function update(User $user, Titre $titre)
    {
        return in_array($user->role_id, [1, 2]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Titre  $titre
     * @return mixed
     */
    public function delete(User $user, Titre $titre)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Titre  $titre
     * @return mixed
     */
    public function restore(User $user, Titre $titre)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Titre  $titre
     * @return mixed
     */
    public function forceDelete(User $user, Titre $titre)
    {
        //
    }
}
