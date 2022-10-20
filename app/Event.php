<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'weight',
        'reps',
        'sets',
        'post_id',
        
    ];
    
    
    public function post()
    {
        return $this->belongsToMany('App\Post');
        
    }
    
    public function type()
    {
        return $this->hasOne('App\Type');
        
    }
}
