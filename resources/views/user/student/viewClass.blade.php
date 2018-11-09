@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/student/class.css') }}">
@endsection

@section('content')
<div class="row fontRoboto mb-3">

  <!-- LEFT BOX -->
  <div class="col-12 col-md-4">
    <!-- TOP BUTTONS  -->
    <div class="row mb-3 fontRoboto">
      @if(Auth::user()->userType == "Student")
      <button class="btn btn-secondary mr-2 sameNavBg" data-toggle="modal" data-target="#addClassModal">
          <i class="fas fa-plus-circle align-baseline"></i> Join a class 
      </button>
      @endif
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle sameNavBg" type="button" id="showClasses" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Choose a class
        </button>
        <div class="dropdown-menu" aria-labelledby="showClasses">
          @if(Auth::user()->userType == "Student")
          @foreach($classes as $row)
          <a class="dropdown-item" href="/viewClass/{{$row->group_class->id}}">{{$row->group_class->subject->name}}</a>
          @endforeach
          @endif
          @if(Auth::user()->userType == "Teacher")
          @foreach($classes as $row)
          <a class="dropdown-item" href="/viewClassTeacher/{{$row->id}}">{{$row->subject->name}}</a>
          @endforeach
          @endif
        </div>
      </div>
    </div>
    <!-- TOP BUTTONS END -->

    <div class="row bg-light rounded">
      <div class="col-12 mt-3 pb-2">
        <h3 class="text-center" style="color:#077325"> {{$classDetails->subject->name}} </h3>
        @foreach($classDetails->schedules as $row)
          <p class="text-center mb-0">{{$row->schedule->day}} {{$row->schedule->class_start}} - {{$row->schedule->class_end}}</p>
        @endforeach
        <!-- <p class="text-center my-0">room</p> -->
      </div>
    </div>

    <div class="row bg-light rounded mt-3">
      <div class="col-12 mt-3">
        <h3 class="text-center" style="color:#077325"> Teacher </h3>
        <p class="text-center"><img src="/storage/user_img/{{$classDetails->teacher->picture}}" class="align-middle rounded-circle" width="40px" style="box-shadow: 2px 2px 8px;"><a href="#teacherModal" class="align-middle ml-2" data-toggle="modal">{{$classDetails->teacher->fullname}}</a></p>
      </div>
    </div>

    <div class="row bg-light rounded mt-3">
      <div class="col-12 mt-3">
        <h3 class="text-center" style="color:#077325"> Students </h3>

        <div class="row">
          @foreach($students as $row)
          <div class="col-6">
          <p class=""><img src="/storage/user_img/{{$row->student->picture}}" class="align-middle rounded-circle" width="25px" style="box-shadow: 2px 2px 8px;"><a href="#studentModal{{$row->student->id}}" class="align-middle ml-2" data-toggle="modal">{{$row->student->fullname}}</a></p>
          </div>
          @endforeach    
        </div>
      </div>
    </div>

  </div>
  <!-- LEFT BOX END-->

  <!-- RIGHT BOX -->
  <div class="col-12 col-md-7 ml-md-3">
    <div class="row mt-3 mt-md-0"><!-- School Ann Header -->
    <div class="col-10 col-md-5 py-2 rounded-top" style="background-image: linear-gradient(#32C275, #1CBB66);">
      <p class="m-auto text-white"> Class Announcements </p>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12" style="border-bottom: 1px solid white;">
    </div>
    </div>

    @if(Auth::user()->userType == "Teacher")
    <!-- POST AN ANNOUNCEMENT FORM -->
    <div class="row">
      <div class="col-12 col-md-12 mt-3 pb-2 rounded-top bg-light py-3">
        <form method="POST" action="{{route('class.post')}}">
          {{ csrf_field() }}
          <input type="hidden" name="group_class_id" value="{{$classDetails->id}}" required>
          <input type="text" class="form-control mb-2" name="title" placeholder="Title">
          <div class="collapse" id="ckHolder">
          <textarea name="announcement" id="article-ckeditor"></textarea>
          </div>
          <textarea class="form-control" placeholder="Hello teacher, post some announcements. . ." id="defaultTA"></textarea>
          <input type="submit" class="btn btn-sm btn-primary mt-2 ml-auto d-block" value="Post">
        </form>
      </div>
    </div>
    <!-- POST AN ANNOUNCEMENT FORM END-->
    @endif

    <!-- ANNOUNCEMENTS -->
    @foreach($posts as $row)
    <div class="row">
      <div class="col-12 col-md-12 mt-3 pb-2 rounded-top bg-light">
        <div class="row">
        <div class="col-2 col-md-1 mt-2">
          <img src="/storage/user_img/{{$row->announcement->users->picture}}" class="rounded-circle postByImg" width="50px" style="box-shadow: 0px 0px 5px;" /> 
        </div>
        <div class="col-9 col-md-10 mt-2">
          <p class="m-0 text-muted"> Posted by:  {{$row->announcement->users->fullname}} </p>
          <p class="m-0 text-muted"> {{$row->created_at->format('M d Y g:i A')}} </p>
        </div>
        @if($row->announcement->users->id == Auth::user()->id)
        <div class="col mt-3 p-0 dropleft">
          <i class="fas fa-ellipsis-v ml-md-4 text-muted" data-toggle="dropdown"></i>
          <div class="dropdown">
            <div class="dropdown-menu" id="dropdown">
              <a class="dropdown-item" href="#edit{{$row->id}}" onclick="editPost({{$row->id}});">Edit</a>
              <a class="dropdown-item" href="/delClassPost/{{$row->announcement->id}}" onclick="return confirm('Are you sure you want to delete this post?')">Delete</a>
            </div>
          </div>
        </div>
        @endif
        </div>

        <div class="container-fluid p-0 m-0" id="origHolder{{$row->id}}">
          <div class="row">
            <div class="col-12 col-md-12 mt-4">
            <h5>{{$row->announcement->title}}</h5>
            <p class="preserveLineBreaks m-0"> {!! $row->announcement->announcement !!} </p>
            </div>
          </div>
        </div>
        <!-- DIV FOR EDIT -->
        <div class="container-fluid p-0 m-0 collapse" id="editHolder{{$row->id}}">
          <div class="row">
            <div class="col-12 col-md-12 mt-4">
              <label>Edit title:</label>
              {!! Form::open(['route' => 'announcement.update', 'method' => 'PATCH']) !!}
              {{csrf_field()}}
              <input type="hidden" value="{{$row->announcement->id}}" name="id">
              <input type="text" class="form-control bg-light w-100 titleColor" value="{{$row->announcement->title}}" name="title">
              <label class="mt-2">Edit content:</label>
              <textarea name="announcement" id="article-ckeditor{{$row->id}}">{!! $row->announcement->announcement !!}</textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12 mt-4">
              <input type="submit" class="btn btn-sm btn-success" value="Update">
              <input type="reset" class="btn btn-sm btn-danger" value="Cancel" onclick="cancelEdit({{$row->id}});">
              {!! Form::close() !!} 
            </div>
          </div>
        </div>
        <!-- DIV FOR EDIT END-->

        <!-- <a href="#" target="_blank">
          <img src="/storage/post_img/{{$row->announcement->image}}" class="rounded" width="150px" style="max-height:100px;">
        </a> -->

      </div>
    </div>
    @endforeach
    @if(count($posts) > 1)
    <center> <p class="mt-5" style="color:#676767"> You have seen all the posts! </p></center>
    @elseif(count($posts) <= 0)
    @include('_inc.noPostToShow')
    @endif
    <!-- ANNOUNCEMENTS -->

  </div>
  <!-- RIGHT BOX END-->
