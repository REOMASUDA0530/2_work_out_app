@extends('layouts.app')

@section('content')
    <div class="create">
        <h2 class='head_massage'>EDIT</h2>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='events'>
                <input type="button" value="ADD" onclick='add_form()'>
                <input type="button" value="DELETE from BOTTOM" onclick='del_form()'>
                
                <p class='space'> </p> 
                
                <div class='edit_event' id='edit_event'>
                @php
                    $i = 0
                @endphp
                @foreach ($post->events as $event)
                    <div>
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
                    </div>
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
        var i = <?php echo $i; ?>;
    
        function deletePost(id) {
            'use strict'
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                
            }
            
        }
        
        function add_form(){
            var event_name = document.createElement('select');
            event_name.name = `events[${i}][name]`;
            
            @foreach($types as $type)
                var option = document.createElement('option');
                
                @php
                    $val = $type->name;
                    $val_js = json_encode($val);
                @endphp
                
                var val = JSON.parse('<?php echo $val_js; ?>')
                option.value = val;
                option.text = val;
                
                event_name.appendChild(option);
            @endforeach
            
            var event_weight = document.createElement('input');
            event_weight.type = 'number';
            event_weight.placeholder = 'WEIGHT \(kg\)';
            event_weight.name = `events[${i}][weight]`;
            
            var event_reps = document.createElement('input');
            event_reps.type = 'number';
            event_reps.placeholder = 'REPS';
            event_reps.name = `events[${i}][reps]`;
            
            var event_sets = document.createElement('input');
            event_sets.type = 'number';
            event_sets.placeholder = 'SETS';
            event_sets.name = `events[${i}][sets]`;
            
            var input_event = document.createElement('div');
            input_event.appendChild(event_name);
            input_event.appendChild(event_weight);
            input_event.appendChild(event_reps);
            input_event.appendChild(event_sets);
            
            edit_event.appendChild(input_event);
            
            i += 1;
            
        }
        
        function del_form(){
            edit_event.removeChild(edit_event.lastElementChild);
            i -= 1;
            
        }
        
        
    </script>
@endsection