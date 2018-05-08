<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;
use App\Http\Requests\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Retrieve all the Posts
      $posts = Posts::all();
      // Load the view and pass the Posts
      return View::make('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View::make('posts.create');
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
      $posts = new Posts;
      $posts->content = Input::get('content');
      $posts->created_at = Carbon::now();
      $posts->updated_at = Carbon::now();
      $posts->save();
      Session::flash('message', 'Successfully created post!');
      return Redirect::to('posts');
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
      $posts = Posts::find($id);
      // show the view and pass the Categories to it
      return View::make('posts.show')->with('posts', $posts);
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
      $posts = Posts::find($id);
      // show the view and pass the Categories to it
      return View::make('posts.edit')->with('posts', $posts);
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
      $posts = Posts::find($id);
      $posts->content = Input::get('content');
      $posts->created_at = Carbon::now();
      $posts->updated_at = Carbon::now();
      $posts->save();
      Session::flash('message', 'Successfully updated post!');
      return Redirect::to('posts');
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
      $posts = Posts::find($id);
      $posts->delete();
      // redirect
      Session::flash('message', 'Successfully deleted the post!');
      return Redirect::to('posts');
    }

    public function postWithRestaurant($id)
    {
      $restaurants = Restaurants::find($id);
      return View::make('restaurants.postWithRestaurant')->with('restaurants', $restaurants);
    }

    public function postWithUser($id)
    {
      $users = Users::find($id);
      return View::make('users.postWithUser')->with('users', $users);
    }
}
