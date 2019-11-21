<?php

namespace App\Observers;

use App\AgronomistModelsRequest;

class RequestObserver
{
    /**
     * Handle the agronomist models request "created" event.
     *
     * @param  \App\AgronomistModelsRequest  $agronomistModelsRequest
     * @return void
     */
    public function created(AgronomistModelsRequest $agronomistModelsRequest)
    {
        //
    }

    /**
     * Handle the agronomist models request "updated" event.
     *
     * @param  \App\AgronomistModelsRequest  $agronomistModelsRequest
     * @return void
     */
    public function updated(AgronomistModelsRequest $agronomistModelsRequest)
    {
        //
    }

    /**
     * Handle the agronomist models request "deleted" event.
     *
     * @param  \App\AgronomistModelsRequest  $agronomistModelsRequest
     * @return void
     */
    public function deleted(AgronomistModelsRequest $agronomistModelsRequest)
    {
        //
    }

    /**
     * Handle the agronomist models request "restored" event.
     *
     * @param  \App\AgronomistModelsRequest  $agronomistModelsRequest
     * @return void
     */
    public function restored(AgronomistModelsRequest $agronomistModelsRequest)
    {
        //
    }

    /**
     * Handle the agronomist models request "force deleted" event.
     *
     * @param  \App\AgronomistModelsRequest  $agronomistModelsRequest
     * @return void
     */
    public function forceDeleted(AgronomistModelsRequest $agronomistModelsRequest)
    {
        //
    }
}
