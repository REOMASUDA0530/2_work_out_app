<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'category_id'
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this::with('user')->orderBy('updated_at', 'DESC') -> paginate($limit_count);
    }
    
    public function User()
    {
        return $this->belongsTo('App\User');
        
    }
}

