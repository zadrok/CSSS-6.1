@extends('layout.layout')
@section('title', 'showRestaurant')

@section('content')
  <h1>showRestaurant</h1>

  <table>
  @foreach ($data as $d)
    <tr>
    @foreach ($d as $a)
      @if ($loop->parent->first)
        <th>{{$a}}</th>
      @else
        <td>{{$a}}</td>
      @endif
    @endforeach
  </tr>
  @endforeach
</table>

@endsection
