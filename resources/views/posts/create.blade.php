@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Create Post</h1>
        <form method="post" name="article-form" enctype="multipart/form-data" action={{route('posts.store')}}>
           @csrf   
          <div class="form-group">
              @csrf
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="body">Body:</label>
              <textarea class="form-control" name="ackeditor">
            </textarea>
           </div>
            <div class="form-group">
                <label for="">Multiple File Select</label>
                <input type="file" class="form-control" name="cover_image" multiple>
                {{-- <input required type="file" class="form-control" name="cover_image[]" multiple> --}}
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection