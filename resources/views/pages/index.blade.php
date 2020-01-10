@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <img src="{{asset('images/bg.jpg')}}" alt="bacground image" width="1300px" height="500px" id="img">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-3"> 
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">

                    <p>Content here 1</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">

                    <p>Content here 2</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">

                    <p>Content here 3</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <p>Content here 4</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
