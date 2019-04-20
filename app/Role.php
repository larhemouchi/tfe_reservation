<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use SoftDeletes;
     protected $dates=['deleted_at']; 

protected $fillable=['role'];


public function user(){

    return $this->belongsTo('App\User');
}

}
