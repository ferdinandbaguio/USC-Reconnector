@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/alumnus/home_nf.css') }}">
@endsection

@section('content')
<div class="row mb-3 d-md-none">
      @if(Auth::user()->userType == "Teachers" || Auth::user()->userType == "Alumnus")
      <div class="col-md-12">
        <button type="button" class="addJobBtn w-100 p-2" data-toggle="modal" data-target="#jobOfferModal"> <i class="fas fa-plus"></i> Add a Job Offer</button>
      </div>
      @endif
      @if(Auth::user()->userType == "Teacher")
      <div class="col-md-12 mt-2">
        <button type="button" class="addJobBtn w-100 p-2" data-toggle="modal" data-target="#announcementModal"> <i class="fas fa-plus"></i> Add an Announcement</button>
      </div>
      @endif
  </div>

  <div class="row"><!-- Father Row -->
  <div class="col-md-8 mb-5"> <!-- Separator column -->


  <div class="row"><!-- School Ann Header -->
    <div class="col-10 col-md-5 py-2 rounded-top" style="background-image: linear-gradient(#32C275, #1CBB66);">
      <p class="m-auto text-white"> Latest School Announcement </p>
    </div>
  </div>  
  <div class="row">
    <div class="col-md-12" style="border-bottom: 1px solid gray;">
    </div>
  </div>  <!-- School Ann Header END-->
 
  @unless(!$latestannouncement)
  <!-- Div latest announcement container -->
  <div class="row">
  <div class="col-12 col-md-12 mt-3 pb-2 rounded-top postBox bg-light">
    <div class="row">
    <div class="col-2 col-md-1 mt-2">
      <img src="/img/homepage_images/Boy.jpg" class="rounded-circle postByImg" width="50px" /> 
    </div>
    <div class="col-10 col-md-11 mt-2">
      <p class="m-0 text-muted"> Posted by:  {{$latestannouncement->users->fullname}} </p>
      <p class="m-0 text-muted"> {{$latestannouncement->created_at->format('M d Y g:i A')}} </p>
    </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 mt-4">
      <strong> Title of Announcement </strong>
      <p class="preserveLineBreaks"> {{$latestannouncement->announcement}} </p>
      </div>
    </div>

  </div>
  </div><!-- Div latest announcement container end -->
  @else
  @endunless

 
  <div class="row mt-5"><!-- Alumni Job Header -->
    <div class="col-8 col-md-5 py-2 rounded-top" style="background-image: linear-gradient(#1C72BB, #0A5492)">
      <p class="m-auto text-white"> Latest Alumni Job Post </p>
    </div>
  </div>  
  <div class="row">
    <div class="col-md-12" style="border-bottom: 1px solid gray;">
    </div>
  </div>  <!-- Alumni Job Header END-->

@unless(!$latestjobpost)
  <!-- Div latest job container -->
  <div class="row">

    <div class="col-md-12 mt-3 pb-2 rounded-top postBox bg-light">
      <div class="row">
      <div class="col-2 col-md-1 mt-2">
        <img src="/img/homepage_images/Girl.jpg" class="rounded-circle postByImg" width="50px" /> 
      </div>
      <div class="col-10 col-md-11 mt-2">
        <p class="m-0 text-muted"> Posted by:  {{$latestjobpost->users->fullname}} </p>
        <p class="m-0 text-muted"> {{$latestjobpost->created_at->format('M d Y g:i A')}}</p>
      </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-12 mt-4">
        <p class="m-0"> Company: {{$latestjobpost->companyName}} </p>
        <p class="m-0"> Location: {{$latestjobpost->address}} </p>
        <p class="m-0"> Job Title: {{$latestjobpost->jobTitle}} </p>
        <p class="m-0"> Job Description: {{$latestjobpost->description}} </p>
        <p class="m-0"> Salary Range: {{$latestjobpost->salaryRange}} </p>
        <p class="m-0"> Contact: {{$latestjobpost->contactNo}} </p>
        <p class="m-0"> Email: {{$latestjobpost->email}} </p>

        <img src="/img/homepage_images/Pic5.jpg" class="rounded" width="150px">
        </div>
      </div>
    </div>
  </div><!-- Div latest job container end -->
  @else
  @endunless


  <div class="row mt-5"><!-- Recent Posts Header -->
    <div class="col-7 col-md-4 py-2 rounded-top annBtn" onclick="hideJob()">
      <p class="m-auto text-white d-inline"> Announcements </p> <i class="fas fa-arrow-down text-white" id="annI"></i>
    </div>
    <div class="col-5 col-md-4 py-2 ml-md-1 rounded-top jobBtn" onclick="hideAnn()">
      <p class="m-auto text-white"> Job Posts <i class="fas fa-arrow-down text-white" id="jobI"></i></p>
    </div>
  </div>  
  <div class="row">
    <div class="col-12" style="border-bottom: 1px solid gray;">
    </div>
  </div>  <!-- Recent Posts Header END-->


