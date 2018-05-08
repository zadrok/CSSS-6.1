<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Countries;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Retrieve all the Countries
      $countries = Countries::all();
      // Load the view and pass the Countries
      return View::make('countries.index')->with('countries', $countries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View::make('countries.create');
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
        return Redirect::to('comments/create')->withErrors($validator)->withInput(Input::except('password'));
      } else {
        // Store the data to the database
        $countries = new Countries;
        $countries->name = Input::get('name');
        $countries->created_at = Carbon::now();
        $countries->updated_at = Carbon::now();
        $countries->save();
        // redirect
        Session::flash('message', 'Successfully created Countrie!');
        return Redirect::to('countries');
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
      $countries = Countries::find($id);
      // show the view and pass the Categories to it
      return View::make('countries.show')->with('countries', $countries);
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
      $countries = Countries::find($id);
      // show the view and pass the Categories to it
      return View::make('countries.edit')->with('countries', $countries);
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
        return Redirect::to('comments/' . $id . '/edit')->withErrors($validator)->withInput(Input::except('password'));
      } else {
        // Store the data to the database
        $countries = Countries::find($id);
        $countries->name = Input::get('name');
        $countries->created_at = Carbon::now();
        $countries->updated_at = Carbon::now();
        $countries->save();
        // redirect
        Session::flash('message', 'Successfully updated Countrie!');
        return Redirect::to('countries');
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
      $countries = Countries::find($id);
      $countries->delete();
      // redirect
      Session::flash('message', 'Successfully deleted the Countrie!');
      return Redirect::to('countries');
    }
}
