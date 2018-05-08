<!DOCTYPE html>
<html>
<head>
  <title>Edit user</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('users') }}">users Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('users') }}">View All users</a></li>
        <li><a href="{{ URL::to('users/create') }}">Create a user</a></li>
      </ul>
    </nav>
    <h1>Edit {{ $user->regno }}</h1>
    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}
    {{ Form::model($user, array('route' => array('users.update', $user->userid), 'method' => 'PUT')) }}
    <div class="form-group">
      {{ Form::label('name', 'name') }}
      {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      {{ Form::label('email', 'email') }}
      {{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      {{ Form::label('password', 'password') }}
      {{ Form::text('password', Input::old('password'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      {{ Form::label('country_id', 'country_id') }}
      {{ Form::text('country_id', Input::old('country_id'), array('class' => 'formcontrol')) }}
    </div>
    {{ Form::submit('Edit the user!', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
  </div>
</body>
</html>
