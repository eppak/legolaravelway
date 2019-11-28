<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Panel;
use Laravel\Nova\Http\Requests\NovaRequest;

class Seed extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'Agronomist\\Models\\Seed';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';
    
    public static $group = 'Anagrafiche';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Nome', 'name')->sortable(),
            BelongsTo::make('Categoria', 'category', 'App\Nova\Category'),
            Textarea::make('Descrizione', 'description')->hideFromIndex(),
            Textarea::make('Tecnica', 'tecnic')->hideFromIndex(),
            new Panel('Origine', $this->origin()),

            BelongsToMany::make('Vitamine', 'vitamins', 'App\Nova\Vitamin')
        ];
    }


   private function origin() {
       return [
            Text::make('Origine', 'origin')->hideFromIndex(),
            Text::make('Latitudine', 'origin_lat')->hideFromIndex(),
            Text::make('Longitudine', 'origin_lng')->hideFromIndex(),
            Textarea::make('Storia', 'history')->hideFromIndex()
       ];
   }


    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
          new Actions\RequestSeed
        ];
    }

    public static function singularLabel() {return 'Seme';}
    public static function label() {return 'Semi';}
}