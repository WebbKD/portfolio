<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paragraph extends Model
{
    //
    public function section(){
        return $this->belongsTo(post::class);
    }
}
