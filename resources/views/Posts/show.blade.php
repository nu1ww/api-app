@extends('layout.layout')

@section('content')
    <div class="blog-post">


            <a href="/posts/{{$post->id}}" >
                <h2 class="blog-post-title">{{$post->title}}</h2></a>
            <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="#">Mark</a></p>

            <p> {{$post->body}}.</p>
            <hr>
        <ul>
        @foreach($post->comments as $comment)
            <li>
                {{$comment->body}} {{$comment->created_at->diffForHumans()}}
            </li>
            @endforeach
        </ul>
        <form action="/post/{{$post->id}}/comments" method="post">
            {{csrf_field()}}

            Comment:<br>
            <input type="text" name="body"><br><br>
            <button type="submit" >Add</button>
        </form>

    </div><!-- /.blog-post -->
@endsection