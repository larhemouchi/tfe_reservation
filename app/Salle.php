<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Salle extends Model
{
  use SoftDeletes;
   protected $dates=['deleted_at']; 


     public function pieces_theatres()
    {
       // return $this->belongsToMany(Product::class);
    
          return $this->belongsToMany('App\Pieces_theatre');
    }


    public function representations()
    {
       // return $this->belongsToMany(Product::class);
    
          return $this->belongsToMany('App\Representation');
    } 


public function sieges(){

    return $this->hasMany('App\Siege');
}

}
