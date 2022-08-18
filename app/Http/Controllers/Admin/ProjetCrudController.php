<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProjetRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProjetCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProjetCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Projet');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/projet');
        $this->crud->setEntityNameStrings('projet', 'projets');

    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();

    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ProjetRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();

        // tag
        $this->crud->modifyField('tags',
          [    // Select2Multiple = n-n relationship (with pivot table)
     'label'     => "Tags",
     'type'      => 'select2_multiple',
     'name'      => 'tags', // the method that defines the relationship in your Model
     'entity'    => 'tags', // the method that defines the relationship in your Model
     'attribute' => 'nom', // foreign key attribute that is shown to user

     'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
     // 'select_all' => true, // show Select All and Clear buttons?

     // optional
     'model'     => "App\Http\Models\Tag", // foreign key model

]
        );

        // set checkbox slider projet
        $this->crud->modifyField('slider', [
          'name' => "slider",
          'label'=> "slider",
          'type' => 'checkbox'
        ]);

        // set upload image
        $this->crud->modifyField('image', [
          'name' => "image",
          'type' => 'upload',
          'upload' => true,
        ]);

        // set multi-option for author choice
        $this->crud->modifyField('client', [
          'label' => "Client",
          'type' => 'select2',
          'name' => 'client', // the db column for the foreign key
          'entity' => 'clients', // the method that defines the relationship in your Model
          'attribute' => 'nom', // foreign key attribute that is shown to user
          'model' => "App\Models\Client" // foreign key model
        ]);

        $this->crud->modifyField('auteur', [
          'label' => "Auteur",
          'type' => 'select2',
          'name' => 'auteur', // the db column for the foreign key
          'entity' => 'auteurs', // the method that defines the relationship in your Model
          'attribute' => 'nom', // foreign key attribute that is shown to user
          'model' => "App\Models\Auteur" // foreign key model
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();

        // set checkbox slider projet
        $this->crud->modifyField('slider', [
          'name' => "slider",
          'label'=> "slider",
          'type' => 'checkbox'
        ]);

        // set upload image
        $this->crud->modifyField('image', [
          'name' => "image",
          'type' => 'upload',
          'upload' => true,
        ]);

        // set multi-option for author and client choice
        $this->crud->modifyField('client', [
          'label' => "Client",
          'type' => 'select2',
          'name' => 'client', // the db column for the foreign key
          'entity' => 'clients', // the method that defines the relationship in your Model
          'attribute' => 'nom', // foreign key attribute that is shown to user
          'model' => "App\Models\Client" // foreign key model
        ]);

        $this->crud->modifyField('auteur', [
          'label' => "Auteur",
          'type' => 'select2',
          'name' => 'auteur', // the db column for the foreign key
          'entity' => 'auteurs', // the method that defines the relationship in your Model
          'attribute' => 'nom', // foreign key attribute that is shown to user
          'model' => "App\Models\Auteur" // foreign key model
        ]);


    }
}
