<!DOCTYPE html>
<html>
<head>
  <title>Create role</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('roles') }}">roles Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('roles') }}">View All roles</a></li>
        <li><a href="{{ URL::to('roles/create') }}">Create a role</a>
        </ul>
      </nav>
      <h1>Create a role</h1>
      <!-- if there are creation errors, they will show here -->
      {{ HTML::ul($errors->all()) }}
      {{ Form::open(array('url' => 'roles')) }}
      <div class="form-group">
        {{ Form::label('name', 'name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
      </div>
      {{ Form::submit('Create the role!', array('class' => 'btn btn-primary')) }}
      {{ Form::close() }}
    </div>
  </body>
  </html>
