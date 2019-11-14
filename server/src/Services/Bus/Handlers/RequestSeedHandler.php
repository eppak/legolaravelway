<?php namespace Agronomist\Services\Bus\Handlers;

use Agronomist\Repositories\SeedRepository;
use Agronomist\Notifications\SeedRequest;

class RequestSeedHandler {
    public function handle($command)
    {
	$from_user = $command->user;
	$seed = $command->seed;
	$qty = $command->qty;

	$users = SeedRepository::findWhere(['seed_id' => $seed->id, ['user_id', '<>' , $from_user->id]);
	foreach($users as $user) {
         $user->notify($from_user, $seed, $qty);
	}
    }
}

