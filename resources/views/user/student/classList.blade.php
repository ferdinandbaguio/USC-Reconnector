@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/student/class.css') }}">
@endsection

@section('content')
<!-- TOP BUTTONS  -->
<div class="row mb-3 fontRoboto">
 

<div class="row bg-light">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->description}}</td>
      <td> <button class="btn btn-sm btn-success"> Join</button> </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

</div>

@endsection