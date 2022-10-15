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
        
        <div class='training_events'>
            <h2>ADD YOUR TRAINING</h2>
            <h3>TYPE</h3>
            <select name='post[training_event_id]'>
                @foreach ($training_events as $training_event)
                    <option value={{ $training_event->id }}>{{ $training_event->name }}</option>
                @endforeach
            </select>
            <h3>REPS</h3>
            <input type='number' name='post[reps]'>
            <h3>SETS</h3>
            <input type='number' name='post[sets]'>
        </div>
        
        <div class='user_id'>
            <p>user id 映したくない</p>
            <input type='number' name='post[user_id]' value={{ Auth::id() }}>
        </div>
        <input type="submit" value="SUBMIT"/>
    </form>
    <div class="back">
        <a href="/">BACK</a>
    </div>
@endsection