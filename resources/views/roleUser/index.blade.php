<!DOCTYPE html>
<html>
<head>
  <title>roleUser (Index)</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{URL::to('roleUser') }}">roleUser Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('roleUser') }}">View All roleUser</a></li>
        <li><a href="{{ URL::to('roleUser/create')}}">Create a roleUser</a></li>
      </ul>
    </nav>
    <h1>All the roleUser</h1>
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{Session::get('message') }}</div>
    @endif
    <table class="table table-striped table-broleUsered">
      <thead>
        <tr>
          <th>user_id</th>
          <th>role_id</th>
          <th>created_at</th>
          <th>updated_at</th>
        </tr>
      </thead>
      <tbody>
        @foreach($roleUser as $key => $value)
        <tr>
          <td>{{ $value->user_id }}</td>
          <td>{{ $value->role_id }}</td>
          <td>{{ $value->created_at }}</td>
          <td>{{ $value->updated_at }}</td>
          <!-- we will also add show, edit, and delete buttons -->
          <td>
            <!-- delete the roleUser (uses the destroy method DESTROY /roleUser/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->
            <!-- Show the roleUser (uses the show method found at GET /roleUser/{id} -->
            <a class="btn btn-small btn-success" href="{{ URL::to('roleUser/' . $value->roleUserid) }}">Show this roleUser</a>
            <!-- Edit this roleUser (uses the edit method found at GET /roleUser/{id}/edit -->
            <a class="btn btn-small btn-info" href="{{ URL::to('roleUser/' . $value->roleUserid . '/edit')}}">Edit this roleUser</a>
            <!-- delete button -->
            {{ Form::open(array('url' => 'roleUser/' . $value->roleUserid, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete this roleUser', array('class' => 'btn btn-warning')) }}
            {{ Form::close() }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
