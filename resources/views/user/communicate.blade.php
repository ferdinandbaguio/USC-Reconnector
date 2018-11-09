@extends('_layouts.app')

@section('header')

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        {{-- @if(isset($recipients))
            <div class="alert alert-secondary">
                |
                @foreach($recipients as $r)
                    {{$r->recipient->idnumber}}: {{$r->recipient->full_name}} |
                @endforeach
            </div>
        @endif --}}
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    Communications
                </div>

                <div class="card-body" id="app">
                    <chat-app :user="{{ Auth::user() }}"></chat-app>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<!-- CORE PLUGINS-->
<script type="text/javascript" src="{{ asset('js/extra/vendors/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extra/vendors/popper.js/dist/umd/popper.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extra/vendors/metisMenu/dist/metisMenu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/extra/vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

@endsection