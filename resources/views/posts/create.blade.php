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
            
            {{--eventsを作る--}}
            {{--event[name]の入力--}}
            
            <div class='add_event'>
                <h2>ADD YOUR TRAINING</h2>
                <select name='event[name]'>
                    @foreach($types as $type)
                        <option value={{ $type->name }}>{{ $type->name }}</option>
                    @endforeach
                </select>
                <input type='number' name='event[weight]' placeholder='WEIGHT'>
                <input type='number' name='event[reps]' placeholder='REPS'>
                <input type='number' name='event[sets]' placeholder='SETS'>
            </div> 
            
            <div class'added_events'>
                {{--JavaScriptを書く--}}
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