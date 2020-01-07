@extends('layouts.admin_app')
@section('admin_content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-danger text-white mr-2">
            <i class="mdi mdi-home"></i>
          </span>Admin Dashboard </h3>
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
              <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-danger align-middle"></i>
            </li>
          </ul>
        </nav>
      </div>
      <div class="row">
        <div class="col-md-3 stretch-card grid-margin">
          <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
              <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
              <h4 class="font-weight-normal mb-3">Admission Form<i class="mdi mdi-file-multiple mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">N 3,500</h2>
              <button class="btn btn-danger btn-sm text-white"><a href="#" style="text-decoration: none; color:white;">Apply Now!</a></button>
            </div>
          </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
          <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
              <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
              <h4 class="font-weight-normal mb-3">Admission Status<i class="mdi mdi-account-check mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">45,6334</h2>
              <button class="btn btn-info btn-sm text-white"><a href="#" style="text-decoration: none; color:white;">More info!</a></button>
            </div>
          </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
          <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
              <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
              <h4 class="font-weight-normal mb-3">Invoices<i class="mdi mdi-receipt mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">5</h2>
              <button class="btn btn-succees btn-sm text-white"><a href="#" style="text-decoration: none; color:white;">More info!</a></button>
            </div>
          </div>
        </div>
        <div class="col-md-3 stretch-card grid-margin">
            <div class="card bg-gradient-warning card-img-holder text-white">
              <div class="card-body">
                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Account<i class="mdi mdi-account mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">N 3,500</h2>
                <button class="btn btn-warning btn-sm text-white"><a href="#" style="text-decoration: none; color:white;">More info!</a></button>
              </div>
            </div>
          </div>
      </div>
    </div>    
@endsection
