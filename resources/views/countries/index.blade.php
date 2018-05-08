<!DOCTYPE html>
<html>
<head>
  <title>countries (Index)</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{URL::to('countries') }}">countries Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('countries') }}">View All countries</a></li>
        <li><a href="{{ URL::to('countries/create')}}">Create a countrie</a></li>
      </ul>
    </nav>
    <h1>All the countries</h1>
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{Session::get('message') }}</div>
    @endif
    <table class="table table-striped table-bcountrieed">
      <thead>
        <tr>
          <th>name</th>
          <th>created_at</th>
          <th>updated_at</th>
        </tr>
      </thead>
      <tbody>
        @foreach($countries as $key => $value)
        <tr>
          <td>{{ $value->name }}</td>
          <td>{{ $value->created_at }}</td>
          <td>{{ $value->updated_at }}</td>
          <!-- we will also add show, edit, and delete buttons -->
          <td>
            <!-- delete the countrie (uses the destroy method DESTROY /countries/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->
            <!-- Show the countrie (uses the show method found at GET /countries/{id} -->
            <a class="btn btn-small btn-success" href="{{ URL::to('countries/' . $value->countrieid) }}">Show this countrie</a>
            <!-- Edit this countrie (uses the edit method found at GET /countries/{id}/edit -->
            <a class="btn btn-small btn-info" href="{{ URL::to('countries/' . $value->countrieid . '/edit')}}">Edit this countrie</a>
            <!-- delete button -->
            {{ Form::open(array('url' => 'countries/' . $value->countrieid, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete this countrie', array('class' => 'btn btn-warning')) }}
            {{ Form::close() }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