<!-- Div Recent Announcement container -->
@foreach($announcements as $row)
  <div class="row annHolder">
    <div class="col-12 col-md-12 mt-3 pb-2 postBox bg-light">
        <div class="row">
        <div class="col-2 col-md-1 mt-2">
        <img src="/img/homepage_images/Boy.jpg" class="rounded-circle postByImg" width="50px" /> 
        </div>
        <div class="col-10 col-md-11 mt-2">
        <p class="m-0 text-muted"> Posted by: {{$row->users->fullname}} </p>
        <p class="m-0 text-muted"> {{$row->created_at->format('M d Y g:i A')}} </p>
        </div>
        </div>

        <div class="row">
        <div class="col-12 col-md-12 mt-4">
        <strong> Title of Announcement </strong>
        <p class="preserveLineBreaks"> {{$row->announcement}} </p>
        </div>
        </div>

    </div>
  </div><!-- Div Recent Posts container end -->
@endforeach

@foreach($jobposts as $row)
  <!-- Div latest job container -->
  <div class="row jobHolder">
  <div class="col-12 col-md-12 mt-3 pb-2 postBox bg-light">
    <div class="row">
    <div class="col-2 col-md-1 mt-2">
      <img src="/img/homepage_images/Girl.jpg" class="rounded-circle postByImg" width="50px" /> 
    </div>
    <div class="col-10 col-md-11 mt-2">
      <p class="m-0 text-muted"> Posted by: {{$row->users->fullname}} </p>
      <p class="m-0 text-muted"> {{$row->created_at->format('M d Y g:i A')}} </p>
    </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 mt-4">
      <p class="m-0"> Company: {{$row->companyName}} </p>
      <p class="m-0"> Location: {{$row->address}} </p>
      <p class="m-0"> Job Title: {{$row->jobTitle}} </p>
      <p class="m-0"> Job Description: {{$row->description}} </p>
      <p class="m-0"> Salary Range: {{$row->salaryRange}} </p>
      <p class="m-0"> Contact: {{$row->contactNo}} </p>
      <p class="m-0"> Email: {{$row->email}} </p>

      <img src="/img/homepage_images/Pic5.jpg" class="rounded" width="150px">
      </div>
    </div>

  </div>
  </div><!-- Div latest job container end -->
