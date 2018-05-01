<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
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
}
