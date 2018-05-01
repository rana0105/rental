<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acrent;

class AcrentController extends Controller
{
    
    public function index()
    {
        $acrents = Acrent::all();
        return view('backend.acrent.index')->withAcrents($acrents);
    }

    
    public function create()
    {
        return view('backend.acrent.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'actenat_name' => 'required|max:255',
            'shop_no' => 'required',
            'acsqu_feet' => 'required',
            'acper_rent' => 'required',
            'ac_tamount' => 'required',
            'ac_date' => '',
            'ac_status' => 'required',
            ]);
       // dd($request->all());

        $acrent = new Acrent;

        $acrent->acclient_name = $request->actenat_name;
        $acrent->acshop_no = $request->shop_no;
        $acrent->acsqu_feet = $request->acsqu_feet;
        $acrent->acper_rent = $request->acper_rent;
        $acrent->ac_tamount = $request->ac_tamount;
        $acrent->ac_date = $request->ac_date;
        $acrent->status = $request->ac_status;

        $acrent->save();

        return redirect()->route('acrents.index');
    }

    
    public function show($id)
    {
        //
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

    public function getAcrentReport(Request $request)
    {
        $acrents = Acrent::all();
        return view('backend.acrent.index')->withAcrents($acrents);
    }

    public function postAcrentReport(Request $request)
    {
        $acshop = Acrent::where('acshop_no', $request->shop_no)->first();
        $acreport = Acrent::where('acshop_no', $request->shop_no)->get();
        $pdf = \PDF::loadView('backend.acrent.acreport', [
            'acreport' => $acreport,
            'acshop'   => $acshop
        ]);
        return $pdf->stream('acreport.pdf');
    }
    
}
