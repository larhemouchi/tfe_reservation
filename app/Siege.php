<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Siege extends Model
{
    use SoftDeletes;
     protected $dates=['deleted_at'];

     public function salles(){

    return $this->belongsTo('App\Salle');
} 
}
