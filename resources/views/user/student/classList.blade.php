@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/student/class.css') }}">
@endsection

@section('content')
<!-- TOP BUTTONS  -->


<div class="row">
  <form method="GET" action="/searchClass">
    {{ csrf_field() }}
    <div class="input-group mb-3">
      <input type="text" class="form-control" name="searchSubject" placeholder="Search subject" required>
      <div class="input-group-append">
        <button class="btn btn-primary round-0" type="submit" style="border-radius: 0 !important;">Search <i class="fas fa-search"></i></button>
      </div>
    </div>
  </form>
</div>


<div class="row fontRoboto">
<table class="table table-striped bg-light rounded">
  <thead>
    <tr>
      <th scope="col">Group #</th>
      <th scope="col">Course code</th>
      <th scope="col">Teacher</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->subject->name}}</td>
      <td>{{$row->teacher->firstName}} {{$row->teacher->lastName}}</td>
      <form method="POST" action="">
      <td><button class="btn btn-sm btn-success"> Join</button> </td>
      
    </tr>
    @endforeach
  
    @if(count($data) < 1)
    <tr>
      <td colspan="100%" class="text-center">No data to be displayed, try to search.</td>
    </tr>
    @endif
  </tbody>
</table>
</div>

</div>
@endsection