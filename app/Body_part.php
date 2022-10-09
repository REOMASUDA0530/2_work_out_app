<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Body_part extends Model
{
    public function training_events()
    {
        return $this->hasMany(Training_event::class);
    }
    
}
