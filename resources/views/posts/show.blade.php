@extends('layouts.app')
@section('content')
    <div class='post'>
        <h1 class='title'>{{ $post->title }}</h1>
        <div class='training_list'>
            <h2>TRAINING LIST</h>
            <B>トレーニングのリストを載せる</B>
        </div>
        <p class='body'>{{ $post->body }}</p>
        
        <div class="tags">
            <h2>training_events</h2>
            <select name="post[training_event_id]">
                @foreach($training_events as $training_event)
                    <option value="{{ $training_event->id }}">{{ $training_event->name }}</option>
                @endforeach
            </select>
        </div>
        
        <a href="">{{ $post->training_event->name }}</a>
        
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