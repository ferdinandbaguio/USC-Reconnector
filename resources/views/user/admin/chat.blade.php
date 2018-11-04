@extends('_layouts.admin')

@section('styles')

sad

@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">We Code Messenger</div>

                <div class="card-body" id="app">
                    <chat-app :user="{{ auth()->user() }}"></chat-app>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

sad

@endsection