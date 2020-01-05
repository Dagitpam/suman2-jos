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
      {{-- Form design --}}
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Admission Form</h4>
            <p class="card-description text-danger">Carefully fill in the form with correct details</p>
            <form class="forms-sample" method="POST" action="/student" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">Surname</label>
                    <input type="text" class="form-control" name="surName" id="exampleInputName1" placeholder="Your Surname">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">First Name</label>
                    <input type="text" class="form-control" name="firstName" id="exampleInputName1" placeholder="Your First-Name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">Middle Name</label>
                    <input type="text" class="form-control" name="middleName" id="exampleInputName1" placeholder="Your Middle-Name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">Email</label>
                  <input type="email" class="form-control " name="email" value="{{$email}}" id="exampleInputEmail3" placeholder="Your Email">

                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">Residential Area</label>
                    <input type="text" class="form-control" name="residArea" id="exampleInputEmail3" placeholder="Your Residential Area">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">Phone Number</label>
                    <input type="number" class="form-control" name="phoneNumber" id="exampleInputEmail3" placeholder="Your Phone Number">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">State of Origin</label>
                    <select class="form-control" name="state" id="exampleSelectGender">
                        <option>---Click & Choose---</option>
                      <option value="Abia">Abia</option>
                      <option value="Umahia">Umahia</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">Type of Result</label>
                    <select class="form-control" name="resultType" id="exampleSelectGender">
                        <option>---Click & Choose---</option>
                      <option value="WAEC">WAEC</option>
                      <option value="NECO">NECO</option>
                      <option value="NATEB">NATEB</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">Jamb Score</label>
                    <input type="number" class="form-control" name="jambScore" id="exampleInputEmail3" placeholder="Your Jamb Score">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">Gender</label>
                    <select class="form-control" name="gender" id="exampleSelectGender">
                        <option>---Click & Choose---</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group col-sm-12 col-md-12 col-md-12">
                    <label for="exampleInputName1">Course</label>
                    <select class="form-control" name="course" id="exampleSelectGender">
                        <option>---Click & Choose---</option>
                      <option value="Maths">Maths</option>
                      <option value="English">English</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-sm-12 col-md-12 col-md-12">
                      <label for="exampleInputName1">Sponsore</label>
                      <select class="form-control" name="sponsore" id="exampleSelectGender">
                          <option>---Click & Choose---</option>
                        <option value="Myself">Myself</option>
                        <option value="Parents">Parents</option>
                        <option value="Government">Government</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                  </div>
                </div>   
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group col-sm-12 col-md-12 col-md-12">
                          <label>Upload Passport</label><br>
                          <input type="file" name="image">
                      </div>
                    </div>
                  </div>           
              <button type="submit" class="btn btn-gradient-danger mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>

    </div>    
@endsection
