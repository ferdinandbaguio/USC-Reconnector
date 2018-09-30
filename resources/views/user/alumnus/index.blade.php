@extends('_layouts.alumnus')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/alumnus/home_nf.css') }}">
@endsection

@section('content')
<div class="row mb-3 d-md-none">
      <div class="col-md-12">
        <button type="button" class="addJobBtn w-100 p-2" data-toggle="modal" data-target="#jobOfferModal"> <i class="fas fa-plus"></i> Add a Job Offer</button>
      </div>
      <div class="col-md-12 mt-2">
        <button type="button" class="addJobBtn w-100 p-2" data-toggle="modal" data-target="#announcementModal"> <i class="fas fa-plus"></i> Add an Announcement</button>
      </div>
  </div>

  <div class="row"><!-- Father Row -->
  <div class="col-md-8 mb-5"> <!-- Separator column -->


  <div class="row"><!-- School Ann Header -->
    <div class="col-9 col-md-5 py-2 rounded-top" style="background-image: linear-gradient(#32C275, #1CBB66)">
      <p class="m-auto text-white"> Latest School Announcement </p>
    </div>
  </div>  
  <div class="row">
    <div class="col-md-12" style="border-bottom: 1px solid gray;">
    </div>
  </div>  <!-- School Ann Header END-->

  <!-- Div latest announcement container -->
  <div class="row">
  <div class="col-12 col-md-12 mt-3 pb-2 rounded-top postBox bg-light">
    <div class="row">
    <div class="col-2 col-md-1 mt-2">
      <img src="/img/homepage_images/Boy.jpg" class="rounded-circle" width="50px" /> 
    </div>
    <div class="col-8 col-md-4 mt-2">
      <p class="m-0 text-muted"> Posted by: Yomeo X. Yapzor </p>
      <p class="m-0 text-muted"> December 32, 2033 | 8:10 AM </p>
    </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 mt-4">
      <p> No classes tomorrow. Due to heavy rainfall. Always be alert and avoid going outside your house to avoid injuries. </p>
      </div>
    </div>

  </div>
  </div><!-- Div latest announcement container end -->



  <div class="row mt-5"><!-- Alumni Job Header -->
    <div class="col-8 col-md-5 py-2 rounded-top" style="background-image: linear-gradient(#1C72BB, #0A5492)">
      <p class="m-auto text-white"> Latest Alumni Job Post </p>
    </div>
  </div>  
  <div class="row">
    <div class="col-md-12" style="border-bottom: 1px solid gray;">
    </div>
  </div>  <!-- Alumni Job Header END-->

  <!-- Div latest job container -->
  <div class="row">
  <div class="col-md-12 mt-3 pb-2 rounded-top postBox bg-light">
    <div class="row">
    <div class="col-2 col-md-1 mt-2">
      <img src="/img/homepage_images/Girl.jpg" class="rounded-circle" width="50px" /> 
    </div>
    <div class="col-8 col-md-4 mt-2">
      <p class="m-0 text-muted"> Posted by: Yomeo X. Yapzor </p>
      <p class="m-0 text-muted"> December 32, 2033 | 8:10 AM </p>
    </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 mt-4">
      <p class="m-0"> Company: Kwek-kwek Websites </p>
      <p class="m-0"> Location: Fuente Colon Mandaue City </p>
      <p class="m-0"> Job Title: Front-end Developer </p>
      <p class="m-0"> Job Description: Just Code and Code </p>
      <p class="m-0"> Salary Range: 90,000 - 500,000 </p>
      <p class="m-0"> Contact: 0922511511 </p>
      <p class="m-0"> Email: test@gmail.mail.com </p>

      <img src="/img/homepage_images/Pic5.jpg" width="150px">
      </div>
    </div>

  </div>
  </div><!-- Div latest job container end -->



  <div class="row mt-5"><!-- Recent Posts Header -->
    <div class="col-6 col-md-4 py-2 rounded-top" style="background-image: linear-gradient(90deg, #1CBB66, #0A5492)" onmouseover = "this.style.cursor = 'pointer'">
      <p class="m-auto text-white d-inline"> Announcements </p> <i class="fas fa-arrow-down text-white"></i>
    </div>
    <div class="col-5 col-md-4 py-2 ml-1 rounded-top" style="background-image: linear-gradient(90deg, #0A5492, #1CBB66)" onmouseover = "this.style.cursor = 'pointer'">
      <p class="m-auto text-white"> Job Posts </p>
    </div>
  </div>  
  <div class="row">
    <div class="col-md-12" style="border-bottom: 1px solid gray;">
    </div>
  </div>  <!-- Recent Posts Header END-->

  <!-- Div Recent Posts container -->
  <div class="row">
  <div class="col-12 col-md-12 mt-3 pb-2 postBox bg-light">
    <div class="row">
    <div class="col-2 col-md-1 mt-2">
      <img src="/img/homepage_images/Boy.jpg" class="rounded-circle" width="50px" /> 
    </div>
    <div class="col-8 col-md-4 mt-2">
      <p class="m-0 text-muted"> Posted by: Yomeo X. Yapzor </p>
      <p class="m-0 text-muted"> December 32, 2033 | 8:10 AM </p>
    </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 mt-4">
      <p> No classes tomorrow. Due to heavy rainfall. Always be alert and avoid going outside your house to avoid injuries. </p>
      </div>
    </div>

  </div>
  </div><!-- Div Recent Posts container end -->

  <!-- Div latest job container -->
  <div class="row">
  <div class="col-12 col-md-12 mt-3 pb-2 postBox bg-light">
    <div class="row">
    <div class="col-2 col-md-1 mt-2">
      <img src="/img/homepage_images/Girl.jpg" class="rounded-circle" width="50px" /> 
    </div>
    <div class="col-8 col-md-4 mt-2">
      <p class="m-0 text-muted"> Posted by: Yomeo X. Yapzor </p>
      <p class="m-0 text-muted"> December 32, 2033 | 8:10 AM </p>
    </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 mt-4">
      <p class="m-0"> Company: Kwek-kwek Websites </p>
      <p class="m-0"> Location: Fuente Colon, Mandaue City </p>
      <p class="m-0"> Job Title: Front-end Developer </p>
      <p class="m-0"> Job Description: Just Code and Code </p>
      <p class="m-0"> Salary Range: 90,000 - 500,000 </p>
      <p class="m-0"> Contact: 0922511511 </p>
      <p class="m-0"> Email: test@gmail.mail.com </p>

      <img src="/img/homepage_images/Pic5.jpg" width="150px">
      </div>
    </div>

  </div>
  </div><!-- Div latest job container end -->

    <!-- Div Recent Posts container -->
  <div class="row">
  <div class="col-12 col-md-12 mt-3 pb-2 postBox bg-light">
    <div class="row">
    <div class="col-2 col-md-1 mt-2">
      <img src="/img/homepage_images/Boy.jpg" class="rounded-circle" width="50px" /> 
    </div>
    <div class="col-8 col-md-4 mt-2">
      <p class="m-0 text-muted"> Posted by: Yomeo X. Yapzor </p>
      <p class="m-0 text-muted"> December 32, 2033 | 8:10 AM </p>
    </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 mt-4">
      <p> No classes tomorrow. Due to heavy rainfall. Always be alert and avoid going outside your house to avoid injuries. </p>
      </div>
    </div>

  </div>
  </div><!-- Div Recent Posts container end -->


  <center> <p class="fontRoboto text-muted mt-5"> You have seen all the recent posts! </p></center>
  </div><!-- Separator Column END -->


  <div class="col-md-3 ml-auto"> 
    <div class="row d-none d-md-block">
      <div class="col-md-12">
        <button type="button" class="addJobBtn w-100 p-2" data-toggle="modal" data-target="#jobOfferModal"> <i class="fas fa-plus"></i> Add a Job Offer</button>
      </div>
      <div class="col-md-12 mt-2">
        <button type="button" class="addJobBtn w-100 p-2" data-toggle="modal" data-target="#announcementModal"> <i class="fas fa-plus"></i> Add an Announcement</button>
      </div>
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
       <p> University of San Carlos Tour - LRC & Stadium </p>

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
            </form>
            </div>
            </div>
            </div>
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
        <div class="form-group">
          <label class="col-form-label"> Title: </label>
            <input type="text" class="form-control" placeholder="Title">
            <label class="col-form-label"> Announcement: </label>
            <textarea class="form-control" placeholder="Type announcement here..."></textarea>

            <label class="col-form-label mt-2"> Upload Pictures (Optional): </label>
            <input type="file" class="form-control fontRoboto" multiple>
        </div>
      </div>
      <div class="modal-footer p-0">
        <div class="row w-100 m-0">
          <div class="col-6 p-0 m-0 border-primary" style="border-right:1px solid;border-bottom:1px solid;">
          <button type="button" class="btn text-primary btn-light fontRoboto w-100">Post Announcement</button>
          </div>
          <div class="col-6 p-0 m-0 border-danger" style="border-left:1px solid;border-bottom:1px solid;">
          <button type="button" class="btn text-danger btn-light fontRoboto w-100" data-dismiss="modal">Close</button>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>

  <!-- ADD ANNOUNCEMENT MODAL END-->


@endsection