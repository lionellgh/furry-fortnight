<?php

/*
 ../App/Http/Models/Categorie.php
 */

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model {

  protected $fillable = ['nom'];


  /**
   * Get the posts for the categorie.
   */
  public function posts() {
      return $this->belongsToMany('App\Http\Models\Categorie', 'posts_has_categories', 'categorie', 'post');
  }
}
