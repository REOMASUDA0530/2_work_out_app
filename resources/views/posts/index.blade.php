@extends('layouts.app')

@section('content')
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <p class='body'>{{ $post->body }}</p>
                
            </div>
            
            <div class='list'>
                @foreach ($post->events as $event)
                    <h4>{{ $event->name }} {{ $event->weight }} kg × {{ $event->reps }} reps × {{ $event->sets }} sets</h4>
                @endforeach
            </div>
            
            <div class='user'>
                <h6>{{ $post->user->name }}</h6>
            </div>
            
            <a class='user_name' href="/users/{{ $post->user->id }}">
                {{ $post->user->name }}
            </a>
            
            <h6 class='created_at'>{{ $post->created_at }}</h6>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
@endsection
</html>