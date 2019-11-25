<?php

namespace Agronomist\Observers;

use Auth;
use Agronomist\Models\Seed;

class SeedObserver
{
    /**
     * Handle the agronomist models approbation "created" event.
     *
     * @param Seed $seed 
     * @return void
     */
    public function creating(Seed $seed)
    {
	$user = Auth::user();
	if ($user) {
        	$seed->user_id = $user->id;
	}
    }

}
