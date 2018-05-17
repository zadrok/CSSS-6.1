<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
  protected $table = 'comments'; // Define the table name
  public $incrementing = false;
  public $timestamps = true;
  protected $primaryKey = "id";
  protected $fillable = ['content', 'created_at', 'updated_at', 'post_id', 'user_id'];
  
  	public function post()
	{
		return $this->belongsTo('App\Posts', 'post_id');
	}
	public function users()
	{
		return $this->belongsTo('App\Users', 'user_id');
	}
}
