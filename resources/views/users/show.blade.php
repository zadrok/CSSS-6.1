<!DOCTYPE html>
<html>
<head>
  <title>Show user</title>
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
    <h1>Showing {{ $user->regno }}</h1>
    <div class="jumbotron text-center">
      <p>Registration Number: {{ $user->name }}</p>
      <p>Registration State: {{ $user->email }}</p>
      <p>Customer Name: {{ $user->password }}</p>
      <p>Customer Phone: {{ $user->created_at }}</p>
      <p>Vehicle Brand: {{ $user->updated_at }}</p>
      <p>Vehicle Model: {{ $user->country_id }}</p>
    </div>
  </div>
</body>
</html>
