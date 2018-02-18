<?php

namespace App\Models;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use DB; 
class Order extends Model
{
    //
	protected $fillable = ['title','id_customer','quantity','amount'];
    protected $dates = ['created_at'];	
	
    //

public function customers()
{
    return $this->belongsTo('App\Models\Customer','id_customer');
}

}
