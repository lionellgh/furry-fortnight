<?php

/*
 ../App/Http/Models/Auteur.php
 */

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class Auteur extends Model {

  protected $fillable = ['nom'];


  /**
   * Get the posts for the auteur.
   */
  public function projets() {
      return $this->belongsTo('App\Http\Models\Projet', 'auteur');
  }
}
