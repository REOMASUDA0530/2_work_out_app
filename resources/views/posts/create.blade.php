@extends('layouts.app')

@section('content')
<head>
    
</head>
<body>
    <form class='create' action="/posts" method="POST" name='form'>
        @csrf
        <h2 class='head_massage'>YOUR TRAINING</h2>
        <p class='space'> </p>
        <div class='events'>
            <input type="button" value="ADD" onclick='add_form()'>
            <input type="button" value="DELETE from BOTTOM" onclick='del_form()'>
            <p class='space'> </p> 
            
            <div class='add_event' id='add_event'>
                {{--<div>
                    <select name='events[0][name]' {{--value="{{ old('events[{{$i}}].name') }}">
                        @foreach($types as $type)
                            <option value='{{ $type->name }}'>{{ $type->name }}</option>
                        @endforeach
                    </select>
                    
                    <input type='number' name='events[0][weight]' placeholder='WEIGHT &lpar;kg&rpar;' {{--value="{{ old('events[{{$i}}].weight') }}">

                    <input type='number' name='events[0][reps]' placeholder='REPS' {{--value="{{ old('events[{{$i}}].reps') }}">

                    <input type='number' name='events[0][sets]' placeholder='SETS' {{--value="{{ old('events[{{$i}}].sets') }}">
                    {{--<p class="event__error" style="color:red">{{ $errors->first('event') }}</p>
                    <br>
                    
                </div>--}}
                
            </div> 
            
        </div>
        
        {{--<div class='title'>
            <h2>TITLE</h2>
            <input type='text' name='post[title]' placeholder='TITLE' {{--value="{{ old('post.title') }}"/>
            {{--<p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
        </div>--}}
        <p class='space'> </p>
        
        <textarea class='body'name="post[body]" placeholder="LEAVE COMMENTS IF YOU HAVE." {{-- value="{{ old('post.body') }}" --}}></textarea>
            {{--<p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>--}}
        
        <div class='user_id'>
            <input type='hidden' name='post[user_id]' value={{ Auth::id() }}>
        </div>
        
        <div class='submit'>
            <input type="submit" value="SUBMIT" id='submit'>
        </div>
        
    </form>
    
    <p class='space_3'> </p>
    
    <div class="footer">
        <a href="/">HOME</a>
    </div>
    
    <script>
        var i = 1;
        
        {{--inputの増減をいじれる機能--}}
        
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
            
            add_event.appendChild(input_event);
            
            i += 1;
            
        }
        
        function del_form(){
            add_event.removeChild(add_event.lastElementChild);
            i -= 1;
            
        }
        
    </script>

</body>
@endsection