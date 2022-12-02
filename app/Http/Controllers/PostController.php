<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Event;
use App\Type;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(
            ['posts' => $post->getPaginateByLimit(),

            ]);
    }
    
    public function show(Post $post)
    {
        $like = Like::where('post_id', $post->id)->where('user_id', auth()->user()->id)->first();
        return view('posts/show')->with(
            ['post' => $post, 
            'like' => $like
            ]);
    }
    
    public function create(Type $type)
    {
        return view('posts/create')->with(
            ['types' => $type->get()]
            );
    }
    
    public function store(Request $request, Post $post, Event $event)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        $post_id = array('post_id' => $post->id);
        
        $input_events = $request['events'];
        foreach ($input_events as $input_event):
            $event->create($input_event+$post_id);
        endforeach;
        
        return redirect('/posts/' . $post->id);
        
    }
    
    public function delete(Post $post, Event $event)
    {
        foreach ($post->events as $event):
            $event->delete();
        endforeach;
        
        $post->delete();
        return redirect('/');
    }
    
    public function edit(Post $post, Event $event, Type $type)
    {
        return view('posts/edit')->with(
            ['post' => $post, 'types' => $type->get(), 'events' => $post->getByPost()],
            
            );
    }
    
    public function update(Request $request, Post $post, Event $event)
    {
        foreach ($post->events as $event):
            $event->delete();
        endforeach;
        
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        $post_id = array('post_id' => $post->id);
        
        $input_events = $request['events'];
        foreach ($input_events as $input_event):
            $event->create($input_event+$post_id);
        endforeach;
        
        return redirect('/posts/' . $post->id);
    }
    
}
