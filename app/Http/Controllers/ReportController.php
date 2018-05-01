<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
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

class ReportController extends Controller
{
    public function getBillgenerate(Request $request)
    {
        $company = Company::all();
        $complex = Complex::all();
    	return view('backend.report.billgenerate')
        ->withCompany($company)
        ->withComplex($complex);
    }

    // Start company report

    public function getCompanyReport(Request $request)
    {
    	return view('backend.report.companyreport');
    }

    public function postCompanyReport(Request $request)
    {
        $modelcom = Company::all();
        $pdf = \PDF::loadView('backend.report.showcompany', [
                'modelcom' => $modelcom
                ]);
        return $pdf->stream('showcompany.pdf');
    }

    // End company report


    // Start complex report

    public function getComplexReport(Request $request)
    {
        $modelcom = Company::all();
        $compx = Complex::all();
        
    	return view('backend.report.complexreport')->withModelcom($modelcom)->withCompx($compx);
    }

    public function getcomplexReportshow($id)
     {
      $compx = DB::table("complexes")
                    ->where("company_id",$id)
                    ->pluck("complex_name","id");
        return json_encode($compx);
     }

    public function postComplexReport(Request $id)
    {
       
        $modelplex = Complex::where('company_id', $id->company)->get();
        $model = Company::find($id->company);
        $pdf = \PDF::loadView('backend.report.showcomplex', [
                'modelplex' => $modelplex,
                'model' => $model
                ]);
        return $pdf->stream('showcomplex.pdf');
    }

    // end complex report

    // Start Rent Collection report

    public function getRentCollect(Request $request)
    {
        $modelcom = Company::all();
        $compx = Complex::all();
        $sop = Shop::all();
        
        return view('backend.report.rentcollect')
            ->withModelcom($modelcom)
            ->withCompx($compx)
            ->withSop($sop);
    }

    public function getrentReportshow($id)
     {
      $sop = DB::table("shops")
            ->where("complex_id",$id)
            ->pluck("shop_no","id");
        return json_encode($sop);
     }

    public function postRentCollect(Request $request)
    {
        
        $fromdate = $request->datefrom;
        $todate = $request->dateto;
        $company = $request->company;
        $complex = $request->complex;
        $shop = $request->shop;
        
        if($fromdate != null && $todate !=null){
            $model ='';
            if($company != null && $complex == null && $shop == null){
                $model = ShopBooking::where('company_id',$company)->whereBetween('book_date', array($fromdate, $todate))->get();
            }elseif($company == null && $complex != null && $shop == null){
                $model = ShopBooking::where('complex_id',$complex)->whereBetween('book_date', array($fromdate, $todate))->get();
            }elseif($company == null && $complex == null && $shop != null){
                $model = ShopBooking::where('shop_id',$shop)->whereBetween('book_date', array($fromdate, $todate))->get();
            }elseif($company != null && $complex != null && $shop == null){
                $model = ShopBooking::where('company_id',$company)->where('complex_id',$complex)->whereBetween('book_date', array($fromdate, $todate))->get();
            }elseif($company != null && $complex == null && $shop != null){
                $model = ShopBooking::where('company_id',$company)->where('shop_id',$shop)->whereBetween('book_date', array($fromdate, $todate))->get();
            }elseif($company == null && $complex != null && $shop != null){
                $model = ShopBooking::where('complex_id',$complex)->where('shop_id',$shop)->whereBetween('book_date', array($fromdate, $todate))->get();
            }elseif($company != null && $complex != null && $shop != null){
                $model = ShopBooking::where('company_id',$company)->where('complex_id',$complex)->where('shop_id',$shop)->whereBetween('book_date', array($fromdate, $todate))->get();
            }else{
                $model = ShopBooking::whereBetween('book_date', array($fromdate, $todate))->get();
            }
            $pdf = \PDF::loadView('backend.report.showrentcollectreport', [
                'model' => $model,
                'fromdate' => $fromdate,
                'todate' => $todate
                ]);
            return $pdf->stream('showrentcollectreport.pdf');
        }else{
            
            return redirect('rentcollect-report');
        }
    }

    // end Rent Collection report

