<!DOCTYPE html>
<html>
<head>
  <title>Create categorie</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('categories') }}">categories Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('categories') }}">View All categories</a></li>
        <li><a href="{{ URL::to('categories/create') }}">Create a categorie</a>
        </ul>
      </nav>
      <h1>Create a categorie</h1>
      <!-- if there are creation errors, they will show here -->
      {{ HTML::ul($errors->all()) }}
      {{ Form::open(array('url' => 'categories')) }}
      <div class="form-group">
        {{ Form::label('name', 'categorie Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
      </div>
      {{ Form::submit('Create the categorie!', array('class' => 'btn btn-primary')) }}
      {{ Form::close() }}
    </div>
  </body>
  </html>
