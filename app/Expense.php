<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function companies() 
    {
    	return $this->belongsTo('App\Company','company_id');
    }

     public function complexes() 
    {
    	return $this->belongsTo('App\Complex','complex_id');
    }

     public function categories() 
    {
    	return $this->belongsTo('App\Category','cat_id');
    }

}
