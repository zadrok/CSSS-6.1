<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
  protected $table = 'countries'; // Define the table name
  public $incrementing = false;
  public $timestamps = true;
  protected $primaryKey = "id";
  protected $fillable = ['name', 'created_at', 'updated_up'];
  
  	public function users()
	{
		return $this->hasMany('App\Users', 'id','country_id');
	}
	
	public function restaurants()
	{
		return $this->hasMany('App\Restaurants', 'id','country_id');
	}
}
