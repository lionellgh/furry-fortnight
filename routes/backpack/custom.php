<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('tag', 'TagCrudController');
    Route::crud('projet', 'ProjetCrudController');
    Route::crud('post', 'PostCrudController');
    Route::crud('page', 'PageCrudController');
    Route::crud('client', 'ClientCrudController');
    Route::crud('categorie', 'CategorieCrudController');
    Route::crud('auteur', 'AuteurCrudController');
}); // this should be the absolute last line of this file