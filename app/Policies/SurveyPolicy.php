<?php
/**
 * @package    Controller
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:57
 */

declare(strict_types=1);

namespace App\Policies;

use App\Models\Survey;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SurveyPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        return $user->is_dev;
    }

    /**
     * Determine whether the user can view any Survey.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {

        return true;
    }

    /**
     * Determine whether the user can create Survey.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {

        return true;
    }

    /**
     * Determine whether the user can update the Survey.
     *
     * @param User $user
     * @param Survey $survey
     * @return mixed
     */
    public function update(User $user, Survey $survey)
    {

        return true;
    }

    /**
     * Determine whether the user can delete the Survey.
     *
     * @param User $user
     * @param Survey $survey
     * @return mixed
     */
    public function delete(User $user, Survey $survey)
    {

        return true;
    }
}
