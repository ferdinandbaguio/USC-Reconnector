@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/student/class.css') }}">
@endsection

@section('content')
<!-- TOP BUTTONS  -->
<div class="row mb-3 fontRoboto">
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle sameNavBg" type="button" id="showClasses" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Choose a class
    </button>
    <div class="dropdown-menu" aria-labelledby="showClasses">
      @foreach($data as $row)
      <a class="dropdown-item" href="/viewClassTeacher/{{$row->id}}"> {{$row->subject->name}} </a>
      @endforeach
    </div>
  </div>
</div>
<!-- TOP BUTTONS END -->

<div class="row fontRoboto mb-3 rounded" style="height:60vh;background: linear-gradient(#02948B,#032C41);">
<div class="col-md-6 mx-auto mt-4">
  <img src="/img/logo/studrec2.png" class="d-block" width="100%">
</div>
<div class="col-12">
  <h1 class="text-white text-center">Choose a class to view</h1>
</div>
</div>

@endsection