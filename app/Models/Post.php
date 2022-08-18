<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
      'id',
      'nom',
      'created_at',
      'updated_at',
      'image',
      'titre_un',
      'titre_deux',
      'texteLead',
      'texte',
      'texte_deux'
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

    $destinationPath = public_path('/img/blog');
    $img->resize(1200, 750, function ($constraint) {
    $constraint->aspectRatio();
    })->save($destinationPath.'/'.$input['imagename']);

    $this->attributes['image'] = strtolower($input['imagename']);

    }    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */


    public function categories() {
      return $this->belongsToMany('App\Http\Models\Categorie', 'posts_has_categories', 'post', 'categorie');
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
