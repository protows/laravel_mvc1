@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Posts</h1>
        <p>Laravel from scratch</p>
        @if(count($posts) > 0)
            <div class="well">
                @foreach($posts as $post)
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                @endforeach
            </ul>
            {{$posts->links()}}
        @else
            <p>No posts</p>
        @endif
    </div> 
@endsection