   // start utility reprot
     public function getUtilityReport(Request $request)
    {
        $uticom = Company::all();
        $utiplex = Complex::all();
        return view('backend.report.utility')
            ->withUticom($uticom)
            ->withUtiplex($utiplex);
    }

     public function getutidropReport($id)
    {

        $utiplex = DB::table("expenses")
            ->join('complexes', 'complexes.id', '=', 'expenses.complex_id')
            ->where("expenses.company_id",$id)
            ->get();
        $array = array();
        if(sizeof($utiplex)>0){
            foreach ($utiplex as $key => $value) {
                $row['id'] = $value->complex_id;
                $row['name'] = $value->complex_name;
                array_push($array,$row);
            }
        }
        return json_encode($array);
    }

     public function postUtilityReport(Request $request)
    {
        $fromdate = $request->datefrom;
        $todate = $request->dateto;
        $company = $request->company_uti;
        $complex = $request->complex_uti;

        if($fromdate != null && $todate !=null){
            $model ='';
            if($company != null && $complex == null){
                $model =DB::table('shop_bookings')
                    ->join('billpays', 'shop_bookings.tenant_id', '=', 'billpays.tenant_id')
                    ->join('tenants', 'shop_bookings.tenant_id', '=', 'tenants.id')
                    ->where('shop_bookings.company_id', $company)->whereBetween('billpays.bi_pdate', array($fromdate, $todate))->get();
            }elseif($company == null && $complex != null){
                $model =DB::table('shop_bookings')
                    ->join('billpays', 'shop_bookings.tenant_id', '=', 'billpays.tenant_id')
                    ->join('tenants', 'shop_bookings.tenant_id', '=', 'tenants.id')
                    ->where('shop_bookings.complex_id', $complex)->whereBetween('billpays.bi_pdate', array($fromdate, $todate))->get();
            }elseif($company != null && $complex != null){
                //dd($request->all());
                $model =DB::table('shop_bookings')
                    ->join('billpays', 'shop_bookings.tenant_id', '=', 'billpays.tenant_id')
                    ->join('tenants', 'shop_bookings.tenant_id', '=', 'tenants.id')
                    ->where('shop_bookings.company_id', $company)->where('shop_bookings.complex_id', $complex)->whereBetween('billpays.bi_pdate', array($fromdate, $todate))->get();
            }else{
                $model = Billpay::whereBetween('bi_pdate', array($fromdate, $todate))->get();
            }
            $pdf = \PDF::loadView('backend.report.showutilityreport', [
                'model' => $model,
                'fromdate' => $fromdate,    
                'todate' => $todate
                ]);
            return $pdf->stream('showutilityreport.pdf');
        }else{
            
            return redirect('utility-report');
        }
    }

     // end utility reprot

    // Start Tenant Report

    public function getTenantReport(Request $request)
    {
        $complex = Complex::all();
    	return view('backend.report.tenantreport')->withCom($complex);
    }

    public function postTenantReport(Request $id)
    {
        //dd($id->all());
        $shops = ShopBooking::where('complex_id', $id->complex)->get();
        $model = Complex::find($id->complex);
        $pdf = \PDF::loadView('backend.report.tenantreportshow', [
                'sho' => $shops,
                'model' => $model
                ]);
        return $pdf->stream('tenantreportshow.pdf');
    }


    public function postComplexDue(Request $id)
    {
        $complex = $id->complex_id;
        date_default_timezone_set('Asia/Dhaka');
        $currentDate = date('Y-m-d');
        
        if($complex != null){
            $model =ShopBooking::where('complex_id',$complex)->get();
        }else{
            $model = ShopBooking::all();
        }
        $array = array();
        if(sizeof($model)>0){
            
            foreach ($model as $key => $value) {
                $month = 1;
                $book_date = strtotime($value->book_date);
                while (strtotime('+1 MONTH',$book_date) < strtotime($currentDate)) {
                    $month++;
                    $book_date = strtotime('+1 MONTH',$book_date);
                }
                $totalDue = $month * $value->total_rent;
                
                $totalPaid = 0;
                $bill = Billpay::where('tenant_id',$value->tenant_id)->where('shop_id',$value->shop_id)->get();
                foreach ($bill as $key => $value2) {
                    $totalPaid +=$value2->bi_tamount;
                }
                $due = $totalPaid - $totalDue;
                $row['shopnumber'] = $value->shops->shop_no;
                $row['complex'] = $value->complexes->complex_name;
                $row['tanant'] = $value->tenants->tenat_name;
                $row['address'] = $value->tenants->t_address;
                $row['bookingdate'] = $value->book_date;
                $row['mobile'] = $value->tenants->t_mobile;
                $row['due'] = $due;
                $row['month'] = $month;
                array_push($array,$row);
            }
        }
       $pdf = \PDF::loadView('backend.report.tenantcomplexduereportshow', [
                'array' => $array
                ]);
        return $pdf->stream('tenantcomplexduereportshow.pdf');
    }


