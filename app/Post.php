<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'user_id'
        
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('user') ->orderBy('updated_at', 'DESC') -> paginate($limit_count);
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
        
    }
    
    public function events()
    {
        return $this->hasMany('App\Event');
        
    }
    
    public function types()
    {
        return $this->hasManyThrough('App\Event', 'App\Type');
    }
}

