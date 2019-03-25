<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pieces_theatre extends Model
{

use SoftDeletes;
 protected $dates=['deleted_at']; 

 public function representations(){

    return $this->hasMany('App\Representation');
}
 public function salles()
    {
        return $this->belongsToMany('App\Salle');
    }

}
