<!DOCTYPE html>
<html>
<head>
  <title>Create comment</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('comments') }}">comments Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('comments') }}">View All comments</a></li>
        <li><a href="{{ URL::to('comments/create') }}">Create a comment</a>
        </ul>
      </nav>
      <h1>Create a comment</h1>
      <!-- if there are creation errors, they will show here -->
      {{ HTML::ul($errors->all()) }}
      {{ Form::open(array('url' => 'comments')) }}
      <div class="form-group">
        {{ Form::label('content', 'content') }}
        {{ Form::text('content', Input::old('content'), array('class' => 'form-control')) }}
      </div>
      <div class="form-group">
        {{ Form::label('post_id', 'post_id') }}
        {{ Form::text('post_id', Input::old('post_id'), array('class' => 'form-control')) }}
      </div>
      <div class="form-group">
        {{ Form::label('user_id', 'user_id') }}
        {{ Form::text('user_id', Input::old('user_id'), array('class' => 'form-control')) }}
      </div>
      {{ Form::submit('Create the comment!', array('class' => 'btn btn-primary')) }}
      {{ Form::close() }}
    </div>
  </body>
  </html>
