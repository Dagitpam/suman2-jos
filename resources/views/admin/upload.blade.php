@extends('layouts.admin_app')
@section('admin_content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-danger text-white mr-2">
            <i class="mdi mdi-home"></i>
          </span>Admin Dashboard | Post Updates </h3>
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
              <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-danger align-middle"></i>
            </li>
          </ul>
        </nav>
      </div>
      {{--  --}}
      <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#adsSchool">
        Add</button><br><br>
{{-- Table --}}
<div class="card">
    <div class="card-body">
      <div class="card-title">Updates history</div>
      <table class="table table-bordered">
              @if (count($posts) > 0)
          <thead>
              <tr>
                  <th>Post Id</th>
                  <th>Post Content</th>
                  <th>Created At</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
             
              @foreach ($posts as $post)
              <tr>
              <td>{{$post->id}}</td>
              <td>{{$post->post}}</td>
              <td>{{$post->created_at}}</td>
              <td><button class="btn btn-info btn-sm">Edit</button>&nbsp;<button class="btn btn-danger btn-sm">Delete</button></td>
              </tr>
                  
              @endforeach
                 
              @else
                  <p>No records found</p>
             
          </tbody>
          @endif
      </table>
      {{$posts->links()}}           
    </div>

</div>

    </div> 
     
           <!-- The Modal -->
           <div class="modal fade" id="adsSchool">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Add Post</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                     <form action="/updatesAdd" method="POST" id="schoolForm">
                            @csrf
                            
                            <div class="form-group">
                            <label for="exampleInputName1">Post content</label>
                           <textarea name="post" id="exampleInputName1" cols="30" rows="10"></textarea>
                            </div>
                        </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button class="btn bg-gradient-success btn-md text-white" type="submit" form="schoolForm">
                    Add
                </button>
                </div>
                
              </div>
            </div>
          </div>
   
@endsection
