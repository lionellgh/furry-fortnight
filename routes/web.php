<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*----------------------------------
 VIEW COMPOSER
 ------------------------------------*/

 //PAGE ET MENU
View::composer('pages.menu', function($view){
  $view->with('pages', App\Http\Models\Page::all());
});

//LISTE DES CATEGORIES
View::composer('posts.show', function($view){
  $view->with('categories', App\Http\Models\Categorie::all());
});

//LISTE DES POSTS
View::composer('posts.show', function($view){
  $view->with('posts', App\Http\Models\Post::all());
});

//LISTE DES TAGS DES PROJETS
View::composer('projets.show', function($view){
  $view->with('tags', App\Http\Models\Tag::all());
});

//LISTE DES CLIENTS DES PROJETS
View::composer('projets.show', function($view){
  $view->with('clients', App\Http\Models\Client::all());
});


View::composer('pages.show', function($view){
  $view->with('prosliders', App\Http\Models\Projet::where('slider', 1)->orderBy('created_at', 'desc')->get());
});


/*---------------------------------------------------------
  ROUTES
  ---------------------------------------------------------
*/

//ROUTE AJAX -----------------------------------

/*
  AJAX CHARGEMENT MORE WORKS
 */

Route::get('/ajax/more-works', 'ProjetsController@ajaxMore')->name('projets.ajax.more-works');


//ROUTE STANDARDS------------------------------

/*
ROUTE PAR DEFAUT
PATTERN: /
CTRL: Pages
Action: show
 */

Route::get('/', 'PagesController@show')->name('Home');

/*
  CONTENU DES PAGES
  CTRL:Pages
  Action: index
 */
Route::resource('pages', 'PagesController');

/*
 LISTE DES PROJETS
 CTRL: Projets
 Action:index
 */
Route::resource('projets', 'ProjetsController');

/*
 LISTE DES POSTS
 CTRL:Posts
 Action : index
 */
Route::resource('posts', 'PostsController');


/*PAGINATION*/
Route::feeds();

Route::get('/categories/index', 'CategoriesController@index');

//DETAILS D'UNE CATEGORIE
//CTRL:CATEGORIES
//ACTION:SHOW
Route::get('/categories/{categorie}','CategoriesController@show')
      ->where([
           'categorie' => '[1-9][0-9]*'
      ])
      ->name('categories.show');
