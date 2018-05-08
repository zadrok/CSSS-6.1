<!DOCTYPE html>
<html>
<head>
  <title>Show restaurant</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('restaurants') }}">restaurants Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('restaurants') }}">View All restaurants</a></li>
        <li><a href="{{ URL::to('restaurants/create') }}">Create a restaurant</a></li>
      </ul>
    </nav>
    <h1>Showing {{ $restaurants->name }}</h1>
    <div class="jumbotron text-center">
      <p>name: {{ $restaurants->name }}</p>
      <p>phone: {{ $restaurants->phone }}</p>
      <p>address_1: {{ $restaurants->address_1 }}</p>
      <p>address_2: {{ $restaurants->address_2 }}</p>
      <p>suburb: {{ $restaurants->suburb }}</p>
      <p>state: {{ $restaurants->state }}</p>
      <p>numberofseats: {{ $restaurants->numberofseats }}</p>
      <p>country_id: {{ $restaurants->country_id }}</p>
      <p>category_id: {{ $restaurants->category_id }}</p>
    </div>
  </div>
</body>
</html>
