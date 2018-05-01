<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;
use App\Company;
use App\Complex;
use App\Tenant;
use App\ShopBooking;
use DB;

class ShopController extends Controller
{
    
    public function index()
    {
        $shops = Shop::all();
        
        return view('backend.shop.index')->withShops($shops);
    }

    public function getshopDrop($id)
     {
      $complex = DB::table("complexes")
                    ->where("company_id",$id)
                    ->pluck("complex_name","id");
        return json_encode($complex);
     }

    
    public function create()
    {
        $company = Company::all();
        $complex = Complex::all();
        return view('backend.shop.create')->withCompany($company)->withComplex($complex);
    }

    
    public function store(Request $request)
    {
       // dd($request->all());
        $this->validate($request, [
            'company_i' => 'required',
            'complex_i' => 'required',
            'shop_no' => 'required|unique:shops',
            'squ_feet' => '',
            'floor' => '',
            'description' => ''
            ]);

        $shop = new Shop;

        $shop->company_id = $request->company_i;
        $shop->complex_id = $request->complex_i;
        $shop->shop_no = $request->shop_no;
        $shop->squ_feet = $request->squ_feet;
        $shop->floor = $request->floor;
        $shop->description = $request->description;

        $shop->save();

        return redirect()->route('shops.index')->with('success', 'Data have been save !');
    }

    
    public function show(Shop $shop)
    {
        //
    }

    
    public function edit(Shop $shop)
    {
        //
    }

     public function shop_edit($id)
    {
        $shop = Shop::find($id);

        $company = Company::all();

        $com = array();
        foreach ($company as $c)
        {
            $com[$c->id] = $c->company_name;
        }

        $complex = Complex::all();

        $comx = array();
        foreach ($complex as $co)
        {
            $comx[$co->id] = $co->complex_name;
        }

        return view('backend.shop.edit-modal')->withShop($shop)->withComp($com)->withComplex($comx);
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'company_id' => '',
            'complex_id' => '',
            'shop_no' => '',
            'squ_feet' => '',
            'floor' => '',
            'description' => ''
            ]);

        $shop = Shop::find($id);

        $shop->company_id = $request->company_id;
        $shop->complex_id = $request->complex_id;
        $shop->shop_no = $request->shop_no;
        $shop->squ_feet = $request->squ_feet;
        $shop->floor = $request->floor;
        $shop->description = $request->description;

        $shop->save();

        return redirect()->route('shops.index')->with('success', 'Data have been Updated !');
    }

    
    public function destroy($id)
    {
        $shop = Shop::find($id);

        $shop->delete();

        return redirect()->route('shops.index')->with('success' , 'Data have been successfully deleted');
    }

    public function createShopbook()
    {
        $company = Company::all();
        $complex = Complex::all();
        $shop = Shop::all();
        $tenant = Tenant::all();
        return view('backend.shop.shopbook')
        ->withCompany($company)
        ->withComplex($complex)
        ->withShop($shop)
        ->withTenant($tenant);
    }

    public function storeShopbook(Request $request)
    {
        
        $this->validate($request, [
            'company_id' => 'required',
            'complex_id' => 'required',
            'shop_id' => 'required',
            'tenant_id' => 'required',
            'book_date' => 'required',
            'rent_feet' => 'required',
            'total_rent' => 'required',
            'secu_money' => 'required',
            'adv_money' => 'required',
            'adv_refund' => 'required'
            ]);
        //dd($request->all());
        $shopbook = new ShopBooking;

        $shopbook->company_id = $request->company_id;
        $shopbook->complex_id = $request->complex_id;
        $shopbook->shop_id = $request->shop_id;
        $shopbook->tenant_id = $request->tenant_id;
        $shopbook->book_date = $request->book_date;
        $shopbook->rent_feet = $request->rent_feet;
        $shopbook->total_rent = $request->total_rent;
        $shopbook->secu_money = $request->secu_money;
        $shopbook->adv_money = $request->adv_money;
        $shopbook->adv_refund = $request->adv_refund;

        $shopbook->save();
    }
}
