@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/alumnus/jobs.css') }}">
@endsection

@section('content')
<div class="row">
<a href="{{route('occupation.form')}}" class="btn btn-warning text-white ml-auto mb-2"><i class="fas fa-plus-circle"></i> Add Job </a>
</div>
<div class="row mb-5 pb-4 shadowBox">
    <div class="row w-100 p-0 m-0">
        <div class="col-md-4 py-4 pr-0 mx-auto">
            <div class="card">
            <img class="card-img-top mx-auto companyCardImg" src="/img/company_logo/globe.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title text-center">{{$latestJob->company->name}}</h4>
            <p class="card-text text-center">Location: <em> {{$latestJob->company->address}} </em></p>
            </div>
            </div>
        </div>
    </div>
    <div class="row p-0 m-0 w-100">
    <div class="col-md-5 ml-auto p-2 mb-2 boxInside">
        <!-- COMPANY INFORMATION --> 
        <div class="col-12">
        <h5 class="fontRoboto"><i class="fas fa-building"></i> Company Information </h5>
        </div>

        <div class="col-md-12">
        <h6> Company Name:</h6> <p class="fontRoboto">{{$latestJob->company->name}}</p>
        </div>

        <div class="col-12">
        <h6> Address:</h6> <p class="fontRoboto">{{$latestJob->company->address}}</p>
        </div>

        <div class="col-12">
        <h6> Description:</h6> <p class="fontRoboto">{{$latestJob->company->description}}</p>
        </div>

        <div class="col-12">
        <h6> </h6>
        </div>
        <div class="col-12">
        <ul>
       
        </ul>
        </div>
    </div>
    <div class="col-md-5 ml-2 p-2 mb-2 mr-auto boxInside">
    <!-- JOB INFORMATION -->
        <div class="col-12"> 
        <h5 class="fontRoboto"><i class="fas fa-building"></i> Job Information </h5>
        </div>
        <div class="col-12">
            <h6> Job Title:</h6> <p class="fontRoboto">{{$latestJob->title}}</p>
        </div>

        <div class="col-12">
            <h6> Salary:</h6><p class="fontRoboto">{{$latestJob->salaryRangeOne}} ~ {{$latestJob->salaryRangeTwo}}</p>
        </div>
        <div class="col-12">
            <h6> Date Employed:</h6> <p class="fontRoboto">{{date('M d Y', strtotime($latestJob->jobStart))}}</p>
        </div>
        <!-- JOB INFORMATION END -->
    </div>
    <!-- COMPANY INFORMATION END -->
    </div>
</div>
@if(Session::has('success'))
<p class="alert alert-info">{{ Session::get('success') }}</p>
@endif
<div class="row mt-3 mb-5 p-3 divInfoBg" style="box-shadow: 0px 2px 4px;"> <!-- Father Row -->

    <h4 class="fontRoboto"><i class="fas fa-history"></i> Job History</h4>
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Company Name</th>
        <th scope="col">Job Title</th>
        <th scope="col">Date Employed</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jobs as $row)
            <tr>
            <th scope="row">{{$row->id}}</th>
                <td>{{$row->company->name}}</td>
                <td>{{$row->title}}</td>
                <td>{{date('M d Y', strtotime($row->jobStart))}}</td>
                <td><a href="{{ url('alumnus/occupationform/'.$row->id.'/edit') }}">Edit</a></td>
                <td><a href="{{ URL::to('alumnus/occupationform/'.$row->id.'/delete') }}" onclick="return confirm('Are you sure you want to delete ?');">Delete</a></td>
               
            </tr>
        @endforeach
        
    </tbody>
    </table>
    
</div>

@endsection