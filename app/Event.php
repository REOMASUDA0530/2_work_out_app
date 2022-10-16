<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
        
    }
    
    public function type()
    {
        return $this->belongsTo(Type::class);
        
    }
}
