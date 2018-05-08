<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comments;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;
use App\Http\Requests\Comment;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Retrieve all the Comments
      $comments = Comments::all();
      // Load the view and pass the Comments
      return View::make('comments.index')->with('comments', $comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View::make('comments.create');
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
      $comments = new Comments;
      $comments->content = Input::get('content');
      $comments->post_id = Input::get('post_id');
      $comments->user_id = Input::get('user_id');
      $comments->created_at = Carbon::now();
      $comments->updated_at = Carbon::now();
      $comments->save();
      // redirect
      Session::flash('message', 'Successfully created Comment!');
      return Redirect::to('comments');
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
      $comments = Comments::find($id);
      // show the view and pass the Categories to it
      return View::make('comments.show')->with('comments', $comments);
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
      $comments = Comments::find($id);
      // show the view and pass the Categories to it
      return View::make('comments.edit')->with('comments', $comments);
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
      $comments = Comments::find($id);
      $comments->content = Input::get('content');
      $comments->post_id = Input::get('post_id');
      $comments->user_id = Input::get('user_id');
      $comments->created_at = Carbon::now();
      $comments->updated_at = Carbon::now();
      $comments->save();
      // redirect
      Session::flash('message', 'Successfully updated Comment!');
      return Redirect::to('comments');
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
      $comments = Comments::find($id);
      $comments->delete();
      // redirect
      Session::flash('message', 'Successfully deleted the Comment!');
      return Redirect::to('comments');
    }

    public function commentWithPost($id)
    {
      $posts = Posts::find($id);
      return View::make('posts.commentWithPost')->with('posts', $posts);
    }

    public function commentWithUser($id)
    {
      $users = Users::find($id);
      return View::make('users.commentWithUser')->with('users', $users);
    }
}
