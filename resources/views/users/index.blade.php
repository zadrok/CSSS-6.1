<!DOCTYPE html>
<html>
<head>
  <title>users (Index)</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{URL::to('users') }}">users Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('users') }}">View All users</a></li>
        <li><a href="{{ URL::to('users/create')}}">Create a user</a></li>
      </ul>
    </nav>
    <h1>All the users</h1>
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{Session::get('message') }}</div>
    @endif
    <table class="table table-striped table-busered">
      <thead>
        <tr>
          <th>name</th>
          <th>email</th>
          <th>password</th>
          <th>created_at</th>
          <th>updated_at</th>
          <th>country_id</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $key => $value)
        <tr>
          <td>{{ $value->name }}</td>
          <td>{{ $value->email }}</td>
          <td>{{ $value->password }}</td>
          <td>{{ $value->created_at }}</td>
          <td>{{ $value->updated_at }}</td>
          <td>{{ $value->country_id }}</td>
          <!-- we will also add show, edit, and delete buttons -->
          <td>
            <!-- delete the user (uses the destroy method DESTROY /users/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->
            <!-- Show the user (uses the show method found at GET /users/{id} -->
            <a class="btn btn-small btn-success" href="{{ URL::to('users/' . $value->userid) }}">Show this user</a>
            <!-- Edit this user (uses the edit method found at GET /users/{id}/edit -->
            <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->userid . '/edit')}}">Edit this user</a>
            <!-- delete button -->
            {{ Form::open(array('url' => 'users/' . $value->userid, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete this user', array('class' => 'btn btn-warning')) }}
            {{ Form::close() }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
