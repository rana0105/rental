<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    
    public function index()
    {
        $companies = Company::all();
        //dd($companies);
        return view('backend.company.index')->withCompanies($companies);
    }

    
    public function create()
    {
        return view('backend.company.create');
    }

    
    public function store(Request $request)
    {
       // dd($request->all());
        $this->validate($request, [
            'company_name' => '',
            'short_cname' => '',
            'ownner_cname' => '',
            'c_address' => '',
            'c_phone' => '',
            'c_mobile' => '',
            'c_fax' => '',
            'c_email' => '',
            'c_web' => ''
            ]);

        $company = new Company;

        $company->company_name = $request->company_name;
        $company->short_cname = $request->short_cname;
        $company->ownner_cname = $request->ownner_cname;
        $company->c_address = $request->c_address;
        $company->c_phone = $request->c_phone;
        $company->c_mobile = $request->c_mobile;
        $company->c_fax = $request->c_fax;
        $company->c_email = $request->c_email;
        $company->c_web = $request->c_web;

        $company->save();

        return redirect()->route('companies.index')->with('success', 'Data have been Save!');
    }

    
    public function show(Company $company)
    {
        //
    }

    
    public function edit($id) // here I can use it
    {
        $company = Company::find($id);
        return view('backend.company.index')->withCompany($company);
    }

    public function company_edit($id) 
    {
        $company = Company::find($id);
        return view('backend.company.edit-modal')->withCompany($company);
    }

    
    public function update(Request $request, $id)
    { 
      // dd($request->all()); 
        $this->validate($request, [
            'company_name' => '',
            'short_cname' => '',
            'ownner_cname' => '',
            'c_address' => '',
            'c_phone' => '',
            'c_mobile' => '',
            'c_fax' => '',
            'c_email' => '',
            'c_web' => ''
            ]);

        $company = Company::find($id);

        $company->company_name = $request->company_name;
        $company->short_cname = $request->short_cname;
        $company->ownner_cname = $request->ownner_cname;
        $company->c_address = $request->c_address;
        $company->c_phone = $request->c_phone;
        $company->c_mobile = $request->c_mobile;
        $company->c_fax = $request->c_fax;
        $company->c_email = $request->c_email;
        $company->c_web = $request->c_web;

        $company->save();

        return redirect()->route('companies.index')->with('success', 'Data have been Updated');
    }

    
    public function destroy($id)
    {
        $company = Company::find($id);

        $company->delete();

        return redirect()->route('companies.index')->with('success' , 'Data have been successfully deleted');
    }
}
