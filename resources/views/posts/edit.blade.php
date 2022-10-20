@extends('layouts.app')

@section('content')
    <h1>EDIT</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='title'>
                <h2>TITLE</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='body'>
                <h2>BODY</h2>
                <input type='text' name='post[body]' value="{{ $post->body }}">
            </div>
            <input type="submit" value="UPDATE">
        </form>
        
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
        </form>
        
    </div>
    <div class="back">
        <a href="/">BACK</a>
    </div>
    
    <script>
        function deletePost(id) {
            'use strict'
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                
            }
            
        }
    </script>
@endsection