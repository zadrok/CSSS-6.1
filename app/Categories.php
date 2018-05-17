<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $table = 'categories'; // Define the table name
  public $incrementing = false;
  public $timestamps = true;
  protected $primaryKey = "id";
  protected $fillable = ['name', 'created_at', 'updated_at'];
  
  	public function restaurants()
	{
		return $this->hasMany('App\Restaurants', 'id','category_id');
	}
}
