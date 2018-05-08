<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Restaurants</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div class="container">
    <br/>
    <table border="1">
      <tr>
        <th>Restaurant Number</th>
        <th>Restaurant Name</th>
        <th>Restaurant Phone</th>
        <th>Restaurant address 1</th>
        <th>Restaurant address 2</th>
        <th>Restaurant suburb</th>
        <th>Restaurant state</th>
        <th>Restaurant number of seats</th>
      </tr>
      @for($i = 0; $i < count($restaurants); $i++)
      <tr>
        <td>{{ $restaurants[$i]->restid }}</td>
        <td>{{ $restaurants[$i]->restname }}</td>
        <td>{{ $restaurants[$i]->restphone }}</td>
        <td>{{ $restaurants[$i]->restaddress1 }}</td>
        <td>{{ $restaurants[$i]->restaddress2 }}</td>
        <td>{{ $restaurants[$i]->suburb }}</td>
        <td>{{ $restaurants[$i]->state }}</td>
        <td>{{ $restaurants[$i]->numberofseats }}</td>
      </tr>
      @endfor
    </table><br/>
  </div>
</body>
</html>
