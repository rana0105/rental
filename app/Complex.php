<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complex extends Model
{
	 public function shops() {
    	return $this->hasMany('Shop');
    }

    public function shop_bookings() {
    	return $this->hasMany('ShopBooking');
    }

    public function rent_collects() {
        return $this->hasMany('RentCollect');
    }

    public function expenses() {
        return $this->hasMany('Expense');
    }
    
     public function companies() 
    {
    	return $this->belongsTo('App\Company','company_id');
    }
}
