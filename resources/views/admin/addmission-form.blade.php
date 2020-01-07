@extends('layouts.admin_app')
@section('admin_content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-danger text-white mr-2">
            <i class="mdi mdi-home"></i>
          </span>Student Dashboard | Applicants </h3>
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
            <div class="card-title">List of Applicants</div>
            <table class="table table-bordered">
                    @if (count($applicants) > 0)
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Course</th>
                        <th>Jamb Score</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach ($applicants as $applicant)
                    <tr>
                    <td>{{$applicant->id}}</td>
                    <td>{{$applicant->surName}}&nbsp;{{$applicant->firstName}}&nbsp;{{$applicant->middleName}}</td>
                    <td>{{$applicant->email}}</td>
                    <td>{{$applicant->gender}}</td>
                    <td>{{$applicant->course}}</td>
                    <td>{{$applicant->jambScore}}</td>
                    <td><a href="displayAddmissionForm/{{$applicant->id}}">View</a></td>
                    </tr>
                        
                    @endforeach
                       
                    @else
                        <p>No records found</p>
                   
                </tbody>
                @endif
            </table>
            {{$applicants->links()}}           
          </div>

      </div>

    </div>    
    
@endsection