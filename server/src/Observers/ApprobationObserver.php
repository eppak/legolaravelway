<?php

namespace Agronomist\Observers;

use Agronomist\Models\Approbation;

class ApprobationObserver
{
    /* retrieved, creating, created, updating, updated, saving, saved, deleting, deleted, restoring, restored */

    /**
     * Handle the agronomist models approbation "created" event.
     *
     * @param Approbation $approbation
     * @return void
     */
    public function creating(Approbation $approbation)
    {
        $approbation->token = newToken();
    }
}
