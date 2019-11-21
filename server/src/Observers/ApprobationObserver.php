<?php

namespace Agronomist\Observers;

use App\AgronomistModelsApprobation;

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
     * @param  \App\AgronomistModelsApprobation  $agronomistModelsApprobation
     * @return void
     */
    public function created(AgronomistModelsApprobation $agronomistModelsApprobation)
    {
        //
    }

    /**
     * Handle the agronomist models approbation "updated" event.
     *
     * @param  \App\AgronomistModelsApprobation  $agronomistModelsApprobation
     * @return void
     */
    public function updated(AgronomistModelsApprobation $agronomistModelsApprobation)
    {
        //
    }

    /**
     * Handle the agronomist models approbation "deleted" event.
     *
     * @param  \App\AgronomistModelsApprobation  $agronomistModelsApprobation
     * @return void
     */
    public function deleted(AgronomistModelsApprobation $agronomistModelsApprobation)
    {
        //
    }

    /**
     * Handle the agronomist models approbation "restored" event.
     *
     * @param  \App\AgronomistModelsApprobation  $agronomistModelsApprobation
     * @return void
     */
    public function restored(AgronomistModelsApprobation $agronomistModelsApprobation)
    {
        //
    }

    /**
     * Handle the agronomist models approbation "force deleted" event.
     *
     * @param  \App\AgronomistModelsApprobation  $agronomistModelsApprobation
     * @return void
     */
    public function forceDeleted(AgronomistModelsApprobation $agronomistModelsApprobation)
    {
        //
    }
}
