@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{asset('css/extra/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}"/>

@endsection

@section('content')

<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title">Test</div>
    </div>
    <div class="ibox-body">
        <div id="world-map"  style="height: 400px"></div>
    </div>
</div>

@endsection

@section('scripts')

<script>
$(function() {
    
    var mapData = {
        "US": 7402,
        'RU': 5105,
        "AU": 4700,
        "CN": 4650,
        "FR": 3800,
        "DE": 3780,
        "GB": 2400,
        "SA": 2350,
        "BR": 2270,
        "IN": 1870,
    }

    $('#world-map').vectorMap({
        map: 'world_mill_en',
        series: {
            regions: [{
            values: mapData,
                scale: ['#C7FFC7', '#00A300'],
                normalizeFunction: 'polynomial'
            }]
        },
        onRegionTipShow: function(e, el, code){
            el.html(el.html()+' (GDP - '+mapData[code]+')');
        }
    });
});
</script>

<script type="text/javascript" src="{{asset('js/extra/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/extra/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

@endsection