<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //

    protected $guraded = [];

    public function category(){

        return $this->belongsTo(category::class);

    }

    public function tag(){
        
        return $this->belongsTo(tag::class);
    }

    public function active(){
        if($this->status == 0){
            return "Not Published";
        }else{
            return "Published";
        }
    }

}
