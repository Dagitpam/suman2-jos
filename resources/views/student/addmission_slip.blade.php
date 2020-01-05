@extends('layouts.student_app')
@section('student_content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-danger text-white mr-2">
            <i class="mdi mdi-home"></i>
          </span>Student Dashboard </h3>
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
              <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-danger align-middle"></i>
            </li>
          </ul>
        </nav>
      </div>
      <div class="card">
          <div class="card-body">
        
              <div class="text-center">
                    <h2>SUMAN College of Education,Kuru</h2>
                    <h5>email: suman@gmail.com</h5><hr>
              </div>
              <div class="row">
                <div class="col-md-4">
                <img src="images/{{'/logo.png'}}" alt="school logo" width="70px" height="70px">
                </div>
                <div class="col-md-4">
                  <img src="/storage/post_images/{{$addmissionDetails[0]['image']}}" class="rounded-circle" alt="school logo" width="70px" height="70px">
                    </div>
                    <div class="col-md-4">
                            <span>suman{{$addmissionDetails[0]['id']}}</span>
                        </div>
              </div>
              <div style="margin-left: 50px; margin-top: 50px; linespacing: 10px;">
                <span><b>Name</b>:&nbsp;&nbsp;{{$addmissionDetails[0]['surName']}}&nbsp;{{$addmissionDetails[0]['firstName']}}&nbsp;{{$addmissionDetails[0]['middleName']}}</span><br><br>
                <span><b>Email</b>:&nbsp;&nbsp; {{$addmissionDetails[0]['email']}}</span><br><br>
              <span><b>Phone Number</b>:&nbsp;&nbsp;{{$addmissionDetails[0]['phoneNumber']}}</span><br><br>
                <span><b>Course</b>:&nbsp;&nbsp;{{$addmissionDetails[0]['course']}}</span><br><br>
                <span><b>Jamb Score</b>:&nbsp;&nbsp;{{$addmissionDetails[0]['jambScore']}}</span><br><br>
                <span><b>Result Type</b>:&nbsp;&nbsp;{{$addmissionDetails[0]['resultType']}}</span><br><br>
                <span><b>State</b>:&nbsp;&nbsp;{{$addmissionDetails[0]['state']}}</span><br><br>
                <span><b>Residential Area</b>:&nbsp;&nbsp;{{$addmissionDetails[0]['residArea']}}</span>
  
              </div>
                           
          </div>

      </div>

    </div>    
    
@endsection