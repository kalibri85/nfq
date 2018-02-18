<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $fillable = ['name','surname','address','city','zipcode','email','phone']; 
    //
	public function orders()
{
    return $this->hasMany('App\Models\Order');
}
}