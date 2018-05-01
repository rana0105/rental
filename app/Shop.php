<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
	public function shop_bookings() {
    	return $this->hasMany('ShopBooking');
    }

    public function rent_collects() {
        return $this->hasMany('RentCollect');
    }

    public function billpays() {
        return $this->hasMany('Billpay');
    }
	
     public function companies() 
    {
    	return $this->belongsTo('App\Company','company_id');
    }

     public function complexes() 
    {
    	return $this->belongsTo('App\Complex','complex_id');
    }
}
