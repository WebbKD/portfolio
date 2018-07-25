<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function section(){
        return $this->hasMany(section::class);
    }
    
}
