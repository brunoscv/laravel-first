<?php
/**
 * @package    Controller
 * @author     Rupert Brasil Lustosa <rupertlustosa@gmail.com>
 * @date       09/12/2019 10:25:33
 */

declare(strict_types=1);

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any user.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can create user.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {

        return true;
    }

    /**
     * Determine whether the user can update the user.
     *
     * @param User $user
     * @param User $user
     * @return mixed
     */
    public function update(User $user, User $person)
    {
        if($user->is_dealer)
            return false;

        return true;
    }

    /**
     * Determine whether the user can delete the user.
     *
     * @param User $user
     * @param User $user
     * @return mixed
     */
    public function delete(User $user, User $person)
    {

        if($user->is_dealer)
            return false;

        return true;
    }

    public function profile(User $user, User $person)
    {
        return $user->id === $person->id;
    }
}
