<?php
/**
 * @package    Observers
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:57
 */

declare(strict_types=1);

namespace App\Observers;

use App\Models\Plano;

class PlanoObserver
{

    /**
     * Handle the plano "creating" event.
     *
     * @param  \App\Models\Plano  $plano
     * @return void
     */
    public function creating(Plano $plano)
    {

        $plano->user_creator_id = \Auth::id();
        //$plano->user_updater_id = \Auth::id();
    }


    /**
     * Handle the plano "updating" event.
     *
     * @param  \App\Models\Plano  $plano
     * @return void
     */
    public function updating(Plano $plano)
    {

        $plano->user_updater_id = \Auth::id();
    }


    /**
     * Handle the plano "deleting" event.
     *
     * @param  \App\Models\Plano  $plano
     * @return void
     */
    public function deleting(Plano $plano)
    {

        $plano->user_eraser_id = \Auth::id();
        $plano->timestamps = false;
        $plano->save();
    }
}