@endforeach
 

  <center> <p class="fontRoboto text-muted mt-5"> You have seen all the recent posts! </p></center>
  </div><!-- Separator Column END -->


  <div class="col-md-3 ml-auto"> 
    <div class="row d-none d-md-block">
      @if(Auth::user()->userType == "Teacher" || Auth::user()->userType == "Alumnus")
      <div class="col-md-12">
        <button type="button" class="addJobBtn w-100 p-2" data-toggle="modal" data-target="#jobOfferModal"> <i class="fas fa-plus"></i> Add a Job Offer</button>
      </div>
      @endif
      
      @if(Auth::user()->userType == "Teacher")
      <div class="col-md-12 mt-2">
        <button type="button" class="addJobBtn w-100 p-2" data-toggle="modal" data-target="#announcementModal"> <i class="fas fa-plus"></i> Add an Announcement</button>
      </div>
      @endif
    </div>

    <div class="row mt-5">
      <div class="col-md-12">
      <p> Featured Video</p>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-12">
        <video width="100%" controls>
        <source src="/vid/Sas_Bulletin.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
       </video>
       <p> SAS Bulletin - Staff Sessions </p>

      </div>
    </div>
  </div><!-- MD RIGHT COLUMN END (ADD BTNS)-->

  </div><!-- Father row END -->


  <!-- ADD JOB OFFER MODAL -->
  <div class="modal fade" id="jobOfferModal" tabindex="-1" role="dialog" aria-labelledby="jobOfferModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title"> Job Offer/Referral</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{route('jobPosts.store')}}" >
                    @csrf
                    <div class="form-group">
                    <label class="col-form-label"> Company: </label>
                    <input type="text" class="form-control" placeholder="Company" name="companyName"> 
                    <label class="col-form-label"> Address: </label>
                    <input type="text" class="form-control" placeholder="Address" name="address">
                    <label class="col-form-label"> Job Title: </label>
                    <input type="text" class="form-control" placeholder="Job Title" name="jobTitle">
                    <label class="col-form-label"> Job Description: </label>
                    <textarea class="form-control" placeholder="Type description here..." name="description"></textarea>
                    <label class="col-form-label"> Salary Range: </label>
                    <input type="text" class="form-control" placeholder="Salary Range" name="salaryRange">
                    <label class="col-form-label"> Contact: </label>
                    <input type="text" class="form-control" placeholder="+639 000 0000" name="contactNo">
                    <label class="col-form-label"> Email: </label>
                    <input type="text" class="form-control" placeholder="example@gmail.com" name="email">
                    <label class="col-form-label"> Upload Pictures (Optional): </label>
                    <input type="file" class="form-control fontRoboto" multiple name="image">
                    </div>
                </div>
                <div class="modal-footer p-0">
                    <div class="row w-100 m-0">
                            <div class="col-6 p-0 m-0 border-primary" style="border-right:1px solid;border-bottom:1px solid;">
                            <button type="submit" class="btn text-primary btn-light w-100">Post Job Offer</button>
                            </div>

                            <div class="col-6 p-0 m-0 border-danger" style="border-left:1px solid;border-bottom:1px solid;">
                            <button type="button" class="btn text-danger btn-light w-100" data-dismiss="modal">Close</button>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
  </div>
  <!-- ADD JOB OFFER MODAL END -->


  <!-- ADD ANNOUNCEMENT MODAL -->
<div class="modal fade" id="announcementModal" tabindex="-1" role="dialog" aria-labelledby="announcementModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Post an Announcement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('announcements.store')}}" >
                @csrf
                <div class="form-group">
                <label class="col-form-label"> Title: </label>
                    <input type="text" class="form-control" placeholder="Title" name="title">
                    <label class="col-form-label"> Announcement: </label>
                    <textarea class="form-control" placeholder="Type announcement here..." name="announcement"></textarea>

                    <label class="col-form-label mt-2"> Upload Pictures (Optional): </label>
                    <input type="file" class="form-control fontRoboto" multiple name="image">
                </div> 
            </div>
            <div class="modal-footer p-0">
                <div class="row w-100 m-0">
                    <div class="col-6 p-0 m-0 border-primary" style="border-right:1px solid;border-bottom:1px solid;">
                    <button type="submit" class="btn text-primary btn-light fontRoboto w-100">Post Announcement</button>
                    </div>
                    <div class="col-6 p-0 m-0 border-danger" style="border-left:1px solid;border-bottom:1px solid;">
                    <button type="button" class="btn text-danger btn-light fontRoboto w-100" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

  <!-- ADD ANNOUNCEMENT MODAL END-->


<script type="text/javascript" src="/js/unique/home_nf.js"></script>
@endsection