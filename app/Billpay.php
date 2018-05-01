<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billpay extends Model
{
    public function tenants() 
    {
    	return $this->belongsTo('App\Tenant','tenant_id');
    }

    public function shops() 
    {
    	return $this->belongsTo('App\Shop','shop_id');
    }

    public function getIncomeBalance($date){
    	$balance = 0;
    	$model = Billpay::where('bi_pdate', $date)->get();
        if(sizeof($model)>0){
        	foreach ($model as $key => $value) {
        		$balance += $value->bi_tamount;
        	}
        }

        return $balance;
    }

    public function getExpenseBalance($date){
    	$balance = 0;
    	$model = Expense::where('ex_date', $date)->get();
        if(sizeof($model)>0){
        	foreach ($model as $key => $value) {
        		$balance += $value->ex_amount;
        	}
        }

        return $balance;
    }

     public function getOpeningBalance($startdate,$todaydate){
    	$incomebalance = 0;
    	$expenseBalance = 0;
    	$date=date_create($todaydate);
        date_sub($date,date_interval_create_from_date_string("1 days"));
        $todaydate = date_format($date,"Y-m-d");

        if(strtotime($todaydate)<strtotime($startdate)){
        	$startdate = $todaydate;
        }

        while (strtotime($startdate) <= strtotime($todaydate)) {
	        $incomebalance += $this->getIncomeBalance($startdate);
	        $expenseBalance +=$this->getExpenseBalance($startdate);
	    	$startdate = date ("Y-m-d", strtotime("+1 day", strtotime($startdate)));
	    }
        return ($incomebalance - $expenseBalance);
    }
}
