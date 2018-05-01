<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function complexes() {
    	return $this->hasMany('Complex');
    }

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
}
