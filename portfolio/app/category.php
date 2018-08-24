<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $guraded = [];

    public function posts(){

        return $this->hasMany('App\post');

    }
    
}
