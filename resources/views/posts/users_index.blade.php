@extends('layouts.app')

@section('content')

    <h2>{{ $user->name }}'s RECORDS</h2>
    
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <a class='show' href="/posts/{{ $post->id }}"></a>
                
                <h6 class='created_at'>{{ $post->created_at }}</h6>

                <div class='list'>
                    @foreach ($post->events as $event)
                        <h5>{{ $event->name }} {{ $event->weight }} kg × {{ $event->reps }} reps × {{ $event->sets }} sets</h4>
                    @endforeach
                </div>
                
                <p class='body'>{{ $post->body }}</p>
                
            </div>
            <hr>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>
@endsection
</html>