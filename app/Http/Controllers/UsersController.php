<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Retrieve all the Users
      $users = Users::all();
      // Load the view and pass the Users
      return View::make('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View::make('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Validate
      // Read more on validation at http://laravel.com/docs/validation
      $rules = array(
        'name' => 'required',
        'email' => 'required',
        'country_id' => 'required|numeric'
      );
      $validator = Validator::make(Input::all(), $rules);
      if ($validator->fails()) {
        return Redirect::to('users/create')->withErrors($validator)->withInput(Input::except('password'));
      } else {
        // Store the data to the database
        $users = new Users;
        $users->name = Input::get('name');
        $users->email = Input::get('email');
        $users->password = Input::get('password');
        $users->country_id = Input::get('country_id');
        $users->created_at = Carbon::now();
        $users->updated_at = Carbon::now();
        $users->save();
        // redirect
        Session::flash('message', 'Successfully created user!');
        return Redirect::to('users');
      }
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
      $users = Users::find($id);
      // show the view and pass the Categories to it
      return View::make('users.show')->with('users', $users);
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
      $users = Users::find($id);
      // show the view and pass the Categories to it
      return View::make('users.edit')->with('users', $users);
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
      // Validate
      // Read more on validation at http://laravel.com/docs/validation
      $rules = array(
        'name' => 'required',
        'email' => 'required',
        'country_id' => 'required|numeric'
      );
      $validator = Validator::make(Input::all(), $rules);
      if ($validator->fails()) {
        return Redirect::to('users/' . $id . '/edit')->withErrors($validator)->withInput(Input::except('password'));
      } else {
        // Store the data to the database
        $users = Users::find($id);
        $users->name = Input::get('name');
        $users->email = Input::get('email');
        $users->password = Input::get('password');
        $users->country_id = Input::get('country_id');
        $users->created_at = Carbon::now();
        $users->updated_at = Carbon::now();
        $users->save();
        // redirect
        Session::flash('message', 'Successfully update user!');
        return Redirect::to('users');
      }
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
      $users = Users::find($id);
      $users->delete();
      // redirect
      Session::flash('message', 'Successfully deleted the user!');
      return Redirect::to('users');
    }

    public function userWithCountry($id)
    {
      $countries = Countries::find($id);
      return View::make('countries.userWithCountry')->with('countries', $countries);
    }
}