    public function getTenantDue(Request $request)
    {
        $company = Company::all();
        $complex = Complex::all();
    	return view('backend.report.tenantdue')->withCompany($company)->withComplex($complex);
    }

    public function getTenantDuedrop($id)
    {
       $complex = DB::table("complexes")
                    ->where("company_id",$id)
                    ->pluck("complex_name","id");
        return json_encode($complex);
    }

    public function postTenantDue(Request $request)
    {
        
        $company = $request->company_due;
        $complex = $request->complex_due;
        date_default_timezone_set('Asia/Dhaka');
        $currentDate = date('Y-m-d');
        
        if($company != null && $complex == null){
            $model =ShopBooking::where('company_id', $company)->get();
        }elseif($company == null && $complex != null){
            $model =ShopBooking::where('complex_id',$complex)->get();
        }elseif($company != null && $complex != null){
            $model =ShopBooking::where('company_id', $company)->where('complex_id',$complex)->get();
        }else{
            $model = ShopBooking::all();
        }
             if(sizeof($model)>0){
                $array = array();
                foreach ($model as $key => $value) {
                    $month = 1;
                    $book_date = strtotime($value->book_date);
                    while (strtotime('+1 MONTH',$book_date) < strtotime($currentDate)) {
                        $month++;
                        $book_date = strtotime('+1 MONTH',$book_date);
                    }
                    $totalDue = $month * $value->total_rent;
                    
                    $totalPaid = 0;
                    $bill = Billpay::where('tenant_id',$value->tenant_id)->where('shop_id',$value->shop_id)->get();
                    foreach ($bill as $key => $value2) {
                        $totalPaid +=$value2->bi_tamount;
                    }
                    $due = $totalPaid - $totalDue;
                    $row['shopnumber'] = $value->shops->shop_no;
                    $row['complex'] = $value->complexes->complex_name;
                    $row['tanant'] = $value->tenants->tenat_name;
                    $row['address'] = $value->tenants->t_address;
                    $row['bookingdate'] = $value->book_date;
                    $row['mobile'] = $value->tenants->t_mobile;
                    $row['due'] = $due;
                    $row['month'] = $month;
                    array_push($array,$row);
                }
            }
            $pdf = \PDF::loadView('backend.report.showtenantduereport', [
                'array' => $array
                ]);
            return $pdf->stream('showtenantduereport.pdf');
    }

    // End Tenant Report

     public function getBankReport(Request $request)
    {
    	return view('backend.report.bankreport');
    }

    // Start Expense Report

     public function getExpenseReport(Request $request)
    {
        $modelcom = Company::all();
        $compx = Complex::all();
        $exp = Expense::all();
        
        return view('backend.report.expensereport')
            ->withModelcom($modelcom)
            ->withCompx($compx)
            ->withExp($exp);

    }

     public function getexptRepor($id)
    {

        $compx = DB::table("expenses")
            ->join('complexes', 'complexes.id', '=', 'expenses.complex_id')
            ->where("expenses.company_id",$id)
            ->get();
        $array = array();
        if(sizeof($compx)>0){
            foreach ($compx as $key => $value) {
                $row['id'] = $value->complex_id;
                $row['name'] = $value->complex_name;
                array_push($array,$row);
            }
        }
        return json_encode($array);
    }


