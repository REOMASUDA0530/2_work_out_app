@extends('layouts.app')

@section('content')
    <div class='post'>
        <h2 class='title'>{{ $post->title }}</h2>
        <p class='body'>{{ $post->body }}</p>
        <div class='list'>
            <h3>TRAINING LIST</h3>
            @foreach ($post->events as $event)
                <p>{{ $event->name }} {{ $event->reps }} × {{ $event->sets }}</p>
            @endforeach
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