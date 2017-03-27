@extends('layout.layout')

@section('content')
    <div class="blog-post">

        @foreach($posts as $post)
<a href="/posts/{{$post->id}}" >
        <h2 class="blog-post-title">{{$post->title}}</h2></a>
        <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="#">Mark</a></p>

        <p> {{$post->body}}.</p>
        <hr>
            @endforeach
    </div><!-- /.blog-post -->
@endsection