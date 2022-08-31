<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $getAll = Company::latest()->simplePaginate(6);
        return view('welcome', ['companies' => $getAll]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'location' => 'required',
            'website' => 'required',
            'description' => 'required'
        ]);

        Company::create($formFields);
        return redirect('/')->with('message','Successfully added a company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
        $id = $company->id;
        // $employee = Employee::where('company_id','=',$id)->where('id','>', 1)->paginate(1);
      
        // return view('company.show',['company' => $company, 'links'=> $employee]);
        $getAll = Employee::where('company_id',$id)->paginate(5);
        return view('company.show',['links'=>$getAll]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
        return view('company.edit',['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'location' => 'required',
            'website' => 'required',
            'description' => 'required'
        ]);

        
        $company->update($formFields);
        return back()->with('message','successfully updated Company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
        $company->delete();
        return redirect('/')->with('message','Company Deleted');

    }
}
