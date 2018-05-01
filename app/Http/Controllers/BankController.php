<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;

class BankController extends Controller
{
    
    public function index()
    {
        $banks = Bank::all();
        
        return view('backend.bank.index')->withBanks($banks);
    }

    
    public function create()
    {
        return view('backend.bank.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'bank_name' => 'required',
            'branch_cname' => 'required',
            'account_num' => 'required|unique:banks'
            ]);

        $bank = new Bank;

        $bank->bank_name = $request->bank_name;
        $bank->branch_cname = $request->branch_cname;
        $bank->account_num = $request->account_num;

        $bank->save();

        return redirect()->route('banks.index')->with('success', 'Data have been save !');

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    public function bank_edit($id)
    {
        $bank = Bank::find($id);

        return view('backend.bank.edit-modal')->withB($bank);
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'bank_name' => '',
            'branch_cname' => '',
            'account_num' => ''
            ]);

        $bank = Bank::find($id);

        $bank->bank_name = $request->bank_name;
        $bank->branch_cname = $request->branch_cname;
        $bank->account_num = $request->account_num;

        $bank->save();

        return redirect()->route('banks.index')->with('success', 'Data have been Updated !');

    }

    
    public function destroy($id)
    {
        $bank = Bank::find($id);

        $bank->delete();

        return redirect()->route('banks.index')->with('success' , 'Data have been successfully deleted');
    }

    public function createTransaction()
    {
        $bank = Bank::all();
        return view('backend.bank.transacion')->withBank($bank);
    }
}
