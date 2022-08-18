<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Http\Models\Categorie;


class CategoriesController extends Controller {

    public function show(Categorie $categorie) {
      return View::make('categories.show', compact('categorie'));
    }
    public function index(){
      $categories = Categorie::all();
      return View::make('categories.index',compact('categories'));
    }

}
