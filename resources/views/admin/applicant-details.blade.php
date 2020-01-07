<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body><br>
    <div class="container">
            <div class="main-panel">
                    <div class="content-wrapper">
                      <div class="page-header">
                        <h3 class="page-title">
                          <span class="page-title-icon bg-gradient-danger text-white mr-2">
                            <i class="mdi mdi-home"></i>
                          </span>View Student Application form</h3>
                          <span class="text-danger">Admin should accept or reject addmission</span>
                        {{-- <nav aria-label="breadcrumb">
                          <ul class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">
                              <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-danger align-middle"></i>
                            </li>
                          </ul>
                        </nav> --}}
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
                                  <img src="/storage/post_images/{{$details[0]['image']}}" class="rounded-circle" alt="school logo" width="70px" height="70px">
                                    </div>
                                    <div class="col-md-4">
                                          <b>Student Id</b>:&nbsp;<span>suman{{$details[0]['id']}}</span>
                                        </div>
                              </div>
                              <div style="margin-left: 100px; margin-top: 50px; linespacing: 10px;">
                                <span><b>Name</b>:&nbsp;&nbsp;{{$details[0]['surName']}}&nbsp;{{$details[0]['firstName']}}&nbsp;{{$details[0]['middleName']}}</span><br><br>
                                <span><b>Email</b>:&nbsp;&nbsp; {{$details[0]['email']}}</span><br><br>
                              <span><b>Phone Number</b>:&nbsp;&nbsp;{{$details[0]['phoneNumber']}}</span><br><br>
                                <span><b>Course</b>:&nbsp;&nbsp;{{$details[0]['course']}}</span><br><br>
                                <span><b>Jamb Score</b>:&nbsp;&nbsp;{{$details[0]['jambScore']}}</span><br><br>
                                <span><b>Result Type</b>:&nbsp;&nbsp;{{$details[0]['resultType']}}</span><br><br>
                                <span><b>State</b>:&nbsp;&nbsp;{{$details[0]['state']}}</span><br><br>
                                <span><b>Residential Area</b>:&nbsp;&nbsp;{{$details[0]['residArea']}}</span>
                              </div> b
                              <div style="margin-left:400px; margin-top: 40px;">
                                  <button class="btn btn-danger btn-md" class="btn btn-warning" class="btn btn-primary" data-toggle="modal" data-target="#adsPayment">
                                      Reject Admission</button>
                                      <button class="btn btn-success btn-md" class="btn btn-warning" class="btn btn-primary" data-toggle="modal" data-target="#adsPayment">
                                          Accept Addmission</button></div>            
                          </div>
                      </div>
                    </div>    
    </div>  <br>
    <div class="card" style="border-radius: 0px;">
            <div class="card-body text-center" style="line-height: 20px;"
                <p><a href="">© 2019 Suman</a></p>
            </div>
        </div>    
</body>
 </html>