<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PostCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PostCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Post');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/post');
        $this->crud->setEntityNameStrings('post', 'posts');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PostRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->setFromDb();

        // categorie
        $this->crud->modifyField('categories',
          [    // Select2Multiple = n-n relationship (with pivot table)
     'label'     => "Categories",
     'type'      => 'select2_multiple',
     'name'      => 'categories', // the method that defines the relationship in your Model
     'entity'    => 'categories', // the method that defines the relationship in your Model
     'attribute' => 'nom', // foreign key attribute that is shown to user

     'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
     // 'select_all' => true, // show Select All and Clear buttons?

     // optional
     'model'     => "App\Http\Models\Categorie", // foreign key model

]
        );

        // set upload image
        $this->crud->modifyField('image', [
          'name' => "image",
          'type' => 'upload',
          'upload' => true,
        ]);


    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();

        // set upload image
        $this->crud->modifyField('image', [
          'name' => "image",
          'type' => 'upload',
          'upload' => true,
        ]);

        // categorie
        $this->crud->modifyField('categories',
          [    // Select2Multiple = n-n relationship (with pivot table)
     'label'     => "Categories",
     'type'      => 'select2_multiple',
     'name'      => 'categories', // the method that defines the relationship in your Model
     'entity'    => 'categories', // the method that defines the relationship in your Model
     'attribute' => 'nom', // foreign key attribute that is shown to user

     'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
     // 'select_all' => true, // show Select All and Clear buttons?

     // optional
     'model'     => "App\Http\Models\Categorie", // foreign key model

]);
    }
}
