<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentCollect extends Model
{
     public function companies() 
    {
    	return $this->belongsTo('App\Company','company_id');
    }

     public function complexes() 
    {
    	return $this->belongsTo('App\Complex','complex_id');
    }

     public function shops() 
    {
    	return $this->belongsTo('App\Shop','shop_id');
    }

     public function tenants() 
    {
    	return $this->belongsTo('App\Tenant','tenant_id');
    }
}
