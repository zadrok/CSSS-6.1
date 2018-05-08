<!DOCTYPE html>
<html>
<head>
  <title>Create countrie</title>
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
        <li><a href="{{ URL::to('countries/create') }}">Create a countrie</a>
        </ul>
      </nav>
      <h1>Create a countrie</h1>
      <!-- if there are creation errors, they will show here -->
      {{ HTML::ul($errors->all()) }}
      {{ Form::open(array('url' => 'countries')) }}
      <div class="form-group">
        {{ Form::label('name', 'name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
      </div>
      {{ Form::submit('Create the countrie!', array('class' => 'btn btn-primary')) }}
      {{ Form::close() }}
    </div>
  </body>
  </html>
