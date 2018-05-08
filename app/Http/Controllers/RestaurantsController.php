<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Restaurants;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;
use App\Http\Requests\Restaurant;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Retrieve all the Restaurants
      $restaurants = Restaurants::all();
      // Load the view and pass the Restaurants
      return View::make('restaurants.index')->with('restaurants', $restaurants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View::make('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validated = $request->validated();
      $restaurants = new Restaurants;
      $restaurants->name = Input::get('name');
      $restaurants->phone = Input::get('phone');
      $restaurants->address_1 = Input::get('address_1');
      $restaurants->address_2 = Input::get('address_2');
      $restaurants->suburb = Input::get('suburb');
      $restaurants->state = Input::get('state');
      $restaurants->numberofseats = Input::get('numberofseats');
      $restaurants->country_id = Input::get('country_id');
      $restaurants->category_id = Input::get('category_id');
      $restaurants->save();
      // redirect
      Session::flash('message', 'Successfully created restaurant!');
      return Redirect::to('restaurants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // Retrieve the Categories based on the id
      $restaurants = Restaurants::find($id);
      // show the view and pass the Categories to it
      return View::make('restaurants.show')->with('restaurants', $restaurants);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // Retrieve the Categories based on the id
      $restaurants = Restaurants::find($id);
      // show the view and pass the Categories to it
      return View::make('restaurants.edit')->with('restaurants', $restaurants);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validated = $request->validated();
      $restaurants = Restaurants::find($id);
      $restaurants->name = Input::get('name');
      $restaurants->phone = Input::get('phone');
      $restaurants->address1 = Input::get('address1');
      $restaurants->address2 = Input::get('address2');
      $restaurants->suburb = Input::get('suburb');
      $restaurants->state = Input::get('state');
      $restaurants->numberofseats = Input::get('numberofseats');
      $restaurants->country_id = Input::get('country_id');
      $restaurants->category_id = Input::get('category_id');
      $restaurants->save();
      // redirect
      Session::flash('message', 'Successfully updated restaurant!');
      return Redirect::to('restaurants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // Delete
      $restaurants = Restaurants::find($id);
      $restaurants->delete();
      // redirect
      Session::flash('message', 'Successfully deleted the restaurant!');
      return Redirect::to('restaurants');
    }

    public function resturantWithCountry($id)
    {
      $countries = Countries::find($id);
      return $countries->name;
    }

    public function resturantWithCategory($id)
    {
      $categories = Categories::find($id);
      return View::make('categories.resturantWithCategory')->with('categories', $categories);
    }
}
