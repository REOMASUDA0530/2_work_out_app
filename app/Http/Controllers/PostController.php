<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Training_event;
use App\Body_part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Post $post, User $user)
    {
        return view('posts/index')->with(
            ['posts' => $post->getPaginateByLimit()],
            ['users' => $user],
            );
    }
    
    public function show(Post $post, Training_event $training_event, Body_part $body_part)
    {
        return view('posts/show')->with(
            ['post' => $post],
            ['training_events' => $training_event->get()],
            ['body_part' => $body_part->get()]
            );
    }
    
    public function create(User $user)
    {
        return view('posts/create')->with(
            ['users' => $user->get()]
            );
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request;
        $post->fill($input)->save();
        return redirect('/posts/' . $post->user_id . '/' . $post->id);
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
