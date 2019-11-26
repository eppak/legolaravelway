<?php

namespace Agronomist\Observers;

use Auth;
use Agronomist\Models\Harvest;

class HarvestObserver
{
    /**
     * Handle the agronomist models approbation "created" event.
     *
     * @param Harvest $harvest
     * @return void
     */
    public function creating(Harvest $harvest)
    {
        $user = Auth::user();
        if ($user) {
            $harvest->user_id = $user->id;
        }
    }
}
