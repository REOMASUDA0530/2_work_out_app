@extends('layouts.app')
@section('content')
    <div class='post'>
        <h2 class='title'>{{ $post->title }}</h2>
        <h3 class='training_list'>tore-ninglist</h3>
        <p class='body'>{{ $post->body }}</p>
        <h6 class='user_id'>{{ $post->user_id }}</h6>
        <h6 class='tags'>tag</h6>
        <h6 class='created_at'>{{ $post->created_at }}</h6>
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