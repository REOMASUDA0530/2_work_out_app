@extends('layouts.app')

@section('content')
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
    </div>
    <input type="submit" value="SUBMIT"/>
    <div class="back">
        <a href="/">BACK</a>
    </div>
@endsection