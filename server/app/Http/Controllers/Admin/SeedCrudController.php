<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SeedRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SeedCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SeedCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Seed');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/seed');
        $this->crud->setEntityNameStrings('seed', 'seeds');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(SeedRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();

$this->crud->addField([
                'label' => "Categoria",
                'type' => 'select2',
                'default' => null,
                'name' => 'category_id',
                'entity' => 'category',
                'attribute' => 'name',
                'model' => "App\Models\Category"
            ]
        );


$this->crud->addField(
[       // SelectMultiple = n-n relationship (with pivot table)
    'label' => "Vitamine",
    'type' => 'select2_multiple',
    'name' => 'vitamins', // the method that defines the relationship in your Model
    'entity' => 'vitamins', // the method that defines the relationship in your Model
    'attribute' => 'name', // foreign key attribute that is shown to user
    'model' => "App\Models\Vitamin", // foreign key model
    'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
]
);

$this->crud->addField(
[   // Textarea
    'name' => 'description',
    'label' => 'Descrizione',
    'type' => 'textarea'
]);



$this->crud->addField(
[   // Textarea
    'name' => 'tecnic',
    'label' => 'Tecnica',
    'type' => 'textarea'
]);


$this->crud->addField(
[   // Textarea
    'name' => 'history',
    'label' => 'Storia',
    'type' => 'textarea'
]);




    }
}
