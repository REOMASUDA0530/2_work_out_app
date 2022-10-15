<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Body_part extends Model
{
    public function training_events()
    {
        return $this->hasMany(Training_event::class);
    }
    public function getBody_part(int $limit_count = 5)
    {
        return $this->training_events()->with('body_part')->orderBy('id', 'DESC')->paginate($limit_count);
    }

    
}
