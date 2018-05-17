<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
  protected $table = 'restaurants'; // Define the table name
  public $incrementing = false;
  public $timestamps = false;
  protected $primaryKey = "id";
  protected $fillable = ['name', 'phone', 'address1', 'address2', 'suburb', 'state', 'numberofseats', 'country_id', 'category_id'];
  
  	public function country()
	{
		return $this->belongsTo('App\Countries', 'country_id');
	}
	
	public function category()
	{
		return $this->belongsTo('App\Categories', 'category_id');
	}	
	
	public function post()
	{
		return $this->hasMany('App\Posts', 'restaurant_id','id');
	}
}
