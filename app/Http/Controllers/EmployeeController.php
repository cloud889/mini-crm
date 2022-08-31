<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $getAll = Employee::orderBy('firstName','asc')->paginate(9);
        return view('employees.index',['employees' => $getAll]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Company $company)
    {
        //
       
        return view('employees.create',['company' => $company]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Company $company)
    {
        //
        
        $formFields = $request->validate([
            'firstName' =>'required',
            'lastName' => ' required',
            'email' => 'required',
            'phone' => ' required'
        ]);

        $formFields['company_id'] = $company->id;
        Employee::create($formFields);
        return back()->with('message','Successfully added employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
        return view('employees.edit',['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee, Company $company)
    {
        //
        $formFields = $request->validate([
            'firstName' =>'required',
            'lastName' => ' required',
            'email' => 'required',
            'phone' => ' required'
        ]);

        
        $employee->update($formFields);
        return back()->with('message','successfully updated employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
        return redirect('/')->with('message','successfully deleted employee');
    }
}
