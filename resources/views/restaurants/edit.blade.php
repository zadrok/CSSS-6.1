<!DOCTYPE html>
<html>
<head>
  <title>Edit restaurant</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('restaurants') }}">restaurants Alert</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('restaurants') }}">View All restaurants</a></li>
        <li><a href="{{ URL::to('restaurants/create') }}">Create a restaurant</a></li>
      </ul>
    </nav>
    <h1>Edit {{ $restaurant->regno }}</h1>
    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}
    {{ Form::model($restaurant, array('route' => array('restaurants.update', $restaurant->restaurantid), 'method' => 'PUT')) }}
    <div class="form-group">
      {{ Form::label('name', 'name') }}
      {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      {{ Form::label('phone', 'phone') }}
      {{ Form::text('phone', Input::old('phone'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      {{ Form::label('address_1', 'address_1') }}
      {{ Form::text('address_1', Input::old('address_1'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      {{ Form::label('address_2', 'address_2') }}
      {{ Form::text('address_2', Input::old('address_2'), array('class' => 'formcontrol')) }}
    </div>
    <div class="form-group">
      {{ Form::label('suburb', 'suburb') }}
      {{ Form::text('suburb', Input::old('suburb'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      {{ Form::label('state', 'state') }}
      {{ Form::text('state', Input::old('state'), array('class' => 'formcontrol')) }}
    </div>
    <div class="form-group">
      {{ Form::label('numberofseats', 'numberofseats') }}
      {{ Form::text('numberofseats', Input::old('numberofseats'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      {{ Form::label('country_id', 'country_id') }}
      {{ Form::text('country_id', Input::old('country_id'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      {{ Form::label('category_id', 'category_id') }}
      {{ Form::text('category_id', Input::old('category_id'), array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Edit the restaurant!', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
  </div>
</body>
</html>
