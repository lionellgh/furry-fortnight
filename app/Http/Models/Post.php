<?php
/*
 ../App/Http/models/Post.php
 */

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

Class Post extends Model {

  protected $table = 'posts';


  public function categories() {
    return $this->belongsToMany('App\Http\Models\Categorie', 'posts_has_categories', 'post', 'categorie');
  }
}