     public function getexptReporcat($id)
    {

        $exp = DB::table("expenses")
            ->join('categories', 'categories.id', '=', 'expenses.cat_id')
            ->where("expenses.complex_id",$id)
            ->get();
        $array = array();
        if(sizeof($exp)>0){
            foreach ($exp as $key => $value) {
                $row['id'] = $value->cat_id;
                $row['name'] = $value->cat_name;
                array_push($array,$row);
            }
        }
        return json_encode($array);
    }

      
     public function postExpenseReport(Request $request)
    {
        $fromdate = $request->datefrom;
        $todate = $request->dateto;
        $company = $request->company_exp;
        $complex = $request->complex_exp;
        $category = $request->category_exp;

        //dd($request->all());
        
        if($fromdate != null && $todate !=null){
            $model ='';
            if($company != null && $complex == null && $category == null){
                $model = Expense::where('company_id',$company)->whereBetween('ex_date', array($fromdate, $todate))->get();
            }elseif($company == null && $complex != null && $category == null){
                $model = Expense::where('complex_id',$complex)->whereBetween('ex_date', array($fromdate, $todate))->get();
            }elseif($company == null && $complex == null && $category != null){
                $model = Expense::where('cat_id',$category)->whereBetween('ex_date', array($fromdate, $todate))->get();
            }elseif($company != null && $complex != null && $category == null){
                $model = Expense::where('company_id',$company)->where('complex_id',$complex)->whereBetween('ex_date', array($fromdate, $todate))->get();
            }elseif($company != null && $complex == null && $category != null){
                $model = Expense::where('company_id',$company)->where('cat_id',$category)->whereBetween('ex_date', array($fromdate, $todate))->get();
            }elseif($company == null && $complex != null && $category != null){
                $model = Expense::where('complex_id',$complex)->where('cat_id',$category)->whereBetween('ex_date', array($fromdate, $todate))->get();
            }elseif($company != null && $complex != null && $category != null){
                $model = Expense::where('company_id',$company)->where('complex_id',$complex)->where('cat_id',$category)->whereBetween('ex_date', array($fromdate, $todate))->get();
            }else{
                $model = Expense::whereBetween('ex_date', array($fromdate, $todate))->get();
            }
            $pdf = \PDF::loadView('backend.report.showexpensereport', [
                'model' => $model
                ]);
            return $pdf->stream('showexpensereport.pdf');
        }else{
            
            return redirect('expense-report');
        }

    }

    // End Expense Report

    // Start In Out Day to day Report

     public function getInoutReport(Request $request)
    {
        $paybill = Billpay::all();
    	return view('backend.report.inoutreport')->withPaybill($paybill);
    }

    public function postInoutReport(Request $request)
    {

        $fromdate = $request->datefrom;
        $todate = $request->dateto;

        $firstDate = $fromdate;
        $bill = Billpay::all();
        $firstBillDate = '';
        if($bill){
            $firstBillDate = $bill[0]->bi_pdate;
            foreach ($bill as $key => $value) {
               if(strtotime($firstBillDate)>strtotime($value->bi_pdate)){
                    $firstBillDate = $value->bi_pdate;
               }
            }
        }
        $expense = Expense::all();
        $firstExpenseDate = '';
        if($expense){
            $firstExpenseDate = $expense[0]->ex_date;
            foreach ($expense as $key => $value) {
               if(strtotime($firstExpenseDate)>strtotime($value->ex_date)){
                    $firstExpenseDate = $value->ex_date;
               }
            }
        }

        if(strtotime($firstExpenseDate)<strtotime($firstBillDate)){
            $firstDate = $firstExpenseDate;
        }else{
            $firstDate = $firstBillDate;
        }
        $array = array();
        while (strtotime($fromdate) <= strtotime($todate)) {
                $bill = new Billpay();
                $row['date'] = $fromdate;
                $row['opening'] = $bill->getOpeningBalance($firstDate,$fromdate);
                $row['income'] = $bill->getIncomeBalance($fromdate);
                $row['expense'] = $bill->getExpenseBalance($fromdate);
                $row['closing'] = ($bill->getOpeningBalance($firstDate,$fromdate)+$bill->getIncomeBalance($fromdate))-($bill->getExpenseBalance($fromdate));
                array_push($array,$row);

                $fromdate = date ("Y-m-d", strtotime("+1 day", strtotime($fromdate)));
        }
        $pdf = \PDF::loadView('backend.report.showinoutreport', [
                'array' => $array
                ]);
        return $pdf->stream('showinoutreport.pdf');
    }

