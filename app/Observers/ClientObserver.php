<?php
/**
 * @package    Observers
 * @author     Marcelo Alves Pereira <marceloalvessoft@gmail.com>
 * @date       20/07/2021 15:31:09
 */

declare(strict_types=1);

namespace App\Observers;

use App\Models\Client;

class ClientObserver
{

    /**
     * Handle the client "creating" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function creating(Client $client)
    {

        $client->user_creator_id = \Auth::id();
        //$client->user_updater_id = \Auth::id();
    }


    /**
     * Handle the client "updating" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function updating(Client $client)
    {

        $client->user_updater_id = \Auth::id();
    }


    /**
     * Handle the client "deleting" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function deleting(Client $client)
    {

        $client->user_eraser_id = \Auth::id();
        $client->timestamps = false;
        $client->save();
    }
}
