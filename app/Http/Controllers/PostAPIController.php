<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurants;
use App\Posts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;
use App\Http\Requests\PostAPI;
use App\Http\Controllers\Controller;

class PostAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Posts::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PostAPI $request)
    {
      $validated = $request->validated();
      $restaurant = Restaurants::find($request['id']);
      $post = Posts::create($request->all());
      return response()->json($post, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostAPI $request)
    {
      $validated = $request->validated();
      $restaurant = Restaurants::find($request['id']);
      $post = Posts::create($request->all());
      return response()->json($post, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PostAPI $request)
    {
      $restaurant = Restaurants::find($request['id']);
      $post = Posts::find($request['id']);
      return response()->json($post, 200);
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
    public function update(PostAPI $request)
    {
      $validated = $request->validated();
      $restaurant = Restaurants::find($request['id']);
      $post = Posts::find($request['id']);
      $post->update($request->all());
      return response()->json($post, 200);
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
      $post = Posts::find($request['id']);
      $post->delete();
      return response()->json(null, 204);
    }
}
