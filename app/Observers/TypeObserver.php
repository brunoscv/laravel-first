<?php
/**
 * @package    Observers
 * @author     Rupert Brasil Lustosa <rupertlustosa@gmail.com>
 * @date       09/12/2019 09:48:30
 */

declare(strict_types=1);

namespace App\Observers;

use App\Models\Type;

class TypeObserver
{

    /**
     * Handle the type "creating" event.
     *
     * @param Type $type
     * @return void
     */
    public function creating(Type $type)
    {

        //$type->user_creator_id = \Auth::id();
        //$type->user_updater_id = \Auth::id();
    }


    /**
     * Handle the type "updating" event.
     *
     * @param Type $type
     * @return void
     */
    public function updating(Type $type)
    {

        //$type->user_updater_id = \Auth::id();
    }


    /**
     * Handle the type "deleting" event.
     *
     * @param Type $type
     * @return void
     */
    public function deleting(Type $type)
    {

        /*$type->user_eraser_id = \Auth::id();
        $type->timestamps = false;
        $type->save();*/
    }
}
