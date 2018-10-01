@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/student/class.css') }}">
@endsection

@section('content')

<!-- Teacher and Course Subject -->
<div class="row">
  <div class="col-md-4 align-items-end">
  </div>

  <div class="col-md-4">
    <div class="card mb-4" style="box-shadow: 2px 2px 8px;">
      <div class="container-fluid p-3 teacherCard">
        <img src="/img/homepage_images/Girl.jpg" class="d-block mx-auto rounded-circle" width="150px" style="box-shadow: 2px 2px 2px;">
      </div>
      <div class="card-body">
        <p class="card-text text-center"> Professor X </p>
        <p class="card-text text-center">Linguistics Teacher</p>
        <div class="d-flex justify-content-between align-items-center">      
            <a href="/studenthome" class="cardButton px-5 py-1 text-white mx-auto"><i class="fas fa-eye"></i> Teacher Profile</a>      
        </div>
      </div>
    </div>
  </div>

</div><!-- Teacher and Course Subject END-->

<!-- Student members  -->
<h1 class="fontRoboto mt-3 text-center"> Students </h1>
<div class="row">
  <div class="col-md-3">
    <div class="card mb-4" style="box-shadow: 2px 2px 8px;">
      <div class="container-fluid p-3 studentCards">
        <img src="/img/homepage_images/Boy.jpg" class="d-block mx-auto rounded-circle" width="150px" style="box-shadow: 2px 2px 2px;">
      </div>
      <div class="card-body">
        <p class="card-text text-center"> Romeo X. Yapzor </p>
        <p class="card-text text-center">Bachelor of Science in Information Communication Technology</p>
        <div class="d-flex justify-content-between align-items-center">      
            <a href="/studenthome" class="cardButton px-5 py-1 text-white mx-auto"><i class="fas fa-eye"></i> View Profile</a>      
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card mb-4" style="box-shadow: 2px 2px 8px;">
      <div class="container-fluid p-3 studentCards">
        <img src="/img/homepage_images/Girl.jpg" class="d-block mx-auto rounded-circle" width="150px" style="box-shadow: 2px 2px 2px;">
      </div>
      <div class="card-body">
        <p class="card-text text-center"> Romeo X. Yapzor </p>
        <p class="card-text text-center">Bachelor of Science in Information Communication Technology</p>
        <div class="d-flex justify-content-between align-items-center">      
            <a href="/studenthome" class="cardButton px-5 py-1 text-white mx-auto"><i class="fas fa-eye"></i> View Profile</a>      
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card mb-4" style="box-shadow: 2px 2px 8px;">
      <div class="container-fluid p-3 studentCards">
        <img src="/img/homepage_images/Boy2.jpg" class="d-block mx-auto rounded-circle" width="150px" style="box-shadow: 2px 2px 2px;">
      </div>
      <div class="card-body">
        <p class="card-text text-center"> Jonax Z. Wat </p>
        <p class="card-text text-center">Bachelor of Science in Information Communication Technology</p>
        <div class="d-flex justify-content-between align-items-center">      
            <a href="/studenthome" class="cardButton px-5 py-1 text-white mx-auto"><i class="fas fa-eye"></i> View Profile</a>      
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card mb-4" style="box-shadow: 2px 2px 8px;">
      <div class="container-fluid p-3 studentCards">
        <img src="/img/homepage_images/Boy2.jpg" class="d-block mx-auto rounded-circle" width="150px" style="box-shadow: 2px 2px 2px;">
      </div>
      <div class="card-body">
        <p class="card-text text-center"> Jonax Z. Wat </p>
        <p class="card-text text-center">Bachelor of Science in Information Communication Technology</p>
        <div class="d-flex justify-content-between align-items-center">      
            <a href="/studenthome" class="cardButton px-5 py-1 text-white mx-auto"><i class="fas fa-eye"></i> View Profile</a>      
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card mb-4" style="box-shadow: 2px 2px 8px;">
      <div class="container-fluid p-3 studentCards">
        <img src="/img/homepage_images/Boy2.jpg" class="d-block mx-auto rounded-circle" width="150px" style="box-shadow: 2px 2px 2px;">
      </div>
      <div class="card-body">
        <p class="card-text text-center"> Jonax Z. Wat </p>
        <p class="card-text text-center">Bachelor of Science in Information Communication Technology</p>
        <div class="d-flex justify-content-between align-items-center">      
            <a href="/studenthome" class="cardButton px-5 py-1 text-white mx-auto"><i class="fas fa-eye"></i> View Profile</a>      
        </div>
      </div>
    </div>
  </div>
</div> <!-- Student members END -->


@endsection