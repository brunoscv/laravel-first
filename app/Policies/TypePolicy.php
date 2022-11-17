<?php
/**
 * @package    Controller
 * @author     Rupert Brasil Lustosa <rupertlustosa@gmail.com>
 * @date       09/12/2019 09:48:30
 */

declare(strict_types=1);

namespace App\Policies;

use App\Models\Type;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TypePolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can view any type.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {

        return true;
    }

    /**
     * Determine whether the user can create type.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {

        return true;
    }

    /**
     * Determine whether the user can update the type.
     *
     * @param User $user
     * @param Type $type
     * @return mixed
     */
    public function update(User $user, Type $type)
    {

        return true;
    }

    /**
     * Determine whether the user can delete the type.
     *
     * @param User $user
     * @param Type $type
     * @return mixed
     */
    public function delete(User $user, Type $type)
    {

        return true;
    }
}
