<!DOCTYPE html>
<html>
<head>
  <title>roles (Index)</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{URL::to('roles') }}">roles Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('roles') }}">View All roles</a></li>
        <li><a href="{{ URL::to('roles/create')}}">Create a role</a></li>
      </ul>
    </nav>
    <h1>All the roles</h1>
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{Session::get('message') }}</div>
    @endif
    <table class="table table-striped table-broleed">
      <thead>
        <tr>
          <th>name</th>
          <th>created_at</th>
          <th>updated_at</th>
        </tr>
      </thead>
      <tbody>
        @foreach($roles as $key => $value)
        <tr>
          <td>{{ $value->name }}</td>
          <td>{{ $value->created_at }}</td>
          <td>{{ $value->updated_at }}</td>
          <!-- we will also add show, edit, and delete buttons -->
          <td>
            <!-- delete the role (uses the destroy method DESTROY /roles/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->
            <!-- Show the role (uses the show method found at GET /roles/{id} -->
            <a class="btn btn-small btn-success" href="{{ URL::to('roles/' . $value->roleid) }}">Show this role</a>
            <!-- Edit this role (uses the edit method found at GET /roles/{id}/edit -->
            <a class="btn btn-small btn-info" href="{{ URL::to('roles/' . $value->roleid . '/edit')}}">Edit this role</a>
            <!-- delete button -->
            {{ Form::open(array('url' => 'roles/' . $value->roleid, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete this role', array('class' => 'btn btn-warning')) }}
            {{ Form::close() }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
