<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Complex;
use App\Category;
use App\Expense;

class ExpenseController extends Controller
{
    
    public function index()
    {
        $expe = Expense::all();
        return view('backend.expense.index')->withExpe($expe);
    }

    public function viewExpense($date){
        $expe = Expense::where('ex_date',$date)->get();
        return view('backend.expense.datexpence')->withExpe($expe);
    }
    public function create()
    {
        $company = Company::all();
        $complex = Complex::all();
        $cats = Category::all();
        return view('backend.expense.create')
        ->withCompany($company)
        ->withComplex($complex)
        ->withCats($cats);
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'ex_name' => '',
            'cat_id' => '',
            'company_id' => '',
            'complex_id' => '',
            'ex_amount' => '',
            'ex_date' => '',
            'ex_note' => ''
            ]);

        $exp = new Expense;
        $exp->ex_name = $request->ex_name;
        $exp->cat_id = $request->cat_id;
        $exp->company_id = $request->company_id;
        $exp->complex_id = $request->complex_id;
        $exp->ex_amount = $request->ex_amount;
        $exp->ex_date = $request->ex_date;
        $exp->ex_note = $request->ex_note;

        $exp->save();

        return redirect()->route('expenses.index')->with('success', 'Data have been save!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    public function expense_edit($id)
    {
        $expense = Expense::find($id);

        $category = Category::all();

        $cat = array();
        foreach ($category as $ca)
        {
            $cat[$ca->id] = $ca->cat_name;
        }

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
       // dd($comx);
        return view('backend.expense.edit-modal')
        ->withExpense($expense)
        ->withCategory($cat)
        ->withCompany($com)
        ->withComplex($comx);
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ex_name' => '',
            'cat_id' => '',
            'company_id' => '',
            'complex_id' => '',
            'ex_amount' => '',
            'ex_date' => '',
            'ex_note' => ''
            ]);

        $exp = Expense::find($id);

        $exp->ex_name = $request->ex_name;
        $exp->cat_id = $request->cat_id;
        $exp->company_id = $request->company_id;
        $exp->complex_id = $request->complex_id;
        $exp->ex_amount = $request->ex_amount;
        $exp->ex_date = $request->ex_date;
        $exp->ex_note = $request->ex_note;

        $exp->save();

        return redirect()->route('expenses.index')->with('success', 'Data have been Updated!');
    }

    
    public function destroy($id)
    {
        $exp = Expense::find($id);

        $exp->delete();

        return redirect()->route('expenses.index')->with('success' , 'Data have been successfully deleted');
    }
}
