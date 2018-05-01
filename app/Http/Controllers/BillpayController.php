<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billpay;
use App\Company;
use App\Complex;
use App\Shop;
use App\ShopBooking;
use DB;
use Image;
use Storage;

class BillpayController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $array1 = $request->condationcheckbox;
        $array2 = $request->conditoncheck;
        $array3 = $request->shop;
        $array = array();
        foreach ($array1 as $key => $value) {
            foreach ($array2 as $key => $value2) {
                if($value == $value2){
                    array_push($array,$array3[$key]);
                }
            }
        }
       // $str = serialize($array);
        $str = implode(" ", array_flatten($array));
        //dd($str);
        $billpay = new Billpay;

        $billpay->tenant_id = $request->tenant_id;
        $billpay->shop_id = $str;
        $billpay->bi_amount = $request->bi_amount;
        $billpay->bi_pdate = $request->bi_pdate;
        $billpay->bi_type = $request->bi_type;
        $billpay->bi_chdate = $request->bi_chdate;
        $billpay->bi_elec = $request->bi_elec;
        $billpay->bi_water = $request->bi_water;
        $billpay->bi_gas = $request->bi_gas;
        $billpay->bi_schar = $request->bi_schar;
        $billpay->bi_tamount = $request->bi_tamount;
        $billpay->status = $request->bi_status;

        if($billpay->save()){
            return redirect()->route('billpays.show', $billpay->id)->with('success', 'Data have been save!');
        }else{
            return redirect()->url('tprofile/{id}')->with('success', 'Data not Save !');
        }

    }

    
    public function show($id)
    {
        $billpay = Billpay::find($id);
        $pdf = \PDF::loadView('backend.tenant.billinvoice', [
            'bill' => $billpay
        ]);
        return $pdf->stream('billpay.pdf');
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
