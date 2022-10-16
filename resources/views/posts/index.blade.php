@extends('layouts.app')

@section('content')
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <p class='body'>{{ $post->body }}</p>
                <a class='user_name' href="/users/{{ $post->user->id }}">
                    {{ $post->user->name }}
                </a>
                <h6 class='created_at'>{{ $post->created_at }}</h6>
            </div>
            <h3>TYPE</h3>
            <a href="/types/{{ $post->event->type->id }}">{{ $post->event->type->name }}</a>
            <h3>REPS</h3>
            <p class='reps'>{{ $post->event->reps }}</p>
            <h3>SETS</h3>
            <p class='sets'>{{ $post->event->sets }}</p>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
@endsection
</html>