    // End In Out Day to day Report

    // Start Final  Report

     public function getFinalReport(Request $request) 
    {
        $totalincome = $this->getTotalIncome();
        $totalExpense = $this->getTotalExpense();
        $cashInHand = $this->getTotalIncome() - $this->getTotalExpense();
        $profit = $cashInHand;
        $due = $this->getTotalDue();

        //
        date_default_timezone_set('Asia/Dhaka');
        $currentDate = date('Y-m-d');
        $totalincomeMonth = $this->getTotalIncomem($currentDate);
        $totalExpenseMonth = $this->getTotalExpensem($currentDate);
        $cashInHandMonth = $this->getTotalIncomem($currentDate) - $this->getTotalExpensem($currentDate);
        $profitMonth = $cashInHandMonth;
        //
        $totalincomey = $this->getTotalIncomey($currentDate);
        $totalExpensey = $this->getTotalExpensey($currentDate);
        $cashInHandy = $this->getTotalIncomey($currentDate) - $this->getTotalExpensey($currentDate);
        $profity = $cashInHandy;
        $pdf = \PDF::loadView('backend.report.finalreport', [
                'totalincome'       => $totalincome,
                'totalexpense'      => $totalExpense,
                'cashinhand'        => $cashInHand,
                'profit'            => $profit,
                'due'               => $due,
                'totalincomemonth'  => $totalincomeMonth,
                'totoalexpensemonth' => $totalExpenseMonth,
                'cashinhandmonth'   => $cashInHandMonth,
                'profitmonth'       => $profitMonth,
                'totalincomey'      => $totalincomey,
                'totalexpensey'     => $totalExpensey,
                'cashinhandy'       => $cashInHandy,
                'profity'           => $profity
                ]);
        return $pdf->stream('finalreport.pdf');
    }

    public function postFinalReport(Request $request)
    {
        return view('backend.report.showfinalreport');
    }
    private function getTotalIncome(){
        $balance = 0;
        $model = Billpay::all();
        if(sizeof($model)>0){
            foreach ($model as $key => $value) {
                $balance += $value->bi_tamount;
            }
        }
        return $balance;
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
    private function getTotalIncomey($todaydate){
        
        $balance = 0;
        $date=date_create($todaydate);
        date_sub($date,date_interval_create_from_date_string("1 days"));
        $todaydate = date_format($date,"Y-m-d");
        $model = Billpay::where('bi_pdate',$todaydate)->get();
        if(sizeof($model)>0){
            foreach ($model as $key => $value) {
                $balance += $value->bi_tamount;
            }
        }
        return $balance;
    }

    private function getTotalExpense(){
        $balance = 0;
        $model = Expense::all();
        if(sizeof($model)>0){
            foreach ($model as $key => $value) {
                $balance += $value->ex_amount;
            }
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

    private function getTotalExpensey($todaydate){
        $balance = 0;
        $date=date_create($todaydate);
        date_sub($date,date_interval_create_from_date_string("1 days"));
        $todaydate = date_format($date,"Y-m-d");
        $model = Expense::where('ex_date',$todaydate)->get();
        if(sizeof($model)>0){
            foreach ($model as $key => $value) {
                $balance += $value->ex_amount;
            }
        }
        return $balance;
    }

    private function getTotalDue(){
        date_default_timezone_set('Asia/Dhaka');
        $currentDate = date('Y-m-d');
        $model = ShopBooking::all();
        $totalDue = 0;
        if(sizeof($model)>0){
            foreach ($model as $key => $value) {
                $month = 1;
                $book_date = strtotime($value->book_date);
                while (strtotime('+1 MONTH',$book_date) < strtotime($currentDate)) {
                    $month++;
                    $book_date = strtotime('+1 MONTH',$book_date);
                }
                $totalDue = $month * $value->total_rent;
                $totalPaid = 0;
                $bill = Billpay::where('tenant_id',$value->tenant_id)->where('shop_id',$value->shop_id)->get();
                foreach ($bill as $key => $value2) {
                    $totalPaid +=$value2->bi_tamount;
                }
                $totalDue += $totalPaid - $totalDue;
            }
        }
        return $totalDue;
    }
    
    // End Final Report
}
