<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Training_event;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post, User $user)
    {
        return view('posts/index')->with(
            ['posts' => $post->getPaginateByLimit()],
            ['users' => $user]
            );
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    
    public function create(User $user, Training_event $training_event)
    {
        return view('posts/create')->with(
            ['users' => $user->get()],
            ['training_events' => $training_event->get()]
            );
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
