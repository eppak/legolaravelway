<?php

namespace App\Nova;

use Illuminate\Http\Request as req;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;

class Request extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'Agronomist\\Models\\Request';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    public static $group = 'Utenti';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(req $request)
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('Richiedente', 'user', 'App\Nova\User')->searchable(),
            BelongsTo::make('Seme', 'seed', 'App\Nova\Seed')->searchable(),
            Number::make('Quantità', 'qty')->min(1)->max(1000),
            BelongsTo::make('Fornitore', 'giver', 'App\Nova\User')->searchable()->nullable()
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(req $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(req $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(req $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(req $request)
    {
        return [];
    }

    public static function singularLabel() {return 'Richiesta';}
    public static function label() {return 'Richieste';}
}
