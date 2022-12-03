@extends('layouts.app')

@section('content')
    <div class='post'>
        <a class='user_name' href="/users/{{ $post->user->id }}">
            {{ $post->user->name }}
        </a>
        
        <h5 class='updated_at'>{{ $post->updated_at }}</h5>
        <div class='list'>
            @foreach ($post->events as $event)
                <h4>{{ $event->name }} {{ $event->weight }} kg × {{ $event->reps }} reps × {{ $event->sets }} sets</h4>
            @endforeach
        </div>
        
        {{-- <h2 class='title'>{{ $post->title }}</h2> --}}
        <p class='body'>{{ $post->body }}</p>
        
        @guest
        
        @else
        <div class='like'>

        @if($like)
    <!-- 「LIKE」取消用ボタンを表示 -->
	        <a href="{{ route('unlike', $post) }}" class="btn btn-success btn-sm">
	    	LIKE
		<!-- 「LIKE」の数を表示 -->
		        <span class="badge">
			        {{ $post->likes->count() }}
		        </span>
	        </a>
        @else
    <!-- 「LIKE」ボタンを表示 -->
	        <a href="{{ route('like', $post) }}" class="btn btn-secondary btn-sm">
		        LIKE
		<!-- 「LIKE」の数を表示 -->
		        <span class="badge">
			        {{ $post->likes->count() }}
		        </span>
	        </a>
        @endif
    
        </div>
        
        @endguest
    <br>
    
    @if(Auth::id() == $post->user_id)
        <p class='edit'>[<a href="/posts/{{ $post->id }}/edit">EDIT</a>]</p>
    @endif
    
        {{--<a class='user_name' href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a>--}}
    </div>
    
    
    
    {{--<div class='comment'>
        <input type='text' name='comment' id='comment'>
        <button type='submit'>SUBMIT</button>
    </div>--}}
    <br>
    
    <div class="footer">
        <a href="/">HOME</a>
    </div>
    
@endsection