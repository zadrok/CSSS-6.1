<!DOCTYPE html>
<html>
<head>
  <title>Show countrie</title>
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
    <h1>Showing {{ $countrie->regno }}</h1>
    <div class="jumbotron text-center">
      <p>name: {{ $countrie->name }}</p>
      <p>created_at: {{ $countrie->created_at }}</p>
      <p>updated_at: {{ $countrie->updated_at }}</p>
    </div>
  </div>
</body>
</html>
