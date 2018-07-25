<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    //

    public function post(){
        return $this->belongsTo(post::class);
    }

    public function paragraph(){
        return $this->hasMany(paragraph::class);
    }
}
