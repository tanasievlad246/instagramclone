<?php

namespace App\Policies;

use App\Models\ProfileModel;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilePolicy
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
     * @param  \App\Models\ProfileModel  $profileModel
     * @return mixed
     */
    public function view(User $user, ProfileModel $profileModel)
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
     * @param  \App\Models\ProfileModel  $profileModel
     * @return mixed
     */
    public function update(User $user, ProfileModel $profileModel)
    {
        return $user->id == $profileModel->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProfileModel  $profileModel
     * @return mixed
     */
    public function delete(User $user, ProfileModel $profileModel)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProfileModel  $profileModel
     * @return mixed
     */
    public function restore(User $user, ProfileModel $profileModel)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProfileModel  $profileModel
     * @return mixed
     */
    public function forceDelete(User $user, ProfileModel $profileModel)
    {
        //
    }
}
