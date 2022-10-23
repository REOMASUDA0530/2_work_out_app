@extends('layouts.app')

@section('content')
    <h1>誰誰の投稿</h1>
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <p class='body'>{{ $post->body }}</p>
                <div class='list'>
                    @foreach ($post->events as $event)
                        <h4>{{ $event->name }} {{ $event->reps }} × {{ $event->sets }}</h4>
                    @endforeach
                </div>
            
                <h6 class='user_id'>{{ $post->user_id }}</h6>
                <h6 class='created_at'>{{ $post->created_at }}</h6>
            </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
@endsection
</html>