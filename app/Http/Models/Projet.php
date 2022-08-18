<?php
/*
 ../App/Http/models/Projet.php
 */

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

Class Projet extends Model {

  protected $table = 'projets';

  public function tags() {
    return $this->belongsToMany('App\Http\Models\Tag', 'projets_has_tags', 'projet', 'tag');
  }

  public function auteurs() {
    return $this->belongsTo('App\Http\Models\Auteur', 'auteur');
  }

  public function clients() {
    return $this->belongsTo('App\Http\Models\Client', 'client');
  }


}
