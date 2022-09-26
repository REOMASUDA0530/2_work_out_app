@extends('layouts.app')

@section('content')
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <p class='body'>{{ $post->body }}</p>
                <a class='user_name' href="/users/{{ $post->user_id }}">
                    {{ $user[$post->user_id] }}
                </a>
                <h6 class='created_at'>{{ $post->created_at }}</h6>
            </div>
            <a href="/training_events/{{ $post->training_event_id }}">
                {{ $post->training_event_name }}
            </a>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
@endsection
</html>