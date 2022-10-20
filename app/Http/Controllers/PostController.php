<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Event;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(
            ['posts' => $post->getPaginateByLimit()],
            );
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(
            ['post' => $post]
            );
    }
    
    public function create(Event $event)
    {
        return view('posts/create')->with(
            ['events' => $event->get()]
            );
    }
    
    public function store(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $input_events = $request->events_array;

        $post->fill($input_post)->save();

        $post->events()->attach($input_events);
        return redirect('/');
        
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    
    public function edit(Post $post)
    {
    return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        
        return redirect('/posts/' . $post->id);
    }
}
