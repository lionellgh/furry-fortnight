<?php

/*
 ../App/Http/Models/Client.php
 */

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class Client extends Model {

  protected $fillable = ['nom'];


  /**
   * Get the posts for the client.
   */
  public function projets() {
      return $this->belongsTo('App\Http\Models\Projet', 'client');
  }
}
