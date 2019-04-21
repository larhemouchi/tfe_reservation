<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Siege extends Model
{

	
    use SoftDeletes;
     protected $dates=['deleted_at'];
     
       protected $fillable = ['id_salle','nom_siege','id_categorie'];
 
     

     public function salles(){

    return $this->belongsTo('App\Salle');
                              } 


 public function categories(){

    return $this->belongsTo('App\Categorie');
                            }


}
