<!DOCTYPE html>
<html>
<head>
  <title>Edit role</title>
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
        <li><a href="{{ URL::to('roles/create') }}">Create a role</a></li>
      </ul>
    </nav>
    <h1>Edit {{ $role->regno }}</h1>
    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}
    {{ Form::model($role, array('route' => array('roles.update', $role->roleid), 'method' => 'PUT')) }}
    <div class="form-group">
      {{ Form::label('name', 'name') }}
      {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Edit the role!', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
  </div>
</body>
</html>
