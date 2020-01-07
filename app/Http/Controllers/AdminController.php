<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddmissionForm;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $details = AddmissionForm::where('id',$id)->get();
        
        return view('admin.applicant-details')->with('details',$details);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function addmissionForm(){
        $applicants= AddmissionForm::orderBy('created_at','desc')->paginate(4);
    
         return view('/admin.addmission-form')->with('applicants',$applicants);
    }
    // public function displayAddmissionForm($id){
    //     $id = AddmissionForm::find($id);
    //     $details = AddmissionForm::where('id',$id)->get();
    //     return view('admin.applicant-details');
    // }
}
