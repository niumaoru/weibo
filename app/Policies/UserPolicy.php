<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        //注释掉构造方法
    }*/

    public function update(User $currentuser,User $user){
        return $currentuser->id === $user->id;
    }
}
