<?php

namespace Agronomist\Observers;

use Agronomist\Models\Request;

class RequestObserver
{
    /**
     * Handle the agronomist models request "created" event.
     *
     * @param  Request  $agronomistModelsRequest
     * @return void
     */
    public function creating(Request $request)
    {
	$request->token = newToken();
    }
}
