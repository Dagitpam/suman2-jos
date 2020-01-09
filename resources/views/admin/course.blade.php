@extends('layouts.admin_app')
@section('admin_content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-danger text-white mr-2">
            <i class="mdi mdi-home"></i>
          </span>Admin Dashboard | Add Course </h3>
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
      <div class="card-title">List of Courses</div>
      <table class="table table-bordered">
              @if (count($details['courseDetails']) > 0)
          <thead>
              <tr>
                  <th>Department Id</th>
                  <th> School Name</th>
                  <th> Department Name</th>
                  <th>Course  Name</th>
                  <th>Created At</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
             
              @foreach ($details['courseDetails'] as $courseDetail)
              <tr>
              <td>{{$courseDetail->id}}</td>
              <td>{{$courseDetail->school}}</td>
              <td>{{$courseDetail->department}}</td>
              <td>{{$courseDetail->course}}</td>
              <td>{{$courseDetail->created_at}}</td>
              <td><button type="submit" class="btn btn-info btn-sm" onclick="transfer({{$courseDetail->id}})" data-toggle="modal" data-target="#editCourse">Edit</button>&nbsp;

                <button type="submit" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCourse">delete</button>
              
                </td> 
              </tr>
                  
              @endforeach
                 
              @else
                  <p>No records found</p>
             
          </tbody>
          @endif
      </table>
      {{$details['courseDetails']->links()}}           
    </div>

</div>
    </div> 
     
           <!-- The Modal -->
           <div class="modal fade" id="adsSchool">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Add Course</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                     <form action="/courseAdd" method="POST" id="schoolForm">
                            @csrf
                            <div class="form-group">
                            <label for="exampleInputName1">School</label>
                            <select class="form-control" name="school" id="exampleSelectGender">
                                <option>---Click & Choose---</option>
                                @foreach ($details['schoolDetails'] as $schoolDetail)
                            <option value="{{$schoolDetail->name}}">{{$schoolDetail->name}}</option>
                                    
                                @endforeach
                              
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Department</label>
                                <select class="form-control" name="department" id="exampleSelectGender">
                                    <option>---Click & Choose---</option>
                                    @foreach ($details['departmentDetails'] as $departmentDetail)
                                <option value="{{$departmentDetail->department}}">{{$departmentDetail->department}}</option>
                                        
                                    @endforeach
                                  
                                </select>
                                </div>
                            <div class="form-group">
                            <label for="exampleInputName1">Course</label>
                            <input type="text" class="form-control" name="course" id="exampleInputName1" placeholder="Department Name">
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

           <!-- The Modal Edit Course -->
           <div class="modal fade" id="editCourse">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Edit Course</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                <form action="/updateCourse/{{$courseDetail->id}}" method="POST" id="editCourses">
                            @csrf
                            <div class="form-group">
                            <label for="schoolName">School</label>
                            <select class="form-control" name="school" id="schoolName">
                                <option>---Click & Choose---</option>
                                @foreach ($details['schoolDetails'] as $schoolDetail)
                            <option value="{{$schoolDetail->name}}">{{$schoolDetail->name}}</option>
                                    
                                @endforeach
                              
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="department">Department</label>
                                <select class="form-control" name="department" id="departmentName">
                                    <option>---Click & Choose---</option>
                                    @foreach ($details['departmentDetails'] as $departmentDetail)
                                <option value="{{$departmentDetail->department}}">{{$departmentDetail->department}}</option>
                                        
                                    @endforeach
                                  
                                </select>
                                </div>
                            <div class="form-group">
                            <label for="courseName">Course</label>
                            <input type="text" class="form-control" name="course" id="courseName" placeholder="Department Name">
                            </div>
                            @method('PUT')
                        </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button class="btn bg-gradient-success btn-md text-white" type="submit" form="editCourses">
                    Update
                </button>
                </div>
                
              </div>
            </div>
          </div>
          {{-- /end course update --}}
          <!-- The Modal  for Deleting User post-->
  <div class="modal fade" id="deleteCourse">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Delete Course?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          @if (count($details['courseDetails']) > 0)
          <form action="/deleteCourse/{{$courseDetail->id}}" method="post" id="delete_course">
            @csrf
            @method('DELETE')
          </form>
          Proceed continue if you wish to delete. 
          @else
            <p>No post Found</p> 
          @endif
         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" form="delete_course">Continue</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
          {{-- SCript --}}
          <script>
          function transfer(a){
            var a;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
                $.ajax({
                    url:"/editCourse",
                    method: "POST",
                    cache: false,
                    data: {id: a},
                    success:function(result){
                       //  alert(result.msg);
                        document.getElementById('schoolName').value = result.school;
                        document.getElementById('departmentName').value = result.department;
                        document.getElementById('courseName').value = result.course;
                    },
                    error:function(){
                        alert('fuck');
                    }
                });
        };
    
    
    
    
            // function transfer(){
            //     let itemName_final = document.querySelector("#item_name");
            //     let itemDesc_final = document.querySelector("#item_desc");
            //     let itemName = document.querySelector("#item_name2");
            //     let itemDesc = document.querySelector("#item_desc2");
    
    
            //     itemName.value = itemName_final.value;
            //     itemDesc.value = itemDesc_final.value;
            // }
        </script> 
   
@endsection
