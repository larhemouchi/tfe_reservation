<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{
  use SoftDeletes;
 protected $dates=['deleted_at']; 

protected $fillable = ['nom_categorie','prix_categorie'];

     public function sieges(){

    return $this->hasMany('App\Siege');
}
}
