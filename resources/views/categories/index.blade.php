<!DOCTYPE html>
<html>
<head>
  <title>categories (Index)</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{URL::to('categories') }}">categories Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('categories') }}">View All categories</a></li>
        <li><a href="{{ URL::to('categories/create')}}">Create a categorie</a></li>
      </ul>
    </nav>
    <h1>All the categories</h1>
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{Session::get('message') }}</div>
    @endif
    <table class="table table-striped table-bcategorieed">
      <thead>
        <tr>
          <th>Categorie Name</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $key => $value)
        <tr>
          <td>{{ $value->name }}</td>
          <!-- we will also add show, edit, and delete buttons -->
          <td>
            <!-- delete the categorie (uses the destroy method DESTROY /categories/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->
            <!-- Show the categorie (uses the show method found at GET /categories/{id} -->
            <a class="btn btn-small btn-success" href="{{ URL::to('categories/' . $value->categorieid) }}">Show this categorie</a>
            <!-- Edit this categorie (uses the edit method found at GET /categories/{id}/edit -->
            <a class="btn btn-small btn-info" href="{{ URL::to('categories/' . $value->categorieid . '/edit')}}">Edit this categorie</a>
            <!-- delete button -->
            {{ Form::open(array('url' => 'categories/' . $value->categorieid, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete this categorie', array('class' => 'btn btn-warning')) }}
            {{ Form::close() }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
