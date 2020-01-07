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
      <div class="row">
        <div class="col-md-3 stretch-card grid-margin">
          <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
              <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
              <h4 class="font-weight-normal mb-3">Admission Form<i class="mdi mdi-file-multiple mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">N 3,500</h2>
              {{-- paystack button for addmission form --}}
             
              <div class="row" style="margin-bottom:40px;">
                <div class="col-md-8 col-md-offset-2">
                    <button class="btn btn-info btn-sm" class="btn btn-warning" class="btn btn-primary" data-toggle="modal" data-target="#adsPayment">
                      Pay Now!!</button>
                </div>
              </div>
       
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
        
              </div>
            </div>
          </div>
        </div>
    </div>  
    
    {{-- payment modal --}}
           <!-- The Modal -->
           <div class="modal fade" id="adsPayment">
            <div class="modal-dialog modal-md">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Payment Card</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body text-center">
                  <p style="color: green; font-weight: bold;">Payment of SUMAN addmission form</p>
                <p style="font-size: 20px; font-weight: bold;">One time Payment Amount N3,500</p>
                <p>Card Payment Powered by Paystack</p>
                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form" id="paystackForm">
                  @csrf
                  <div class="row">
                      <div class="col-md-12">
                        <input type="hidden" name="email" value="otemuyiwa@gmail.com"> {{-- required --}}
                        <input type="hidden" name="orderID" value="345">
                       <input type="hidden" name="amount" value="800"> {{-- required in kobo --}}
                        <input type="hidden" name="quantity" value="3">
                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                        <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">   {{-- required --}}
                        {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}            
                         <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                      </div>
                    </div>
            </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button class="btn bg-gradient-danger btn-sm btn-block text-white" type="submit" value="Pay Now!" form="paystackForm">
                      <i class="fa fa-plus-circle fa-sm"></i> Proceed
                      </button>
                </div>
                
              </div>
            </div>
          </div>
@endsection
