<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RestaurantController extends Controller
{

  // public function data() {
  //   $info = [ ['Restaurant', 'Location', 'Cusinie Type'],
  //             ['Waya', 'Glen Waverley', 'Japanese'],
  //             ['Uncle Jack', 'Wheelers Hill', 'Chinese'],
  //             ['Bon Chicker and Beer', 'Glen Waverley', 'Korean'] ];
  //   //$data = "Restaurant,Location,Cusinie Type,Waya,Glen Waverley,Japanese,Uncle Jack,Wheelers Hill,Chinese.Bon Chicker and Beer,Glen Waverley,Korean";
  //   return view( 'showRestaurant', compact('info'));
  // }

  //insert
  public function insertRestaurant($restid, $restname, $restphone, $restaddress1, $restaddress2, $suburb, $state, $numberofseats) {
    $result = DB::insert('insert into restaurants (restname, restphone, restaddress1, restaddress2, suburb, state, numberofseats)
                          values (?,?,?,?,?,?,?)', [$restname, $restphone, $restaddress1, $restaddress2, $suburb, $state, $numberofseats]);
    //return $result;
  }

  //update
  public function updateRestaurant($restid, $restname, $restphone, $restaddress1, $restaddress2, $suburb, $state, $numberofseats) {
    $result = DB::update('update restaurants set restname = ?, restphone = ?, restaddress1 = ?, restaddress2 = ?, suburb = ?, state = ?, numberofseats = ? where restid = ?',
                        [$restname, $restphone, $restaddress1, $restaddress2, $suburb, $state, $numberofseats, $restid]);
    return $result;
  }

  //delete
  public function deleteRestaurant($restid) {
    $result = DB::delete('delete from restaurants where restid = ?', [$restid]);
    return $result;
  }

  //showall
  public function showallRestaurants() {
    $result = DB::select('select * from restaurants');
    return view('showRestaurantInfo', ['restaurants' => $result]);
  }

}
