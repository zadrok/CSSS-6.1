<!DOCTYPE html>
<html>
<head>
  <title>Show roleUser</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('roleUser') }}">roleUser Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('roleUser') }}">View All roleUser</a></li>
        <li><a href="{{ URL::to('roleUser/create') }}">Create a roleUser</a></li>
      </ul>
    </nav>
    <h1>Showing {{ $roleUser->regno }}</h1>
    <div class="jumbotron text-center">
      <p>Registration Number: {{ $roleUser->user_id }}</p>
      <p>Registration State: {{ $roleUser->role_id }}</p>
      <p>Customer Name: {{ $roleUser->created_at }}</p>
      <p>Customer Phone: {{ $roleUser->updated_at }}</p>
    </div>
  </div>
</body>
</html>
