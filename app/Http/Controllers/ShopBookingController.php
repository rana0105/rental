<?php

namespace App\Http\Controllers;

use App\ShopBooking;
use Illuminate\Http\Request;
use App\Company;
use App\Complex;
use App\Tenant;
use App\Shop;
use DB;


class ShopBookingController extends Controller
{
    
    public function index()
    {
        $shopbooks = ShopBooking::all();

        return view('backend.shopbook.index')->withShopbooks($shopbooks);
    }


    public function getDropCompbook($id)
     {
      $complex = DB::table("complexes")
                    ->where("company_id",$id)
                    ->pluck("complex_name","id");
        return json_encode($complex);
     }


     public function getDropShopbook($id)
     {
      $shop = DB::table("shops")
                    ->where("complex_id",$id)
                    ->pluck("shop_no","id");
        return json_encode($shop);
     }


     public function getRentCal($id)
     {
      $shop = DB::table("shops")
                    ->where("id",$id)
                    ->first();
        return json_encode($shop->squ_feet);
     }

    
    public function create()
    {
        $company = Company::all();
        $complex = Complex::all();
        $shop = Shop::all();
        $tenant = Tenant::all();
        return view('backend.shopbook.create')
        ->withCompany($company)
        ->withComplex($complex)
        ->withShop($shop)
        ->withTen($tenant);
    }

    
    public function store(Request $request)
    {
         //dd($request->all());
        $this->validate($request, [
            'company_name' => 'required',
            'complex_name' => 'required',
            'shop_id' => 'required|unique:shop_bookings',
            'tenant_id' => 'required',
            'book_date' => 'required',
            'rent_feet' => 'required',
            'total_rent' => '',
            'secu_money' => '',
            'adv_money' => '',
            'adv_refund' => '' 
            ]);
        //dd($request->all());
        $shopbook = new ShopBooking;

        $shopbook->company_id = $request->company_name;
        $shopbook->complex_id = $request->complex_name;
        $shopbook->shop_id = $request->shop_id;
        $shopbook->tenant_id = $request->tenant_id;
        $shopbook->book_date = $request->book_date;
        $shopbook->rent_feet = $request->rent_feet;
        $shopbook->total_rent = $request->total_rent;
        $shopbook->secu_money = $request->secu_money;
        $shopbook->adv_money = $request->adv_money;
        $shopbook->adv_refund = $request->adv_refund;

        $shopbook->save();

        return redirect()->route('shopbooks.index')->with('success', 'Data have been save !');
    }

    
    public function show(ShopBooking $shopBooking)
    {
        //
    }

    
    public function edit(ShopBooking $shopBooking)
    {
        //
    }

    
    public function update(Request $request, ShopBooking $shopBooking)
    {
        //
    }

    
    public function destroy(ShopBooking $shopBooking)
    {
        //
    }
}
