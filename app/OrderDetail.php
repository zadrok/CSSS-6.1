<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
  protected $table = 'orderdetails'; // Define the table name
  protected $primaryKey = "detailid";
  public $incrementing = false;
  protected $fillable = ['desc', 'cost', 'price', 'orderid'];
  
  public function order()
  {
    return $this->belongsTo('App\Order', 'orderid');
  }
}
