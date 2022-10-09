@extends('layouts.app')
@section('content')
    <div class='post'>
        <h1 class='title'>{{ $post->title }}</h1>
        <div class='training_list'>
            <h2>TRAINING LIST</h><br>
            <B>トレーニングのリストを載せる</B>
        </div>
        <p class='body'>{{ $post->body }}</p>
        
        <div class="tags">
            <h2>training_events</h2>
            <a href="/training_events/{{ $post->training_event->id }}">{{ $post->training_event->name }}</a>
        </div>
        
        <h6 class='created_at'>{{ $post->created_at }}</h6>
        <a class='user_name' href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a>
    </div>
    
    <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
    
    <div class='comment'>
        <input type='text' name='comment' id='comment'>
        <button type='submit'>SUBMIT</button>
    </div>
    
    <div class="footer">
        <a href="/">BACK</a>
    </div>
@endsection