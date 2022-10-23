@extends('layouts.app')

@section('content')
<body onload='proc();'>
    <form action="/posts" method="POST">
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
            
            {{--eventsを作る--}}
            {{--event[name]の入力--}}
            
            <div class='add_event'>
                <h2>ADD YOUR TRAINING</h2>
                <select name='event[name]' id='event_name'>
                    @foreach($types as $type)
                        <option value={{ $type->name }}>{{ $type->name }}</option>
                    @endforeach
                </select>
                <input type='number' name='event[weight]' placeholder='WEIGHT' id='event_weight'>
                <input type='number' name='event[reps]' placeholder='REPS' id='event_reps'>
                <input type='number' name='event[sets]' placeholder='SETS' id='event_sets'>
                
                {{--<input type='button' value='ADD' onclick="show(); add(); ">--}}
            </div> 
            
            {{--<div class='added_events'>
                <h2>YOUR TRAINING</h2>
                <p id='event_list'></p>
                
                {{--JavaScriptを書く--
            </div>--}}
            
        </div>
        
        <div class='user_id'>
            <input type='hidden' name='post[user_id]' value={{ Auth::id() }}>
        </div>
        {{--events 配列をコントローラに渡したい--}}
        <input type="submit" value="SUBMIT"/>
    </form>
    <div class="back">
        <a href="/">BACK</a>
    </div>
    
    <script>
        function show(){
            {{--ADD YOUR TRAINING への表示--}}
            var event_list = document.getElementById("event_list");
            var nameValue = document.getElementById('event_name').value;
            var weightValue = document.getElementById('event_weight').value;
            var repsValue = document.getElementById('event_reps').value;
            var setsValue = document.getElementById('event_sets').value;
            var showValue = nameValue + '×' + weightValue + '×' + repsValue + '×' + setsValue;
            event_list.insertAdjacentHTML('afterbegin', showValue);
            
        }
    
        function add(){   
            {{--event 連想配列の作成--}}
            var event = {};
            event['name'] = document.getElementById('event_name').value;
            event['weight'] = document.getElementById('event_weight').value;
            event['reps'] = document.getElementById('event_reps').value;
            event['sets'] = document.getElementById('event_sets').value;
            
            events.push(event);
        }
        
        function proc(){
            {{--events 配列の作成--}}
            var events = [];
        }
        
    </script>

</body>
@endsection