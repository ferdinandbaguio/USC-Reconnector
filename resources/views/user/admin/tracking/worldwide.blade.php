@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/extra/vendors/DataTables/datatables.min.css') }}" />
<link rel="stylesheet" href="{{asset('css/extra/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" />

@endsection

@section('title')

Worldwide

@endsection

@section('content')

<div class="row">
    <div class="col-lg-2">
        <div class="card text-white bg-success mb-3"  width="100%">
            <div class="card-header">
                #1
                <b><i>{{$topctry[0]->name}}</i></b>&nbsp;
                <img class="m-r-10" src="/storage/flag_img/{{$topctry[0]->flag}}" alt="{{$topctry[0]->code}}"> 
            </div>
            <div class="card-body">
              <h5 class="card-title">Alumni: {{$topctry[0]->value}}</h5>
              <p class="card-text">{{$topctry[0]->name}} has the highest number of Alumni amongst all 176 countries</p>
            </div>
        </div>
        <div class="card text-white bg-info mb-3" width="100%">
            <div class="card-header">
                #2&nbsp;
                <b><i>{{$topctry[1]->name}}</i></b>&nbsp;
                <img class="m-r-10" src="/storage/flag_img/{{$topctry[1]->flag}}" alt="{{$topctry[1]->code}}"> 
            </div>
            <div class="card-body">
              <h5 class="card-title">Alumni: {{$topctry[1]->value}}</h5>
            </div>
        </div>
        <div class="card text-white bg-warning mb-3" width="100%">
            <div class="card-header">
                #3&nbsp;
                <b><i>{{$topctry[2]->name}}</i></b>&nbsp;s
                <img class="m-r-10" src="/storage/flag_img/{{$topctry[2]->flag}}" alt="{{$topctry[2]->code}}"> 
            </div>
            <div class="card-body">
              <h5 class="card-title">Alumni: {{$topctry[2]->value}}</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-10">
        <div id="world-map" style="height: 500px;"></div>
    </div>
</div>
<br><br>
{!! Form::open(['route' => 'LoadCountry', 'method' => 'POST']) !!}
{{ Form::hidden('countryObject', '', ['id' => 'countryField']) }}
<button type="submit" class="btn btn-info pull-right" data-toggle="tooltip" data-original-title="Load Country Data and Refresh the Number of Alumni at a Country" id="load">
    Reload <i class="ti-reload"></i>                            
</button>
{!! Form::close() !!}
<br><br>
<table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Country</th>
            <th>Number of Alumni</th>
            <th>Percentage</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Country</th>
            <th>Number of Alumni</th>
            <th>Percentage</th>
        </tr>
    </tfoot>
    <tbody>
    @for($i = 0; $i < count($countries); $i++)
    @if($countries[$i]->value > 0)
        <?php 
            $percentage = round(($countries[$i]->value / $overall) * 100);
        ?>
        <tr>
            <td><img class="m-r-10" src="/storage/flag_img/{{$countries[$i]->flag}}" alt="{{$countries[$i]->code}}">
                {{$countries[$i]->name}}
            </td>
            <td>{{$countries[$i]->value}}</td>
            <td>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" style="width:{{$percentage}}%; height:5px;" aria-valuenow="{{$percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="progress-parcent">{{$percentage}}%</span>
            </td>
        </tr>
    @endif
    @endfor
    </tbody>
</table>

@endsection

@section('scripts')

<script type="text/javascript" src="{{asset('js/scripts/countries/flags.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/countries/names.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/countries/code.js')}}"></script>
<script type="text/javascript">
    var phpVarValue =<?php echo json_encode($getCountryValue); ?>;
</script>
<script type="text/javascript" src="{{asset('js/scripts/countries/value.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/worldwidemap-data.js')}}"></script>

<script type="text/javascript" src="{{asset('js/extra/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/extra/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

<script type="text/javascript" src="{{ asset('css/extra/vendors/DataTables/datatables.min.js') }}"></script>

@endsection