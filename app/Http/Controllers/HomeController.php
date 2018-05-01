<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;
use App\Company;
use App\Complex;
use App\Tenant;
use App\ShopBooking;
use App\Shop;
use App\Bank;
use App\Employee;
use App\Expense;
use App\Category;
use App\RentCollect;
use App\Billpay;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('dashboard');
    // }
    
    public function index(Request $request)
    {
        date_default_timezone_set('Asia/Dhaka');
        $currentDate = date('M-Y');
        $totalincomeMonth = $this->getTotalIncomem($currentDate);
        $totalExpenseMonth = $this->getTotalExpensem($currentDate);
        $cashInHandMonth = $this->getTotalIncomem($currentDate) - $this->getTotalExpensem($currentDate);
        $profitMonth = $cashInHandMonth;
        
        return view('dashboard')->withTotalincomemonth($totalincomeMonth)->withTotoalexpensemonth($totalExpenseMonth)->withCashinhandmonth($cashInHandMonth)->withProfitmonth($profitMonth)->withCurrentdate($currentDate);
    }

   
    private function getTotalIncomem($date){
        
        $balance = 0;
        $cMonthFristDate = date('Y-m-01', strtotime($date));
        $cMonthLastDate = date("Y-m-t", strtotime($date));
        //dd($cMonthLastDate);
        while (strtotime($cMonthFristDate) <= strtotime($cMonthLastDate)) {
            $model = Billpay::where('bi_pdate',$cMonthFristDate)->get();
            if(sizeof($model)>0){
                foreach ($model as $key => $value) {
                    $balance += $value->bi_tamount;
                }
            }
            $cMonthFristDate = date ("Y-m-d", strtotime("+1 day", strtotime($cMonthFristDate)));
        }
        
        return $balance;
    }

    private function getTotalExpensem($date){
        $balance = 0;
        $cMonthFristDate = date('Y-m-01', strtotime($date));
        $cMonthLastDate = date("Y-m-t", strtotime($date));
        while (strtotime($cMonthFristDate) <= strtotime($cMonthLastDate)) {
            $model = Expense::where('ex_date',$cMonthFristDate)->get();
            if(sizeof($model)>0){
                foreach ($model as $key => $value) {
                    $balance += $value->ex_amount;
                }
            }
            $cMonthFristDate = date ("Y-m-d", strtotime("+1 day", strtotime($cMonthFristDate)));
        }
        return $balance;
    }
}
