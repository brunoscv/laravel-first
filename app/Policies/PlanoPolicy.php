<?php
/**
 * @package    Controller
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:57
 */

declare(strict_types=1);

namespace App\Policies;

use App\Models\Plano;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlanoPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        return $user->is_dev;
    }

    /**
     * Determine whether the user can view any plano.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {

        return true;
    }

    /**
     * Determine whether the user can create plano.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {

        return true;
    }

    /**
     * Determine whether the user can update the plano.
     *
     * @param User $user
     * @param Plano $plano
     * @return mixed
     */
    public function update(User $user, Plano $plano)
    {

        return true;
    }

    /**
     * Determine whether the user can delete the plano.
     *
     * @param User $user
     * @param Plano $plano
     * @return mixed
     */
    public function delete(User $user, Plano $plano)
    {

        return true;
    }
}
