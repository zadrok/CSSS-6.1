<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
  protected $table = 'users'; // Define the table name
  public $incrementing = false;
  public $timestamps = true;
  protected $primaryKey = "id";
  protected $fillable = ['name', 'email', 'password', 'created_at', 'updated_at', 'country_id'];
  
  	public function country()
	{
		return $this->belongsTo('App\Countries', 'country_id');
	}
	
	public function posts()
	{
		return $this->hasMany('App\Posts', 'user_id','id');
	}
	
	public function comments()
	{
		return $this->hasMany('App\Comments', 'user_id','id');
	}
	
	public function roles()
	{
		return $this->hasMany('App\Roles', 'user_id','id');
	}
}
