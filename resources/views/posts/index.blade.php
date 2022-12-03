@extends('layouts.app')

@section('content')
    <div class='line_left'>
        
    </div>
    <div class='line_right'>
        
    </div>
    <div class='posts'>
        
        @foreach ($posts as $post)
            
            <div class='post'>
                <a class='user_name' href="/users/{{ $post->user->id }}">
                {{ $post->user->name }}
                </a>
                
                @guest
                
                @else
                <a class='show' href="/posts/{{ $post->id }}"></a>
                
                @endguest
                
                <h6 class='updated_at'>{{ $post->updated_at }}</h6>

                <div class='list'>
                    @foreach ($post->events as $event)
                        <h5>{{ $event->name }} {{ $event->weight }} kg × {{ $event->reps }} reps × {{ $event->sets }} sets</h4>
                    @endforeach
                </div>
                
                <p class='body'>{{ $post->body }}</p>
                
                {{--<div class='like'>

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
    
                </div>--}}
                
                <hr class='horizontal_line'>
                
            </div>
            
        @endforeach
    </div>
    
    
    <div class='pagenate'>
        <div class='links'>
            {{ $posts->links() }}
        </div>
    </div>
    
@endsection