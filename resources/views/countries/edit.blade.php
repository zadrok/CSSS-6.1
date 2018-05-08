<!DOCTYPE html>
<html>
<head>
  <title>Edit countrie</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('countries') }}">countries Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('countries') }}">View All countries</a></li>
        <li><a href="{{ URL::to('countries/create') }}">Create a countrie</a></li>
      </ul>
    </nav>
    <h1>Edit {{ $countrie->regno }}</h1>
    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}
    {{ Form::model($countrie, array('route' => array('countries.update', $countrie->countrieid), 'method' => 'PUT')) }}
    <div class="form-group">
      {{ Form::label('name', 'name') }}
      {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Edit the countrie!', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
  </div>
</body>
</html>
