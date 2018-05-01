<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    
    public function index()
    {
        $emps = Employee::all();
        
        return view('backend.employee.index')->withEmps($emps);
    }

    public function create()
    {
        return view('backend.employee.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'e_name' => '',
            'e_father' => '',
            'e_hus' => '',
            'e_mother' => '',
            'date_birth' => '',
            'nationality' => '',
            'blood_g' => '',
            'm_status' => '',
            'qualification' => '',
            'designation' => '',
            'job_status' => '',
            'e_salary' => '',
            'e_mobile' => '',
            'e_email' => '',
            'join_date' => '',
            'pre_address' => '',
            'per_address' => ''
            ]);
      
            $emp = new Employee;

            $emp->e_name = $request->e_name;
            $emp->e_father = $request->e_father;
            $emp->e_hus = $request->e_hus;
            $emp->e_mother = $request->e_mother;
            $emp->date_birth = $request->date_birth;
            $emp->nationality = $request->nationality;
            $emp->blood_g = $request->blood_g;
            $emp->m_status = $request->m_status;
            $emp->qualification = $request->qualification;
            $emp->designation = $request->designation;
            $emp->job_status = $request->job_status;
            $emp->e_salary = $request->e_salary;
            $emp->e_mobile = $request->e_mobile;
            $emp->e_email = $request->e_email;
            $emp->join_date = $request->join_date;
            $emp->pre_address = $request->pre_address;
            $emp->per_address = $request->per_address;
            
            $emp->save();

            return redirect()->route('employees.index')->with('success', 'Data have been save !');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    public function employee_edit($id)
    {
        $employee = Employee::find($id);
        return view('backend.employee.edit-modal')->withEmployee($employee);
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'e_name' => '',
            'e_father' => '',
            'e_hus' => '',
            'e_mother' => '',
            'date_birth' => '',
            'nationality' => '',
            'blood_g' => '',
            'm_status' => '',
            'qualification' => '',
            'designation' => '',
            'job_status' => '',
            'e_salary' => '',
            'e_mobile' => '',
            'e_email' => '',
            'join_date' => '',
            'pre_address' => '',
            'per_address' => ''
            ]);
      
            $emp = Employee::find($id);

            $emp->e_name = $request->e_name;
            $emp->e_father = $request->e_father;
            $emp->e_hus = $request->e_hus;
            $emp->e_mother = $request->e_mother;
            $emp->date_birth = $request->date_birth;
            $emp->nationality = $request->nationality;
            $emp->blood_g = $request->blood_g;
            $emp->m_status = $request->m_status;
            $emp->qualification = $request->qualification;
            $emp->designation = $request->designation;
            $emp->job_status = $request->job_status;
            $emp->e_salary = $request->e_salary;
            $emp->e_mobile = $request->e_mobile;
            $emp->e_email = $request->e_email;
            $emp->join_date = $request->join_date;
            $emp->pre_address = $request->pre_address;
            $emp->per_address = $request->per_address;
            
            $emp->save();

            return redirect()->route('employees.index')->with('success', 'Data have been Updated !');
    }

    
    public function destroy($id)
    {
        $employee = Employee::find($id);

        $employee->delete();

        return redirect()->route('employees.index')->with('success' , 'Data have been successfully deleted');
    }
}
