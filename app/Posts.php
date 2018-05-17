<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
  protected $table = 'posts'; // Define the table name
  public $incrementing = false;
  public $timestamps = true;
  protected $primaryKey = "id";
  protected $fillable = ['content', 'created_at', 'updated_at', 'restaurant_id', 'user_id'];
  
  	public function restaurants()
	{
		return $this->belongsTo('App\Restaurants', 'restaurant_id');
	}

	public function users()
	{
		return $this->belongsTo('App\Users', 'user_id');
	}	
	
	public function comments()
	{
		return $this->hasMany('App\Comments', 'post_id','id');
	}
}
