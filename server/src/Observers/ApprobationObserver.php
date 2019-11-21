<?php

namespace Agronomist\Observers;

use Agronomist\Models\Approbation;

/*

retrieved
creating
created
updating
updated
saving
saved
deleting
deleted
restoring
restored

*/


class ApprobationObserver
{
    /**
     * Handle the agronomist models approbation "created" event.
     *
     * @param  Approbation  $agronomistModelsApprobation
     * @return void
     */
    public function creating(Approbation $approbation)
    {
	$approbation->token = newToken();
    }
}
