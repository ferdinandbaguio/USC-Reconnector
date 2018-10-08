@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{asset('css/extra/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" />

@endsection

@section('content')

<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title">World Map Alumni Tracking</div>
    </div>
    <div class="ibox-body">
        <div id="world-map" style="height: 300px;"></div>
        <table class="table table-striped m-t-20 visitors-table">
            <thead>
                <tr>
                    <th>Country</th>
                    <th>Visits</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img class="m-r-10" src="{{asset('img/flags/us.png')}}" />USA</td>
                    <td>755</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" style="width:52%; height:5px;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-parcent">52%</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="m-r-10" src="{{asset('img/flags/Canada.png')}}" />Canada</td>
                    <td>700</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" style="width:48%; height:5px;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-parcent">48%</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="m-r-10" src="{{asset('img/flags/India.png')}}" />India</td>
                    <td>410</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" style="width:37%; height:5px;" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-parcent">37%</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="m-r-10" src="{{asset('img/flags/Australia.png')}}" />Australia</td>
                    <td>304</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" style="width:36%; height:5px;" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-parcent">36%</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="m-r-10" src="{{asset('img/flags/Singapore.png')}}" />Singapore</td>
                    <td>203</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar" role="progressbar" style="width:35%; height:5px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-parcent">35%</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="m-r-10" src="{{asset('img/flags/uk.png')}}" />UK</td>
                    <td>202</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" style="width:35%; height:5px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-parcent">35%</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="m-r-10" src="{{asset('img/flags/UAE.png')}}" />UAE</td>
                    <td>180</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" style="width:30%; height:5px;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="progress-parcent">30%</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('scripts')

<script type="text/javascript" src="{{asset('js/unique/worldwidemap-data.js')}}"></script>
<script type="text/javascript" src="{{asset('js/extra/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/extra/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

@endsection