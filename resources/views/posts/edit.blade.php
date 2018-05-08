<!DOCTYPE html>
<html>
<head>
  <title>Edit post</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('posts') }}">posts Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('posts') }}">View All posts</a></li>
        <li><a href="{{ URL::to('posts/create') }}">Create a post</a></li>
      </ul>
    </nav>
    <h1>Edit {{ $post->regno }}</h1>
    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}
    {{ Form::model($post, array('route' => array('posts.update', $post->postid), 'method' => 'PUT')) }}
    <div class="form-group">
      {{ Form::label('content', 'content') }}
      {{ Form::text('content', Input::old('content'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      {{ Form::label('restaurant_id', 'restaurant_id') }}
      {{ Form::text('restaurant_id', Input::old('restaurant_id'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      {{ Form::label('user_id', 'user_id') }}
      {{ Form::text('user_id', Input::old('user_id'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Edit the post!', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
  </div>
</body>
</html>
