<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function before($user){
        if($user->role === 'admin'){
            return true;
        }
    }

    public function create(User $user)
    {
        return ($user->role === 'admin');
    }

    public function update(User $user)
    {
        //usuario puede actualizar
        return ($user->role === 'admin');
    }

    public function delete(User $user)
    {
        return ($user->role === 'admin');
    }
    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
