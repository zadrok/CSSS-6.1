<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Retrieve all the Categories
      $categories = Categories::all();
      // Load the view and pass the Categories
      return View::make('categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View::make('categories.create');
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
        return Redirect::to('categories/create')->withErrors($validator)->withInput(Input::except('password'));
      } else {
        // Store the data to the database
        $categories = new Categories;
        $categories->name = Input::get('name');
        $categories->created_at = Carbon::now();
        $categories->updated_at = Carbon::now();
        $categories->save();
        // redirect
        Session::flash('message', 'Successfully created Categorie!');
        return Redirect::to('categories');
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
      $categories = Categories::find($id);
      // show the view and pass the Categories to it
      return View::make('categories.show')->with('categories', $categories);
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
      $categories = Categories::find($id);
      // show the view and pass the Categories to it
      return View::make('categories.edit')->with('categories', $categories);
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
        return Redirect::to('categories/' . $id . '/edit')->withErrors($validator)->withInput(Input::except('password'));
      } else {
        // Store the data to the database
        $categories = Categories::find($id);
        $categories->name = Input::get('name');
        $categories->created_at = Carbon::now();
        $categories->updated_at = Carbon::now();
        $categories->save();
        // redirect
        Session::flash('message', 'Successfully updated Categorie!');
        return Redirect::to('categories');
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
      $categories = Categories::find($id);
      $categories->delete();
      // redirect
      Session::flash('message', 'Successfully deleted the Categorie!');
      return Redirect::to('categories');
    }
}
