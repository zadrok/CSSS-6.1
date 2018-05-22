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
use App\Http\Requests\RoleAPI;
use App\Http\Controllers\Controller;

class RoleAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Roles::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(RoleAPI $request)
    {
      $validated = $request->validated();
      $role = Roles::create($request->all());
      return response()->json($role, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleAPI $request)
    {
      $validated = $request->validated();
      $role = Roles::create($request->all());
      return response()->json($role, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RoleAPI $request)
    {
      $role = Roles::find($request['id']);
      return response()->json($role, 200);
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
    public function update(RoleAPI $request)
    {
      $validated = $request->validated();
      $role = Roles::find($request['id']);
      $role->update($request->all());
      return response()->json($role, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoleAPI $request)
    {
      $role = Roles::find($request['id']);
      $role->delete();
      return response()->json(null, 204);
    }
}
