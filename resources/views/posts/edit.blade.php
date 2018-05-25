@extends('layouts.app')

@section('content')
<div class="container">

    @include('posts._messages')
    <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Edit Posts</h1>
      <hr>
      <form method="POST" action="{{ route('posts.update', $post->id)}}">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="usr">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$post->title}} "required>
        </div>
        <div class="form-group">
          <label for="pwd">content</label>
          <textarea class="form-control" rows="5" id="content" name="content" required>{{$post->content}}</textarea>
        </div>
        <button class="btn btn-success btn-lg btn-block" type="submit">Edit Post</button>
      </form>
    </div>
  </div>

</div>
@endsection

composer dump-autoload
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
