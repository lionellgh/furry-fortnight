<?php

/*
 ../App/Http/Controllers/ProjetsController.php
 */

namespace App\Http\Controllers;
use App\Http\Models\Projet as ProjetsModels;
use App\Http\Models\Tag;
use App\Http\Models\Client;
use Illuminate\Support\Facades\View;
use DB;
//Pour récupérer des données GET ou POST
 use Illuminate\Http\Request;


Class ProjetsController extends Controller {
  /**
   * DETAIL DU PROJET
   * @param  [type] $id [description]
   * @return [type]     [description]
   */
public function show($id){
     $projet = ProjetsModels::find($id);

    $tags = $projet->tags->modelKeys();

     $relateds = DB::table('projets')
                  ->join('projets_has_tags', 'projets.id', '=', 'projets_has_tags.projet')
                  ->join('tags', 'projets_has_tags.tag', '=', 'tags.id')
                  ->join('auteurs','projets.auteur', '=', 'auteurs.id')
                  ->join('clients', 'projets.client', '=', 'clients.id')
                  ->select('projets.id as ProjetID', 'projets.titre as ProjetNom', 'projets.image as ProjetImage', 'auteurs.nom as AuteurNom', 'tags.id as TagID')
                  ->where('tags.id', '=', $tags)
                  ->take(4)
                  ->get();

     return View::make('projets.show', compact('projet', 'tags', 'clients', 'relateds', 'auteurs'));
  }

  public function ajaxMore(Request $request){
    $projets = ProjetsModels::orderBy('created_at' , 'desc')
    ->take(3)
    ->offset($request->get('offset'))
    ->get();
    return View::make('projets.more', compact('projets'));
  }
}
