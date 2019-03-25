<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Representation extends Model
{
    use SoftDeletes;
     protected $dates=['deleted_at']; 

public function reservations(){

    return $this->hasMany('App\Reservation');
}

  public function pieces_theatres(){

    return $this->belongsTo('App\Pieces_theatre');
}


 public function salles()
    {
       // return $this->belongsToMany(Product::class);
    
          return $this->belongsToMany('App\Salle');
    }
}
