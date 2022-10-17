<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'reps',
        'sets',
        
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