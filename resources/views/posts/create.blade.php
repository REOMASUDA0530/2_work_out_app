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
        <div class='tags'>
            <p>tagを表示</p>
            <input type="text" name='post[training_event_id]' value=1>
        </div>
        <div class='user_id'>
            <input type='number' name='post[user_id]' value={{ Auth::id() }}>
        </div>
        <input type="submit" value="SUBMIT"/>
    </form>
    <div class="back">
        <a href="/">BACK</a>
    </div>
@endsection