<?php
/*
 ../App/Http/Controllers/PagesController.php
 */


namespace App\Http\Controllers;
use App\Http\Models\Page as PageModel;
use App\Http\Models\Projet ;
use App\Http\Models\Post ;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

Class PagesController extends Controller {

/**
 * Route par défaut
 * @param  integer $id [description]
 * @return [type]      [description]
 */
public function show($id = 1){
  $pages = PageModel::find($id);
   if($pages->id === 1):
     $projets = Projet::orderby('created_at', 'DESC')->take(6)->get();
     $posts = Post::orderby('created_at', 'DESC')->take(3)->get();
      return View::make('pages.show', compact('pages', 'projets', 'posts'));

     elseif($pages->id === 2):
       $projets = Projet::orderby('created_at', 'DESC')->take(6)->get();
  return View::make('pages.show', compact('pages', 'projets'));

  elseif($pages->id === 3):

    $posts = DB::table('posts')->orderby('created_at', 'DESC')->paginate(4);
    return View('pages.show',['posts'=>$posts], compact('pages'));

  elseif($pages->id === 4):

return View::make('pages.show', compact('pages'));
endif;
  }

  
}
