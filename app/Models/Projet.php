<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'projets';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
      'id',
      'titre',
      'text',
      'image',
      'created_at',
      'updated_at',
      'auteur',
      'client',
      'slider'
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function setImageAttribute($value) {

    $image=$value;
    $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
    $img = \Image::make($image->getRealPath());

    $destinationPath = public_path('/img/portfolio');
    $img->resize(1200, 750, function ($constraint) {
    $constraint->aspectRatio();
    })->save($destinationPath.'/'.$input['imagename']);

    $this->attributes['image'] = strtolower($input['imagename']);

    }    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */


      public function clients(){
          return $this->belongsTo('App\Http\Models\Client', 'client');
      }

      public function auteurs(){
          return $this->belongsTo('App\Http\Models\Auteur', 'auteur');
      }

      public function tags() {
        return $this->belongsToMany('App\Models\Tag', 'projets_has_tags', 'projet', 'tag');
      }


    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
