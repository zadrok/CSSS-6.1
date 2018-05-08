<!DOCTYPE html>
<html>
<head>
  <title>comments (Index)</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{URL::to('comments') }}">comments Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('comments') }}">View All comments</a></li>
        <li><a href="{{ URL::to('comments/create')}}">Create a comment</a></li>
      </ul>
    </nav>
    <h1>All the comments</h1>
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{Session::get('message') }}</div>
    @endif
    <table class="table table-striped table-bcommented">
      <thead>
        <tr>
          <th>content</th>
          <th>created_at</th>
          <th>updated_at</th>
          <th>post_id</th>
          <th>user_id</th>
        </tr>
      </thead>
      <tbody>
        @foreach($comments as $key => $value)
        <tr>
          <td>{{ $value->content }}</td>
          <td>{{ $value->created_at }}</td>
          <td>{{ $value->updated_at }}</td>
          <td>{{ $value->post_id }}</td>
          <td>{{ $value->user_id }}</td>
          <!-- we will also add show, edit, and delete buttons -->
          <td>
            <!-- delete the comment (uses the destroy method DESTROY /comments/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->
            <!-- Show the comment (uses the show method found at GET /comments/{id} -->
            <a class="btn btn-small btn-success" href="{{ URL::to('comments/' . $value->commentid) }}">Show this comment</a>
            <!-- Edit this comment (uses the edit method found at GET /comments/{id}/edit -->
            <a class="btn btn-small btn-info" href="{{ URL::to('comments/' . $value->commentid . '/edit')}}">Edit this comment</a>
            <!-- delete button -->
            {{ Form::open(array('url' => 'comments/' . $value->commentid, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete this comment', array('class' => 'btn btn-warning')) }}
            {{ Form::close() }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
