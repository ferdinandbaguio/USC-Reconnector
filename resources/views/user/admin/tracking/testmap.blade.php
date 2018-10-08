@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{asset('css/extra/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}"/>

@endsection

@section('content')

<div id="world-map"></div>

<script>
$(function(){
    $('#world-map').vectorMap({map: 'world_mill'});
});
</script>

@endsection

@section('scripts')

<script type="text/javascript" src="{{asset('js/extra/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/extra/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

@endsection