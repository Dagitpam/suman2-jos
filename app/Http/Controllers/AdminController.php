<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddmissionForm;
use App\School;
use App\Department;
use App\Course;
use App\Update;
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
        $this->validate($request,[
            'school' => 'required',
            'department' => 'required',
            'course' => 'required'
        ]);

        $update =  Course::find($id);
        $update-> school =$request->input('school');
        $update-> department =$request->input('department');
        $update-> course =$request->input('course');
        $update->save();
        return back()->with('success','Course updated successfully!');
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
        $del = Course::find($id);
        $del->delete();
        return back()->with('success','Course deleted successfully!');
    }
    public function addmissionForm(){
        $applicants= AddmissionForm::orderBy('created_at','desc')->paginate(20);
    
         return view('/admin.addmission-form')->with('applicants',$applicants);
    }
    // public function displayAddmissionForm($id){
    //     $id = AddmissionForm::find($id);
    //     $details = AddmissionForm::where('id',$id)->get();
    //     return view('admin.applicant-details');
    // }
    public function schoolView(){

        $schoolDetails = School::orderBy('created_at','DESC')->paginate(20);

        return view('admin.school')->with('schoolDetails', $schoolDetails);
    }
    public function schoolAdd(Request $request){
        $this->validate($request,[
            'name'=>'required',

        ]);
        if ($request->input('school') == '---Click & Choose---') {
            return back()->with('error','Sorry, yet to choose a school!');
        } else {
            $post = new School();
            $post-> name=$request->input('name');
            $post->save();
    
            return back()->with('success','School added successfully!');
    
        }
        
       
    }
    public function departmentView(){

        $schoolDetails = School::orderBy('name','ASC')->get();
        $departmentDetails = Department::orderBy('created_at','DESC')->paginate(20);
        $details = array(
            'schoolDetails' => $schoolDetails,
            'departmentDetails' => $departmentDetails
        );

        return view('admin.department')->with('details', $details);
    }
    public function departmentAdd(Request $request){
        $this->validate($request,[
            'school'=>'required',
            'department'=>'required',

        ]);
        if ($request->input('school') == '---Click & Choose---') {
            return back()->with('error','Sorry, yet to choose a school!');

        } else {
            $post = new Department();
        $post-> school=$request->input('school');
        $post-> department=$request->input('department');
        $post->save();

        return back()->with('success','School added successfully!');
        }
        
       

    }
    public function courseView(){

        $schoolDetails = School::orderBy('name','ASC')->get();
        $departmentDetails = Department::orderBy('department','ASC')->get();
        $courseDetails = Course::orderBy('created_at','DESC')->paginate(20);
        $details = array(
            'schoolDetails' => $schoolDetails,
            'departmentDetails' => $departmentDetails,
            'courseDetails' => $courseDetails,
        );

        return view('admin.course')->with('details', $details);
    }
    public function courseAdd(Request $request){
        $this->validate($request,[
            'school'=>'required',
            'department'=>'required',

        ]);
        if ($request->input('school') == '---Click & Choose---' || $request->input('department') == '---Click & Choose---') {
            return back()->with('error','Sorry, yet to choose field(s)!');

        } else {
            $post = new Course();
        $post-> school=$request->input('school');
        $post-> department=$request->input('department');
        $post-> course=$request->input('course');
        $post->save();

        return back()->with('success','School added successfully!');
        }
        
       

    }
    public function selectCourse(Request $request){

        $id = $request->input('id');
        $courseId = Course::find($id);

        $school =$courseId-> school;
        $department=$courseId-> department;
        $course=$courseId-> course;

        $results = array(
            'school' => $school,
            'department' =>$department,
            'course' =>$course,
            'error'=>'error'
        );
       // $msg = $name;

        return response()->json($results, 200);
    }

    //updates view page
    public function updatesView(){

        $posts = Update::orderBy('created_at','DESC')->paginate(20);
        return view('admin.upload')->with('posts',$posts);
    }
    //Upload notification
    public function updatesAdd(Request $request){
        $this->validate($request,[
            'post'=>'required',
        ]);
        $post = new Update();
        $post-> post=$request->input('post');
        $post->save();
        return back()->with('success','Post added successfully!');
    }
}