</div>


<!-- VIEW TEACHER MODAL -->
<div class="modal fade" id="teacherModal" tabindex="-1" role="dialog" aria-labelledby="teacherModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modalTeacher" role="document">
      <div class="modal-content rounded-0">

        <div class="row">
          <div class="col-12">
            <img src="/storage/user_img/{{$classDetails->teacher->picture}}" class="d-block mx-auto rounded-circle bg-light" width="150px" style="box-shadow: 2px 2px 8px; margin-top: -70px;">
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-12">
            <p class="text-center"> {{$classDetails->teacher->fullname}} </p>    
            <p class="text-center"> Contact: {{$classDetails->teacher->contactNo}} </p>
            <p class="text-center"> Email: {{$classDetails->teacher->email}} </p>

            <p class="text-center"> <a href="/viewTeacherProfile/{{$classDetails->teacher->id}}" class="cardButton px-5 py-1 text-white mx-auto"><i class="fas fa-eye"></i> View Full Details</a> </p>
          </div>
        </div>

      </div>
    </div>
  </div>
<!-- VIEW TEACHER MODAL END-->

<!-- VIEW STUDENT MODAL -->
@foreach($students as $row)
<div class="modal fade" id="studentModal{{$row->student->id}}" tabindex="-1" role="dialog" aria-labelledby="studentModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modalViewProfileStudent" role="document">
      <div class="modal-content rounded-0">

        <div class="row">
          <div class="col-12">
            <img src="/storage/user_img/{{$row->student->picture}}" class="d-block mx-auto rounded-circle bg-light" width="150px" style="box-shadow: 2px 2px 8px; margin-top: -70px;">
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-12">
            <p class="text-center"> {{$row->student->fullname}} </p>    
            <p class="text-center"> Contact: {{$row->student->contactNo}} </p>
            <p class="text-center"> Email: {{$row->student->email}} </p>

            <p class="text-center"> <a href="/viewStudentProfile/{{$row->student->id}}" class="cardButton px-5 py-1 text-white mx-auto"><i class="fas fa-eye"></i> View Full Details</a> </p>
          </div>
        </div>

      </div>
    </div>
  </div>
@endforeach
<!-- VIEW STUDENT MODAL END-->


<!-- ADD A CLASS MODAL -->
  <div class="modal fade" id="addClassModal" tabindex="-1" role="dialog" aria-labelledby="addClassModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title fontRoboto"> Search for a class </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form method="GET" action="/searchClass">
                  {{ csrf_field() }}
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" name="searchSubject" placeholder="Enter subject" required>
                    <div class="input-group-append">
                      <button class="btn btn-outline-primary round-0" type="submit" style="border-radius: 0 !important;">Search <i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
  </div>
<!-- ADD A CLASS MODAL END-->


<!-- jQuery -->
<script src="/js/extra/jquery-3.3.1.slim.min.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

<!-- CUSTOMIZED SCRIPTS -->
<script type="text/javascript" src="/js/unique/home_nf.js"></script>
<script type="text/javascript">CKEDITOR.replace('article-ckeditor');
$(document).ready(function(){
  $('#defaultTA').on('focus',function(){
    $('#defaultTA').hide();
    $('#ckHolder').fadeIn("slow");
  });

});
</script>
@endsection