@extends('layouts.app')

@section('content')
    <div class="create">
        <h2 class='head_massage'>EDIT</h2>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='events'>
                <div class='edit_event'>
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
            </div>
                {{--<div class='title'>
                    <h2>TITLE</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>--}}
            <textarea class='body'name="post[body]">{{ $post->body }}</textarea>
            
            
            <div class='submit'>
                <input type="submit" value="UPDATE">
            </div>
            
        </form>
        
        <p class='space_3'> </p>
        
        <div class='submit'>
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deletePost({{ $post->id }})">DELETE</button>
        </form>
        
        </div>
        
        <p class='space_3'> </p>
        
    </div>
    
    <div class="footer">
        <a href="/">HOME</a>
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