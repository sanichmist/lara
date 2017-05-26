@extends('main')

@section('title', '| Blog')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Blog</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($posts as $post)
                <h2>{{ $post->title }}</h2>
                <h5>Published: {{ $post->created_at->format('d.m.Y H:i') }}</h5>

                <p>{{ str_limit($post->body, 10) }}</p>

                <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read more</a>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection