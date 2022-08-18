<?php

/*
 ../App/Http/Controllers/PostsController.php
 */


namespace App\Http\Controllers;
use App\Http\Models\Post as PostsModels;
use Illuminate\Support\Facades\View;
use App\Http\Models\Categorie;
use App\Http\Models\Page;


Class PostsController extends Controller {
  /**
   * DETAIL DU POST
   * @param  [type] $id [description]
   * @return [type]     [description]
   */
public function show($id){
     $post = PostsModels::find($id);
     $pages = Page::find($id);
     return View::make('posts.show', compact('post', 'pages'));
  }



}
