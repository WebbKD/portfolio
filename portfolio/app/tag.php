<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    //

    protected $guraded = [];

    public function posts(){
        
        return $this->hasMany('App\post');
    }
}
