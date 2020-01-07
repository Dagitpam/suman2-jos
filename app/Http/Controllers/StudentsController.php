<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\AddmissionForm;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        // $status = AddmissionForm::where('email',Auth::User()->email)->get();
        
        
        return view('student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $userName = User::where('email', Auth::user()->email)->get();
        $email = $userName[0]['email'];
       return view('student.addmission_form')->with('email',$email); 
    }
    public function addmission_slip()
    {
        //

        $email = User::where('email',Auth::User()->email)->get();
        $id= $email[0]['id'];
        $addmissionDetails = AddmissionForm::where('userId',$id)->get();

       return view('student.addmission_slip')->with('addmissionDetails',$addmissionDetails); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)


    {
 //Check if fill is empty
 $this->validate($request,[

    'surName'=>'required',
    'firstName'=>'required',
    'middleName'=>'required',
    'email'=>'required',
    'residArea'=>'required',
    'phoneNumber'=>'required',
    'state'=>'required',
    'resultType'=>'required',
    'jambScore'=>'required',
    'gender'=>'required',
    'course'=>'required',
    'sponsore'=>'required',
    'image'=>'required|nullable|max:1999',
]);
        //check if ur has fill in the form
        
        // $id = User::find('id');
        $email = User::where('email',Auth::User()->email)->get();
        $id= $email[0]['id'];
        $ids = AddmissionForm::where('userId',$id)->get();
    
        if (count($ids) > 0) {
        
        return redirect('/application-form')->with('error','Sorry You can not apply again!');
        }else {
            
          //Handle file upload
          if ($request->hasFile('image')) {
             //Get file with extension
             $fileNameWithExt = $request->file('image')->getClientOriginalName();
             //Get just file name
             $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
             //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
             //File to store
             $fileNameToStore =  $filename.'_'.time().'.'.$extension;
             //Upload the image
             $path = $request->file('image')->storeAs('public/post_images', $fileNameToStore);

        } else {
            $fileToStore = 'noImage.jpg';
        }

         //Send parameters to dadabase
         $post = new AddmissionForm();
         $post-> userId = Auth::user()->id;
         $post-> surName = $request->input('surName');
         $post-> firstName = $request->input('firstName');
         $post-> middleName = $request->input('middleName');
         $post-> email = $request->input('email');
         $post-> residArea = $request->input('residArea');
         $post-> phoneNumber = $request->input('phoneNumber');
         $post-> state = $request->input('state');
         $post-> resultType = $request->input('resultType');
         $post-> jambScore = $request->input('jambScore');
         $post-> gender = $request->input('gender');
         $post-> course = $request->input('course');
         $post-> sponsore = $request->input('sponsore');
         $post-> status= 0;
         $post-> image = $fileNameToStore;
        $post->save();
         return redirect('/application-form')->with('success','Form submitted successfully!');


         }
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
  
}
