<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;

    protected $dates=['deleted_at']; 

    protected $fillable = [
        'login','password', 'id_role','nom','prenom','email','telephone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

public function reservations(){

    return $this->hasMany('App\Reservation');
}

public function paiements(){ // un user peu avoir un seule role

    return $this->hasMany('App\Paiement');
}



public function roles(){ // un user peu avoir un seule role

    return $this->hasOne('App\Role');
}

}
