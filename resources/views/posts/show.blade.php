<!DOCTYPE html>
<html>
<head>
  <title>Show post</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('posts') }}">posts Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('posts') }}">View All posts</a></li>
        <li><a href="{{ URL::to('posts/create') }}">Create a post</a></li>
      </ul>
    </nav>
    <h1>Showing {{ $post->regno }}</h1>
    <div class="jumbotron text-center">
      <p>content: {{ $post->content }}</p>
      <p>created_at: {{ $post->created_at }}</p>
      <p>updated_at: {{ $post->updated_at }}</p>
      <p>post_id: {{ $post->restaurant_id }}</p>
      <p>user_id: {{ $post->user_id }}</p>
    </div>
  </div>
</body>
</html>
