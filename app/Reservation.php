<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

	use SoftDeletes;
	 protected $dates=['deleted_at']; 

	  protected $fillable = ['id_representation','id_user', 'tarif_total','nbre_place_reserve','id_paiement','date_reservation'];

public function user(){

   return $this->belongsTo('App\User');
}

public function representations(){

    return $this->belongsTo('App\Representation');
}

public function paiements(){

    return $this->hasOne('App\Paiement');
}
}
