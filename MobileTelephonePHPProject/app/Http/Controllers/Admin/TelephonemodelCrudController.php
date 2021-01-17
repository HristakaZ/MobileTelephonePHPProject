<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TelephonemodelRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TelephonemodelCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TelephonemodelCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    private function getFieldsData($show = FALSE) {
        return [
            [
                'name'=> 'name',
                'label' => 'Name',
                'type'=> 'text'
            ],
            [
                'name'=> 'cpu',
                'label' => 'CPU',
                'type'=> 'text'
            ],
            [
                'name'=> 'gpu',
                'label' => 'GPU',
                'type'=> 'text'
            ],
            [
                'name'=> 'ram',
                'label' => 'RAM',
                'type'=> 'text'
            ],
            [
                'name'=> 'camera',
                'label' => 'Camera',
                'type'=> 'text'
            ],
            [
                'name'=> 'battery',
                'label' => 'Battery',
                'type'=> 'text'
            ],
            [
                'name' => 'display',
                'label' => 'Display',
                'type' => 'text',
            ],
            [  // Select2
                'label'     => "Brand",
                'type'      => 'select',
                'name'      => 'brand_id', // the db column for the foreign key
                // optional
                'entity'    => 'brand', // the method that defines the relationship in your Model
                'model'     => "App\Models\Brand", // foreign key model
                'attribute' => 'name' // foreign key attribute that is shown to user
            ]
        ];
    }
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Telephonemodel::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/telephonemodel');
        CRUD::setEntityNameStrings('telephonemodel', 'telephonemodels');
        $this->crud->addFields($this->getFieldsData());
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        /*CRUD::setFromDb();*/
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(true));

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(TelephonemodelRequest::class);

        CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    protected function setupShowOperation()
    {
        // by default the Show operation will try to show all columns in the db table,
        // but we can easily take over, and have full control of what columns are shown,
        // by changing this config for the Show operation
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));
    }
}
