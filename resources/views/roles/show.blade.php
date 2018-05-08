<!DOCTYPE html>
<html>
<head>
  <title>Show role</title>
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
    <h1>Showing {{ $role->regno }}</h1>
    <div class="jumbotron text-center">
      <p>Registration Number: {{ $role->name }}</p>
      <p>Registration State: {{ $role->created_at }}</p>
      <p>Customer Name: {{ $role->updated_at }}</p>
    </div>
  </div>
</body>
</html>
