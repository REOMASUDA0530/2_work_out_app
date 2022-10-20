@extends('layouts.app')

@section('content')
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
            <h2>ADD YOUR TRAINING</h2>
            
            <h3>TYPE</h3>
            
            {{--eventsを作る--}}
            {{--event[name]の入力--}}
            
            <div class='add_event'>
                @foreach($events as $event)
                    <label>
                        <input type="checkbox" value="{{ $event->id }}" name="events_array[]">
                        {{$event->name}}
                        </input>
                    </label>
                @endforeach
            </div> 
        </div>
        
        <div class='user_id'>
            <input type='hidden' name='post[user_id]' value={{ Auth::id() }}>
        </div>
        <input type="submit" value="SUBMIT"/>
    </form>
    <div class="back">
        <a href="/">BACK</a>
    </div>
@endsection