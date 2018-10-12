@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/extra/vendors/DataTables/datatables.min.css') }}" />
<link rel="stylesheet" href="{{asset('css/extra/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" />

@endsection

@section('content')

<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title">World Map Alumni Tracking</div>
    </div>
    <div class="ibox-body">
        <div id="world-map" style="height: 500px;"></div>
        <br><br>
        {{-- <button class="btn btn-info pull-right" data-toggle="tooltip" data-original-title="Load Country Data" id="load">
            Load <i class="ti-reload"></i>                            
        </button> --}}
        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Country</th>
                    <th>Number of Alumni</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('scripts')

<script type="text/javascript" src="{{asset('js/scripts/countries/flags.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/countries/names.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/countries/code.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts/countries/value.js')}}"></script>

<script type="text/javascript" src="{{asset('js/scripts/worldwidemap-data.js')}}"></script>

<script type="text/javascript" src="{{asset('js/extra/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/extra/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

<script type="text/javascript" src="{{ asset('css/extra/vendors/DataTables/datatables.min.js') }}"></script>

@endsection