@extends('layouts.app')

@section('content')
    <div class='post'>
        <h2 class='title'>{{ $post->title }}</h2>
        <p class='body'>{{ $post->body }}</p>
        <div class='list'>
            <h3>TRAINING LIST</h3>
            @foreach ($post->events as $event)
                <h4>{{ $event->name }} {{ $event->weight }} kg × {{ $event->reps }} reps × {{ $event->sets }} sets</h4>
            @endforeach
        </div>

        <h6 class='created_at'>{{ $post->created_at }}</h6>
        {{--<a class='user_name' href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a>--}}
        <p>{{ $post->user->name }}</p>
    </div>
    
    <div class='edit'>
        @if(Auth::id() == $post->user_id)
            <p>[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        @endif
    </div>
    
    <div class='comment'>
        <input type='text' name='comment' id='comment'>
        <button type='submit'>SUBMIT</button>
    </div>
    
    <div class="footer">
        <a href="/">BACK</a>
    </div>
@endsection