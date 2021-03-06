<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurants;
use App\Posts;
use App\Comments;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;
use App\Http\Requests\RestaurantAPI;
use App\Http\Controllers\Controller;

class RestaurantAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Restaurants::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(RestaurantAPI $request)
    {
      $validated = $request->validated();
      $restaurant = Restaurants::create($request->all());
      return response()->json($restaurant, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestaurantAPI $request)
    {
      $validated = $request->validated();
      $restaurant = Restaurants::create($request->all());
      return response()->json($restaurant, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
		if($request->filled('id'))
		{
			$restaurant = Restaurants::with('post', 'post.comments')->find($request['id']);
		}
		else if($request->filled('country_id'))
		{
			$restaurant = Restaurants::where('country_id', '=', $request->input('country_id'))->get();
		}
		else if($request->filled('category_id'))
		{
			$restaurant = Restaurants::where('category_id', '=', $request->input('category_id'))->get();
		}
		else
		{
			$restaurant = Restaurants::find($request['id']);
		}
	  return response()->json($restaurant, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RestaurantAPI $request)
    {
      $validated = $request->validated();
      $restaurant = Restaurants::find($request['id']);
      $restaurant->update($request->all());
      return response()->json($restaurant, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $restaurant = Restaurants::find($request['id']);
      $restaurant->delete();
      return response()->json(null, 204);
    }
}
