@extends('layouts.app')

@section('content')
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <p class='body'>{{ $post->body }}</p>
                
                <h6 class='created_at'>{{ $post->created_at }}</h6>
            </div>
            
            <div class='list'>
                @foreach ($post->events as $event)
                    <p>{{ $event->name }} {{ $event->reps }} × {{ $event->sets }}</p>
                @endforeach
            </div>
            
            <a class='user_name' href="/users/{{ $post->user->id }}">
                {{ $post->user->name }}
            </a>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
@endsection
</html>