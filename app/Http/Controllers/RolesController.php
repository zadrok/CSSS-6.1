<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Retrieve all the Roles
      $roles = Roles::all();
      // Load the view and pass the Roles
      return View::make('roles.index')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View::make('roles.create');
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
        'name' => 'required'
      );
      $validator = Validator::make(Input::all(), $rules);
      if ($validator->fails()) {
        return Redirect::to('roles/create')->withErrors($validator)->withInput(Input::except('password'));
      } else {
        // Store the data to the database
        $roles = new Roles;
        $roles->name = Input::get('name');
        $roles->created_at = Carbon::now();
        $roles->updated_at = Carbon::now();
        $roles->save();
        // redirect
        Session::flash('message', 'Successfully created role!');
        return Redirect::to('roles');
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
      $roles = Roles::find($id);
      // show the view and pass the Categories to it
      return View::make('roles.show')->with('roles', $roles);
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
      $roles = Roles::find($id);
      // show the view and pass the Categories to it
      return View::make('roles.edit')->with('roles', $roles);
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
        'name' => 'required'
      );
      $validator = Validator::make(Input::all(), $rules);
      if ($validator->fails()) {
        return Redirect::to('roles/' . $id . '/edit')->withErrors($validator)->withInput(Input::except('password'));
      } else {
        // Store the data to the database
        $roles = Roles::find($id);
        $roles->name = Input::get('name');
        $roles->created_at = Carbon::now();
        $roles->updated_at = Carbon::now();
        $roles->save();
        // redirect
        Session::flash('message', 'Successfully update role!');
        return Redirect::to('roles');
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
      $roles = Roles::find($id);
      $roles->delete();
      // redirect
      Session::flash('message', 'Successfully deleted the role!');
      return Redirect::to('roles');
    }
}
