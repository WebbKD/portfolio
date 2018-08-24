<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //

    protected $guraded = [];

    public function category(){

        return $this->belongsTo('App\category');

    }

    public function tags(){
        
        return $this->belongsToMany('App\tag');
    }

}
