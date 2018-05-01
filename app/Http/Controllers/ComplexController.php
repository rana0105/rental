<?php

namespace App\Http\Controllers;

use App\Complex;
use Illuminate\Http\Request;
use App\Company;

class ComplexController extends Controller
{
    
    public function index()
    {
        $complexes = Complex::all();
        //dd($complexes);
        return view('backend.complex.index')->withComplexes($complexes);
    }

    
    public function create()
    {
        $company = Company::all();
       // dd($company);
        return view('backend.complex.create')->withCompany($company);
    }

    
    public function store(Request $request)
    {
        //dd($request->all());
         $this->validate($request, [
            'complex_name' => '',
            'plex_address' => '',
            'plex_phone' => '',
            'plex_mobile' => '',
            'plex_fax' => '',
            'plex_email' => '',
            'company_id' => ''
            ]);

        $complex = new Complex;

        $complex->complex_name = $request->complex_name;
        $complex->plex_address = $request->plex_address;
        $complex->plex_phone = $request->plex_phone;
        $complex->plex_mobile = $request->plex_mobile;
        $complex->plex_fax = $request->plex_fax;
        $complex->plex_email = $request->plex_email;
        $complex->company_id = $request->company_id;

        $complex->save();

        return redirect()->route('complexes.index')->with('success', 'Data have been Save!');
    }

    
    public function show(Complex $complex)
    {
        //
    }

   
    public function edit(Complex $complex)
    {
        //
    }

    public function complex_edit($id)
    {
       // dd($id);
        $complex = Complex::find($id);

        $company = Company::all();

        $com = array();
        foreach ($company as $c)
        {
            $com[$c->id] = $c->company_name;
        }

        return view('backend.complex.edit-modal')->withComplex($complex)->withComp($com);
    }


    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'complex_name' => '',
            'plex_address' => '',
            'plex_phone' => '',
            'plex_mobile' => '',
            'plex_fax' => '',
            'plex_email' => '',
            'company_id' => ''
            ]);

        $complex = Complex::find($id);

        $complex->complex_name = $request->complex_name;
        $complex->plex_address = $request->plex_address;
        $complex->plex_phone = $request->plex_phone;
        $complex->plex_mobile = $request->plex_mobile;
        $complex->plex_fax = $request->plex_fax;
        $complex->plex_email = $request->plex_email;
        $complex->company_id = $request->company_id;

        $complex->save();

        return redirect()->route('complexes.index')->with('success', 'Data have been Updated!');
    }

    
    public function destroy($id)
    {
        $complex = Complex::find($id);

        $complex->delete();

        return redirect()->route('complexes.index')->with('success' , 'Data have been successfully deleted');
    }
}
