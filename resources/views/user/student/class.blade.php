@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/student/class.css') }}">
@endsection

@section('content')
<!-- TOP BUTTONS  -->
<div class="row mb-3 fontRoboto">
  <button class="btn btn-secondary mr-2" data-toggle="modal" data-target="#addClassModal">
      <i class="fas fa-plus-circle align-baseline"></i> Join a class 
  </button>

  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="showClasses" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Choose a class
    </button>
    <div class="dropdown-menu" aria-labelledby="showClasses">
      <a class="dropdown-item" href="#">POLSC 12</a>
      <a class="dropdown-item" href="#">FIL 1</a>
      <a class="dropdown-item" href="#">SPAN 2</a>
    </div>
  </div>
</div>
<!-- TOP BUTTONS END -->

<div class="row fontRoboto mb-3">

  <!-- LEFT BOX -->
  <div class="col-12 col-md-4">
    <div class="row bg-light rounded">
      <div class="col-12 mt-3 pb-2">
        <h3 class="text-center" style="color:#077325"> ENG 21 </h3>
        <p class="text-center mb-0">TTH 7:30 - 5:30</p>
        <p class="text-center my-0">3.00 Units</p>
        <p class="text-center my-0">Room LB445</p>
      </div>
    </div>

    <div class="row bg-light rounded mt-3">
      <div class="col-12 mt-3">
        <h3 class="text-center" style="color:#077325"> Teacher </h3>
        <p class="text-center"><img src="/img/homepage_images/Boy2.jpg" class="align-middle rounded-circle" width="40px" style="box-shadow: 2px 2px 8px;"><a href="#teacherModal" class="align-middle ml-2" data-toggle="modal">Teacher Alyana</a></p>
      </div>
    </div>

    <div class="row bg-light rounded mt-3">
      <div class="col-12 mt-3">
        <h3 class="text-center" style="color:#077325"> Students </h3>

        <div class="row">
          <div class="col-6">
          <p class=""><img src="/img/homepage_images/Girl2.jpg" class="align-middle rounded-circle" width="25px" style="box-shadow: 2px 2px 8px;"><a href="#studentModal" class="align-middle ml-2" data-toggle="modal">Bryle Baguio</a></p>
          </div>

          <div class="col-6">
          <p class=""><img src="/img/homepage_images/Boy2.jpg" class="align-middle rounded-circle" width="25px" style="box-shadow: 2px 2px 8px;"><a href="#studentModal" class="align-middle ml-2" data-toggle="modal">Jonas Gwapo</a></p>
          </div>

          <div class="col-6">
          <p class=""><img src="/img/homepage_images/Girl2.jpg" class="align-middle rounded-circle" width="25px" style="box-shadow: 2px 2px 8px;"><a href="#studentModal" class="align-middle ml-2" data-toggle="modal">Bryle Baguio</a></p>
          </div>

          <div class="col-6">
          <p class=""><img src="/img/homepage_images/Boy2.jpg" class="align-middle rounded-circle" width="25px" style="box-shadow: 2px 2px 8px;"><a href="#studentModal" class="align-middle ml-2" data-toggle="modal">Jonas Gwapo</a></p>
          </div>
          
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

    <!-- POST AN ANNOUNCEMENT FORM -->
    <div class="row">
      <div class="col-12 col-md-12 mt-3 pb-2 rounded-top bg-light py-3">
        <form>
          <textarea class="form-control" placeholder="Hello teacher, post some announcements. . ."></textarea>

          <input type="submit" class="btn btn-primary mt-2 ml-auto d-block" value="Post">
        </form>
      </div>
    </div>
    <!-- POST AN ANNOUNCEMENT FORM END-->

    <!-- ANNOUNCEMENTs -->
    <div class="row">
      <div class="col-12 col-md-12 mt-3 pb-2 rounded-top bg-light">
        <div class="row">
        <div class="col-2 col-md-1 mt-2">
          <img src="/img/homepage_images/Boy2.jpg" class="rounded-circle postByImg" width="50px" style="box-shadow: 0px 0px 5px;" /> 
        </div>
        <div class="col-10 col-md-11 mt-2">
          <p class="m-0 text-muted"> Posted by:  Teacher Alyana </p>
          <p class="m-0 text-muted"> October 31, 2018 9:00AM </p>
        </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-12 mt-4">
          <h5>Title of Announcement</h5>
          <p class="preserveLineBreaks"> Announcemnt Announcemnt Announcemnt Announcemnt Announcemnt Announcemnt Announcemnt Announcemnt Announcemnt Announcemnt Announcemnt Announcemnt Announcemnt </p>
          </div>
        </div>

      </div>
    </div>
    <!-- ANNOUNCEMENTs -->
      <center> <p class="mt-5" style="color:#676767"> You have seen all the posts! </p></center>

  </div>
  <!-- RIGHT BOX END-->
</div>


<!-- VIEW TEACHER MODAL -->
<div class="modal fade" id="teacherModal" tabindex="-1" role="dialog" aria-labelledby="teacherModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modalTeacher" role="document">
      <div class="modal-content rounded-0">

        <div class="row">
          <div class="col-12">
            <img src="/img/homepage_images/Boy2.jpg" class="d-block mx-auto rounded-circle" width="150px" style="box-shadow: 2px 2px 8px; margin-top: -70px;">
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-12">
            <p class="text-center"> Teacher Alyana</p>    
            <p class="text-center"> Contact No.: +6392828177</p>
            <p class="text-center"> Email: teach@gmail.com</p>

            <p class="text-center"> <a href="/viewTeacherProfile/82" class="cardButton px-5 py-1 text-white mx-auto"><i class="fas fa-eye"></i> View Full Details</a> </p>
          </div>
        </div>

      </div>
    </div>
  </div>
<!-- VIEW TEACHER MODAL END-->

<!-- VIEW STUDENT MODAL -->
<div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="studentModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modalViewProfileStudent" role="document">
      <div class="modal-content rounded-0">

        <div class="row">
          <div class="col-12">
            <img src="/img/homepage_images/Girl2.jpg" class="d-block mx-auto rounded-circle" width="150px" style="box-shadow: 2px 2px 8px; margin-top: -70px;">
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-12">
            <p class="text-center"> Student Name</p>    
            <p class="text-center"> Contact No.: +6392828177</p>
            <p class="text-center"> Email: teach@gmail.com</p>

            <p class="text-center"> <a href="/viewStudentProfile/83" class="cardButton px-5 py-1 text-white mx-auto"><i class="fas fa-eye"></i> View Full Details</a> </p>
          </div>
        </div>

      </div>
    </div>
  </div>
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
                    <input type="text" class="form-control" name="searchSubject" placeholder="Enter subject">
                    <div class="input-group-append">
                      <button class="btn btn-outline-primary round-0" type="submit" style="border-radius: 0 !important;">Search <i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
  </div>
<!-- ADD A CLASS MODAL END-->



@endsection