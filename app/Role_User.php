<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
  protected $table = 'role_user'; // Define the table name
  public $incrementing = false;
  public $timestamps = false;
  protected $fillable = ['user_id', 'role_id', 'created_at', 'updated_at'];
  
  	public function users()
	{
		return $this->belongsTo('App\Users', 'user_id');
	}
	
	public function roles()
	{
		return $this->belongsTo('App\Roles', 'role_id');
	}
}
