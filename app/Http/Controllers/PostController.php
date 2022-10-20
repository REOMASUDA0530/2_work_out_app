<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Event;
use App\Type;
use App\EventPost;
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
    
    public function create(Type $type)
    {
        return view('posts/create')->with(
            ['types' => $type->get()]
            );
    }
    
    public function store(Request $request, Post $post, Event $event, EventPost $event_post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        $post_id = $post->id;
        
        $input_event = $request['event'];
        $event->fill($input_event)->save();
        $event_id = $event->id;
        
        //input_postとinput_eventからそれぞれidを取り出し、event_postに追加
        $input_event_post = array('event_id' => $event_id, 'post_id' => $post_id);
        $event_post->fill($input_event_post)->save();

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
