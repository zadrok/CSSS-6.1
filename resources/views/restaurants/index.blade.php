<!DOCTYPE html>
<html>
<head>
  <title>restaurants (Index)</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{URL::to('restaurants') }}">restaurants Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('restaurants') }}">View All restaurants</a></li>
        <li><a href="{{ URL::to('restaurants/create')}}">Create a restaurant</a></li>
      </ul>
    </nav>
    <h1>All the restaurants</h1>
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{Session::get('message') }}</div>
    @endif
    <table class="table table-striped table-brestauranted">
      <thead>
        <tr>
          <th>name</th>
          <th>phone</th>
          <th>address_1</th>
          <th>address_2</th>
          <th>suburb</th>
          <th>state</th>
          <th>numberofseats</th>
          <th>country_id</th>
          <th>category_id</th>
        </tr>
      </thead>
      <tbody>
        @foreach($restaurants as $key => $value)
        <tr>
          <td>{{ $value->name }}</td>
          <td>{{ $value->phone }}</td>
          <td>{{ $value->address_1 }}</td>
          <td>{{ $value->address_2 }}</td>
          <td>{{ $value->suburb }}</td>
          <td>{{ $value->state }}</td>
          <td>{{ $value->numberofseats }}</td>
          <td>{{ $value->country_id }}</td>
          <td>{{ $value->category_id }}</td>
          <!-- we will also add show, edit, and delete buttons -->
          <td>
            <!-- delete the restaurant (uses the destroy method DESTROY /restaurants/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->
            <!-- Show the restaurant (uses the show method found at GET /restaurants/{id} -->
            <a class="btn btn-small btn-success" href="{{ URL::to('restaurants/' . $value->id) }}">Show this restaurant</a>
            <!-- Edit this restaurant (uses the edit method found at GET /restaurants/{id}/edit -->
            <a class="btn btn-small btn-info" href="{{ URL::to('restaurants/' . $value->id . '/edit')}}">Edit this restaurant</a>
            <!-- delete button -->
            {{ Form::open(array('url' => 'restaurants/' . $value->restaurantid, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete this restaurant', array('class' => 'btn btn-warning')) }}
            {{ Form::close() }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
