<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training_event extends Model
{
    public function posts()   
    {
        return $this->hasMany('App\Post');  
    }
    
    public function getByTraining_event(int $limit_count = 5)
    {
        return $this->posts()->with('training_event')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function body_part()
    {
        return $this->belongsTo(Body_part::class);
    }
}
