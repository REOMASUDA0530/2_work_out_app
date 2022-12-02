@extends('layouts.app')

@section('content')
    <h2>EDIT</h2>
    <div class="edit">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='events'>
                @php
                    $i = 0
                @endphp
                @foreach ($post->events as $event)
                    <select name='events[<?php echo $i; ?>][name]'>
                    @foreach($types as $type)
                        <option value={{ $type->name }} 
                            @if ($type->name == $event->name)
                                selected
                            @endif
                        >{{ $type->name }}</option>
                    @endforeach
                    </select>
                    <input type='number' name='events[<?php echo $i; ?>][weight]' value='{{ $event->weight }}'>
                    <input type='number' name='events[<?php echo $i; ?>][reps]' value='{{ $event->reps }}'>
                    <input type='number' name='events[<?php echo $i; ?>][sets]' value='{{ $event->sets }}'>
                    @php
                        $i++
                    @endphp
                    <br>
                @endforeach
            </div>
            <div class='post'>
                {{--<div class='title'>
                    <h2>TITLE</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>--}}
                <div class='body'>
                    <input type='text' name='post[body]' value="{{ $post->body }}">
                </div>
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