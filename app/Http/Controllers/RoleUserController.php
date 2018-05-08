<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role_User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;

class RoleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Retrieve all the RoleUser
      $roleUser = Role_User::all();
      // Load the view and pass the RoleUser
      return View::make('roleUser.index')->with('roleUser', $roleUser);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View::make('roleUser.create');
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
        'user_id' => 'required|numeric',
        'role_id' => 'required|numeric'
      );
      $validator = Validator::make(Input::all(), $rules);
      if ($validator->fails()) {
        return Redirect::to('roleUser/create')->withErrors($validator)->withInput(Input::except('password'));
      } else {
        // Store the data to the database
        $roleUser = new Role_User;
        $roleUser->user_id = Input::get('user_id');
        $roleUser->role_id = Input::get('role_id');
        $roleUser->created_at = Carbon::now();
        $roleUser->updated_at = Carbon::now();
        $roleUser->save();
        // redirect
        Session::flash('message', 'Successfully created roleUser!');
        return Redirect::to('roleUser');
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
      $roleUser = Role_User::find($id);
      // show the view and pass the Categories to it
      return View::make('roleUser.show')->with('roleUser', $roleUser);
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
      $roleUser = Role_User::find($id);
      // show the view and pass the Categories to it
      return View::make('roleUser.edit')->with('roleUser', $roleUser);
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
        'user_id' => 'required|numeric',
        'role_id' => 'required|numeric'
      );
      $validator = Validator::make(Input::all(), $rules);
      if ($validator->fails()) {
        return Redirect::to('roleUser/' . $id . '/edit')->withErrors($validator)->withInput(Input::except('password'));
      } else {
        // Store the data to the database
        $roleUser = Role_User::find($id);
        $roleUser->user_id = Input::get('user_id');
        $roleUser->role_id = Input::get('role_id');
        $roleUser->created_at = Carbon::now();
        $roleUser->updated_at = Carbon::now();
        $roleUser->save();
        // redirect
        Session::flash('message', 'Successfully update roleUser!');
        return Redirect::to('roleUser');
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
      $roleUser = Role_User::find($id);
      $roleUser->delete();
      // redirect
      Session::flash('message', 'Successfully deleted the roleUser!');
      return Redirect::to('roleUser');
    }

    public function userWithRole($id)
    {
      $users = Users::find($id);
      return View::make('users.userWithRole')->with('users', $users);
    }

    public function roleWithUser($id)
    {
      $roles = Roles::find($id);
      return View::make('roles.roleWithUser')->with('roles', $roles);
    }

}
