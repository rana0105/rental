<?php

namespace App\Http\Controllers;

use App\Tenant;
use Illuminate\Http\Request;
use App\Company;
use App\Complex;
use App\Shop;
use App\ShopBooking;
use App\Billpay;
use DB;
use Image;
use Storage;

class TenantController extends Controller
{
    
    public function index()
    {
        $tenants = Tenant::all();
        return view('backend.tenant.index')->withTenants($tenants);
    }

    
    public function create()
    {
        return view('backend.tenant.create');
    }

    
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'tenat_name' => 'required|max:255',
            'father_hus' => 'required|max:255',
            't_mother' => 'required|max:255',
            't_date' => 'required|date',
            't_propiter' => 'required|max:255',
            't_address' => 'required|max:255',
            't_phone' => '',
            't_mobile' => '',
            't_fax' => '',
            't_email' => '',
            't_web' => '',
            't_image' => 'required',
            'tenant_status' => 'required'
            ]);

        $images = $request->file('t_image');

        $filename = time().'.'.$images->getClientOriginalExtension();
        $location = '/home/hellosyl/rental.hello-sylhet.com/upload_file/resize_images/'. $filename;
        Image::make($images)->resize(600 , 600)->save($location);
      
        if($images){

            $tenant = new Tenant;

            $tenant->tenat_name = $request->tenat_name;
            $tenant->father_hus = $request->father_hus;
            $tenant->t_mother = $request->t_mother;
            $tenant->t_date = $request->t_date;
            $tenant->t_propiter = $request->t_propiter;
            $tenant->t_address = $request->t_address;
            $tenant->t_phone = $request->t_phone;
            $tenant->t_mobile = $request->t_mobile;
            $tenant->t_fax = $request->t_fax;
            $tenant->t_email = $request->t_email;
            $tenant->t_web = $request->t_web;
            $tenant->condition = $request->tenant_status;

            $tenant->t_image = $filename;
            
        }

        $tenant->save();

        return redirect()->route('tenants.index')->with('success', 'Data have been save !');
    }

    
    public function show(Tenant $tenant)
    {
        //
    }

    
    public function edit($id)
    {
        $tenant = Tenant::find($id);

        return view('backend.tenant.index')->withTenant($tenant);
    }

    public function tenant_edit($id)
    {
        $tenant = Tenant::find($id);

        return view('backend.tenant.edit-modal')->withTenant($tenant);
    }

    
    public function update(Request $request, $id)
    {
       // dd($request->all());
        $this->validate($request, [
            'tenat_name' => '',
            'father_hus' => '',
            't_mother' => '',
            't_date' => '',
            't_propiter' => '',
            't_address' => '',
            't_phone' => '',
            't_mobile' => '',
            't_fax' => '',
            't_email' => '',
            't_web' => '',
            't_image' => '',
            'condition' => ''
            ]);
      
        $images = $request->file('t_image');
        $tenant = Tenant::find($id);

        
        if($images != null) {              
                $filename = time().'.'.$images->getClientOriginalExtension();
                $location = '/home/hellosyl/rental.hello-sylhet.com/upload_file/resize_images/'. $filename;
                Image::make($images)->resize(600 , 600)->save($location);

                $oldFilename = $tenant->t_image;
                $tenant->t_image = $filename;
                Storage::delete($oldFilename);

            } else {
                $tenant->tenat_name = $request->tenat_name;
                $tenant->father_hus = $request->father_hus;
                $tenant->t_mother = $request->t_mother;
                $tenant->t_date = $request->t_date;
                $tenant->t_propiter = $request->t_propiter;
                $tenant->t_address = $request->t_address;
                $tenant->t_phone = $request->t_phone;
                $tenant->t_mobile = $request->t_mobile;
                $tenant->t_fax = $request->t_fax;
                $tenant->t_email = $request->t_email;
                $tenant->t_web = $request->t_web;
                $tenant->condition = $request->condition;
            }

        $tenant->save();

        return redirect()->route('tenants.index')->with('success', 'Data have been Updated !');
    }

    
    public function destroy($id)
    {
        $tenant = Tenant::find($id);

        $tenant->delete();

        return redirect()->route('tenants.index')->with('success' , 'Data have been successfully deleted');
    }

    public function getProfile($id)
    {
        date_default_timezone_set('Asia/Dhaka');
        $currentDate = date('Y-m-d');
        
        $ten = Tenant::where('id', $id)->first();

        $shop = Shop::where('id', $id)->first();

        //$tbill = Billpay::where('tenant_id', $id)->get();

        

        $bill = Billpay::where('tenant_id', $id)->get();
        $totalBill = 0;
        if(sizeof($bill)>0){
            foreach ($bill as $key => $value) {
                $totalBill += $value->bi_tamount;
            }
        }
        $totalDue = 0;
        $sbook = ShopBooking::where('tenant_id', $id)->get();
        if(sizeof($sbook)>0){
            foreach ($sbook as $key => $value) {
                $month = 1;
                $book_date = strtotime($value->book_date);
                while (strtotime('+1 MONTH',$book_date) < strtotime($currentDate)) {
                    $month++;
                    $book_date = strtotime('+1 MONTH',$book_date);
                }
                $totalDue += ($value->total_rent) * $month;
            }
        }
        
        $balance = 0;
        $balance = ($totalBill-$totalDue);

        $generate = DB::table("billpays")
                    ->where("tenant_id",$id)
                    ->pluck("shop_id","id");

        return view('backend.tenant.tprofile')
        ->withTen($ten)
        ->withShop($shop)
        ->withSbook($sbook)
        ->withBill($bill)
        ->withGene($generate)
        ->withTotalbill($totalBill)
        ->withTotaldue($totalDue)
        ->withBalance($balance);  
    }
    public function postProfile(Request $request)
    {
        if($request->tenant_id != null && $request->shop_no !=null){
            date_default_timezone_set('Asia/Dhaka');
            $currentDate = date('Y-m-d');
            $ten = Tenant::where('id', $request->tenant_id)->first();

            $shop = Shop::where('id', $request->shop_no)->first();

            //$tbill = Billpay::where('tenant_id', $id)->get();

            

            $bill = Billpay::where('tenant_id', $request->tenant_id)->get();
            $totalBill = 0;
            if(sizeof($bill)>0){
                foreach ($bill as $key => $value) {
                    $totalBill += $value->bi_tamount;
                }
            }
            $totalDue = 0;
            $sbook = ShopBooking::where('tenant_id', $request->tenant_id)->get();
            if(sizeof($sbook)>0){
                foreach ($sbook as $key => $value) {
                    $month = 1;
                    $book_date = strtotime($value->book_date);
                    while (strtotime('+1 MONTH',$book_date) < strtotime($currentDate)) {
                        $month++;
                        $book_date = strtotime('+1 MONTH',$book_date);
                    }
                    $totalDue += ($value->total_rent) * $month;
                }
            }
            
            $balance = 0;
            $balance = ($totalBill-$totalDue);

            $generate = DB::table("billpays")
                        ->where("tenant_id",$request->tenant_id)
                        ->pluck("shop_id","id");

            return view('backend.tenant.tprofile')
            ->withTen($ten)
            ->withShop($shop)
            ->withSbook($sbook)
            ->withBill($bill)
            ->withGene($generate)
            ->withTotalbill($totalBill)
            ->withTotaldue($totalDue)
            ->withBalance($balance);  
        }else{
            return redirect()->route('rentcollects.create');
        }
        
    }
    
    public function getBillDetails($id)
    {
        $shopno = Billpay::where('shop_id', $id)->first();
        $billdetails = Billpay::where('shop_id', $id)->get();
        return view('backend.tenant.billdetails')->withBilldetails($billdetails)->withShopno($shopno);
    }
}
