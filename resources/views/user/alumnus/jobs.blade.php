@extends('_layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/alumnus/jobs.css') }}">
@endsection

@section('content')
<div class="row mb-5 pb-4 shadowBox">
        <a href="{{route('occupation.form')}}" class="btn btn-danger">Update Job</a>
    <div class="row w-100 p-0 m-0">
        <div class="col-md-4 py-4 pr-0">
            <div class="card">
            <img class="card-img-top mx-auto companyCardImg" src="/img/company_logo/globe.jpg" alt="Card image">
            <div class="card-body">
            <h4 class="card-title">Globe Telecom</h4>
            <p class="card-text">Location: <em> IT.Park Qualfon Building Telstra Pizza Resto Bar </em></p>
            </div>
            </div>
        </div>

        <div class="col-md-8 py-4 pr-0">
        <div class="col-12" style="height:100%;">
            <div id="map" class="w-100" style="background: url(/img/alt_imgs/GoogleMap.jpg);">
            </div>
            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlyUWOZTrGwtkrOFAV6-ejOmll5VuhUbE&callback=initMap">
            </script>
            <script>
            function initMap() {
                // The location of San Carlos
                var SanCarlosTalamban = {lat: 10.3304499, lng: 123.9073923};
                // The map, centered at San Carlos
                var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 17, center: SanCarlosTalamban});
                // The marker, positioned at San Carlos
                //var marker = new google.maps.Marker({position: SanCarlosTalamban, map: map});
            }
            </script>
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
        <h6> Company Name:</h6> <p class="fontRoboto">Globe Telecom</p>
        </div>
        <div class="col-md-12">
        <h6> Industry:</h6> <p class="fontRoboto">Marketing</p>
        </div>
        <div class="col-12">
        <h6> Address:</h6>
        </div>
        <div class="col-12">
        <p class="fontRoboto">IT.Park Qualfon Building Telstra Pizza Resto Bar</p>
        </div>
        <div class="col-12">
        <h6> Description:</h6>
        </div>
        <div class="col-12">
        <p class="fontRoboto">This company is full of workers. This company started in 1982 and got bankrupt after 48 years and then that's what happened. But now we are the best company in colon.</p>
        </div>
        <div class="col-12">
        <h6> Services Offered:</h6>
        </div>
        <div class="col-12">
        <ul>
        <li class="fontRoboto"> Free Food </li>
        <li class="fontRoboto"> Break Time </li>
        <li class="fontRoboto"> Increased Salary </li>
        </ul>
        </div>
    </div>
    <div class="col-md-5 ml-2 p-2 mb-2 mr-auto boxInside">
    <!-- JOB INFORMATION -->
        <div class="col-12"> 
        <h5 class="fontRoboto"><i class="fas fa-building"></i> Job Information </h5>
        </div>
        <div class="col-12">
            <h6> Job Title:</h6> <p class="fontRoboto">Secretary of the CEO</p>
        </div>
        <div class="col-12">
            <h6> Job Description:</h6> <p class="fontRoboto">I keep the files of our boss. I call our boss when there are meetings.</p>
        </div>
        <div class="col-12">
            <h6> Salary:</h6> <p class="fontRoboto">15,000 - 20,000</p>
        </div>
        <div class="col-12">
            <h6> Date Employed:</h6> <p class="fontRoboto">February 31, 1973</p>
        </div>
        <!-- JOB INFORMATION END -->
    </div>
    <!-- COMPANY INFORMATION END -->
    </div>
</div>

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
                <td>{{$row->name_of_company}}</td>
                <td>{{$row->highest_educational_attainment}}</td>
                <td>{{$row->created_at->format('M d Y g:i A')}}</td>
                <td><a href="{{ url('alumnus/form/'.$row->id.'/edit') }}">Edit</a></td>
            </tr>
        @endforeach
        
    </tbody>
    </table>
    
</div>

@endsection