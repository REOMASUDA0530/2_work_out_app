<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Post');
        
    }
    
    public function type()
    {
        return $this->hasOne('App\Type');
        
    }
}
