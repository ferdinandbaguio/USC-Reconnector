@extends('_layouts.admin')

@section('styles')

{{--  --}}

@endsection

@section('title')

USC - Reconnector

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">Communications</div>

                    <div class="card-body" id="app">
                        <chat-app :user="{{ auth()->user() }}"></chat-app>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

{{--  --}}

@endsection