<!DOCTYPE html>
<html>
<head>
  <title>Show categorie</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('categories') }}">categories Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('categories') }}">View All categories</a></li>
        <li><a href="{{ URL::to('categories/create') }}">Create a categorie</a></li>
      </ul>
    </nav>
    <h1>Showing {{ $categorie->regno }}</h1>
    <div class="jumbotron text-center">
      <p>Categorie Name: {{ $categorie->name }}</p>
    </div>
  </div>
</body>
</html>
