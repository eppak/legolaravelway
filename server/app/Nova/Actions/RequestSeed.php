<?php

namespace App\Nova\Actions;

use Auth;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Number;

use Agronomist\Models\Seed;
use Agronomist\Services\UserService;

class RequestSeed extends Action
{
    use InteractsWithQueue, Queueable;

    public $name='Richiedi semi';

    private $service = null;

    public function __construct()
    {
	$this->service = resolve(UserService::class);
    }

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
	$user = Auth::user();
    	foreach ($models as $model) {
		$this->service->requestSeed($user, $model, $fields->qty);
	}
    	return Action::message('Richiesta inviata!');
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [
		Number::make('Quantità', 'qty')->min(1)->max(1000)->withMeta(["value" => 1])
	];
    }
}
