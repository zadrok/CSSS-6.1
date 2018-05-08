<!DOCTYPE html>
<html>
<head>
  <title>Show comment</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('comments') }}">comments Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('comments') }}">View All comments</a></li>
        <li><a href="{{ URL::to('comments/create') }}">Create a comment</a></li>
      </ul>
    </nav>
    <h1>Showing {{ $comment->regno }}</h1>
    <div class="jumbotron text-center">
      <p>content: {{ $comment->content }}</p>
      <p>created_at: {{ $comment->created_at }}</p>
      <p>updated_at: {{ $comment->updated_at }}</p>
      <p>post_id: {{ $comment->post_id }}</p>
      <p>user_id: {{ $comment->user_id }}</p>
    </div>
  </div>
</body>
</html>
