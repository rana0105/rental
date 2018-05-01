<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Complex;
use App\Tenant;
use App\Shop;
use App\RentCollect;
use DB;

class RentcollectController extends Controller
{
    
    public function index(Request $id)
    {
        dd($id->all());
        $ten = DB::table("rent_collects")
                    ->where("tenant_id",$id)
                    ->pluck("shop_id","id");
        //$ten = RentCollect::where('tenant_id', $id)->get();
        dd($ten);
        return view('backend.tenant.tprofile')->withTen($ten);
    }


     public function getDropComplex($id)
     {
      $complex = DB::table("complexes")
                    ->where("company_id",$id)
                    ->pluck("complex_name","id");
        return json_encode($complex);
     }


     public function getDropShop($id)
     {
      $shop = DB::table("shops")
            ->where("complex_id",$id)
            ->pluck("shop_no","id");
        return json_encode($shop);
     }

     public function getDropShoptenant($id)
     {
      $shop = DB::table("shop_bookings")
            ->join('tenants', 'tenants.id', '=', 'shop_bookings.tenant_id')
            ->where("shop_id",$id)
            ->get();

        $array = array();
        if(sizeof($shop)>0){
            foreach ($shop as $key => $value) {
                $row['id'] = $value->tenant_id;
                $row['name'] = $value->tenat_name;
                array_push($array,$row); 
            }
        }
        return json_encode($array);
     }

     public function getDropTenant($id)
     {
        $tenant = DB::table('shop_bookings')
            ->join('tenants', 'tenants.id', '=', 'shop_bookings.tenant_id')
            ->where("complex_id",$id)
            ->get();
        $array = array();
        if(sizeof($tenant)>0){
            foreach ($tenant as $key => $value) {
                $row['id'] = $value->tenant_id;
                $row['name'] = $value->tenat_name;
                array_push($array,$row);
            }
        }

        
        return json_encode($array);
     }

   
    public function create(Request $id)
    {
        $company = Company::all();
        $complex = Complex::all();
        $shop = Shop::all();
        $tenant = Tenant::all();
        return view('backend.rentcollect.create')
        ->withCompany($company)
        ->withComplex($complex)
        ->withShop($shop)
        ->withTenant($tenant);

    }

    
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'company_id' => 'required',
            'complex_id' => 'required',
            'shop_no' => 'required',
            'tenant_id' => 'required'
            ]);

        $rentcollect = new RentCollect;

        $rentcollect->company_id = $request->company_id;
        $rentcollect->complex_id = $request->complex_id;
        $rentcollect->shop_id = $request->shop_no;
        $rentcollect->tenant_id = $request->tenant_id;

        $rentcollect->save();

        return redirect()->route('rentcollects.show', $rentcollect->id)->with('success', 'Data have been save !');
    }

    
    public function show(Request $id)
    {
        // $ten = RentCollect::all();
        // dd($ten);
        $ten = DB::table("shop_bookings")
                    ->where("tenant_id",$id)
                    ->pluck("shop_id","id");
        //$ten = RentCollect::where('tenant_id', $id)->get();
        dd($ten);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
