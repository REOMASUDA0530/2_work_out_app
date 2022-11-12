@extends('layouts.app')

@section('content')
<body onload='proc();'>
    <form action="/posts" method="POST" name='form'>
        @csrf
        <div class='title'>
            <h2>TITLE</h2>
            <input type='text' name='post[title]' placeholder='TITLE'/>
        </div>
        
        <div class='body'>
            <h2>BODY</h2>
            <textarea name="post[body]" placeholder="BODY"></textarea>
        </div>
        
        <div class='events'>
        
            <div class='add_event'>
                <h2>ADD YOUR TRAINING</h2>
                <select name='event[name]' id='event_name'>
                    @foreach($types as $type)
                        <option value={{ $type->name }}>{{ $type->name }}</option>
                    @endforeach
                </select>
                <input type='number' name='event[weight]' placeholder='WEIGHT &lpar;kg&rpar;' id='event_weight'>
                <input type='number' name='event[reps]' placeholder='REPS' id='event_reps'>
                <input type='number' name='event[sets]' placeholder='SETS' id='event_sets'>
                
                <input type='button' value='ADD' onclick="show(); add();">
            </div> 
            
            <div class='added_events'>
                <h2>YOUR TRAINING</h2>
                <p id='event_value'></p>
                
            </div>
            
        </div>
        
        <div class='user_id'>
            <input type='hidden' name='post[user_id]' value={{ Auth::id() }}>
        </div>
        
        
        {{--events 配列をコントローラに渡したい--}}
        
        
        <input type="submit" value="SUBMIT" id='submit' onclick='input_events();'/>
    </form>
    <div class="back">
        <a href="/">BACK</a>
    </div>
    
    <script>
        
        function show(){
            {{--ADD YOUR TRAINING への表示--}}
            var event_value = document.getElementById("event_value");
            var nameValue = document.getElementById('event_name').value;
            var weightValue = document.getElementById('event_weight').value;
            var repsValue = document.getElementById('event_reps').value;
            var setsValue = document.getElementById('event_sets').value;
            var showValue = nameValue + ' : ' + weightValue + 'kg' + '×' + repsValue + 'reps' + '×' + setsValue + 'sets';
            event_value.insertAdjacentHTML('afterbegin', showValue + '<br>');
            
        }
    
        function add(){   
            {{--event連想配列の作成--}}
            var event = {};
            event['name'] = document.getElementById('event_name').value;
            event['weight'] = document.getElementById('event_weight').value;
            event['reps'] = document.getElementById('event_reps').value;
            event['sets'] = document.getElementById('event_sets').value;
            
            events.unshift(event);
            
        }
        
        function proc(){
            events = [];
            
        }
        
        function input_events(){
            added_events.appendChild(<input type='hidden' name='events[]' value='events'>)
            
        }
        
    </script>

</body>
@endsection