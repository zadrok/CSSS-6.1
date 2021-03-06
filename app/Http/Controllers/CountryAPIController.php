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
use App\Http\Requests\CountryAPI;
use App\Http\Controllers\Controller;


class CountryAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Countries::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CountryAPI $request)
    {
      $validated = $request->validated();
      $country = Countries::create($request->all());
      return response()->json($country, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryAPI $request)
    {
      $validated = $request->validated();
      $country = Countries::create($request->all());
      return response()->json($country, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CountryAPI $request)
    {
      $country = Countries::find($request['id']);
      return response()->json($country, 200);
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
    public function update(CountryAPI $request)
    {
      $validated = $request->validated();
      $country = Countries::find($request['id']);
      $country->update($request->all());
      return response()->json($country, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $country = Countries::find($request['id']);
      $country->delete();
      return response()->json(null, 204);
    }
}
