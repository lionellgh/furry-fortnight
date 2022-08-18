<?php

/*
 ../App/Http/Models/Tag.php
 */

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

  protected $fillable = ['nom'];


  /**
   * Get the posts for the tag.
   */
  public function projets() {
    return $this->belongsToMany('App\Http\Models\Tag', 'projets_has_tags', 'tag', 'projet');
  }


}
