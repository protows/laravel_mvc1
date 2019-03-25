@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Edit Post</h1>
        <form method="post" name="article-form" action="{{ route('posts.update', $post->id) }}">
           @csrf   
           @method('PUT')
          <div class="form-group">
              @csrf
              <label for="title">Title:</label>
              <input type="text" class="form-control" value="{{$post->title}}" name="title"/>
          </div>
          <div class="form-group">
              <label for="body">Body:</label>
              <textarea class="form-control" name="ackeditor">{{$post->body}}>
              </textarea>
           </div>
           
           <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection