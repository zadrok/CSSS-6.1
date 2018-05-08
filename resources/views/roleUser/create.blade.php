<!DOCTYPE html>
<html>
<head>
  <title>Create roleUser</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('roleUser') }}">roleUser Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('roleUser') }}">View All roleUser</a></li>
        <li><a href="{{ URL::to('roleUser/create') }}">Create a roleUser</a>
        </ul>
      </nav>
      <h1>Create a roleUser</h1>
      <!-- if there are creation errors, they will show here -->
      {{ HTML::ul($errors->all()) }}
      {{ Form::open(array('url' => 'roleUser')) }}
      <div class="form-group">
        {{ Form::label('user_id', 'user_id') }}
        {{ Form::text('user_id', Input::old('user_id'), array('class' => 'form-control')) }}
      </div>
      <div class="form-group">
        {{ Form::label('role_id', 'role_id') }}
        {{ Form::text('role_id', Input::old('role_id'), array('class' => 'form-control')) }}
      </div>
      {{ Form::submit('Create the roleUser!', array('class' => 'btn btn-primary')) }}
      {{ Form::close() }}
    </div>
  </body>
  </html>
