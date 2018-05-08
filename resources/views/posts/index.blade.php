<!DOCTYPE html>
<html>
<head>
  <title>posts (Index)</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{URL::to('posts') }}">posts Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('posts') }}">View All posts</a></li>
        <li><a href="{{ URL::to('posts/create')}}">Create a post</a></li>
      </ul>
    </nav>
    <h1>All the posts</h1>
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{Session::get('message') }}</div>
    @endif
    <table class="table table-striped table-bposted">
      <thead>
        <tr>
          <th>content</th>
          <th>created_at</th>
          <th>updated_at</th>
          <th>restaurant_id</th>
          <th>user_id</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $key => $value)
        <tr>
          <td>{{ $value->content }}</td>
          <td>{{ $value->created_at }}</td>
          <td>{{ $value->updated_at }}</td>
          <td>{{ $value->restaurant_id }}</td>
          <td>{{ $value->user_id }}</td>
          <!-- we will also add show, edit, and delete buttons -->
          <td>
            <!-- delete the post (uses the destroy method DESTROY /posts/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->
            <!-- Show the post (uses the show method found at GET /posts/{id} -->
            <a class="btn btn-small btn-success" href="{{ URL::to('posts/' . $value->postid) }}">Show this post</a>
            <!-- Edit this post (uses the edit method found at GET /posts/{id}/edit -->
            <a class="btn btn-small btn-info" href="{{ URL::to('posts/' . $value->postid . '/edit')}}">Edit this post</a>
            <!-- delete button -->
            {{ Form::open(array('url' => 'posts/' . $value->postid, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete this post', array('class' => 'btn btn-warning')) }}
            {{ Form::close() }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
