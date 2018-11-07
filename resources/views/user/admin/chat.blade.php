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
                <div class="card-header">
                    Communications
                    <span data-toggle="modal" data-target="#create">
                        <button class="btn btn-primary pull-right" data-toggle="tooltip" 
                        data-original-title="Create A New User">
                            Create New Group Chat
                        </button>
                    </span>
                </div>

                <div class="card-body" id="app">
                    <chat-app :user="{{ Auth::user() }}"></chat-app>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Create Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Creating New Group Chat</h4>
    </div>
    {!! Form::open(['route' => 'StoreChat', 'method' => 'POST', 
                    'style' => 'display:inline-block;', 'files' => TRUE]) !!}
    @csrf
    <div class="modal-body">
        <div class="row">
            <div class="col-md-6 form-group">
                <b>{{Form::label('title', 'Title')}}</b>
                {{Form::text('title', '', ['class' => 'form-control input-rounded', 
                'placeholder' => 'Type in Title', 'required'])}}
            </div>
            <div class="col-md-6 form-group">
                <b>{{Form::label('sender', 'Sender')}}</b>
                {{Form::text('sender', '', ['class' => 'form-control input-rounded', 
                'placeholder' => 'Type in Sender', 'required'])}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <b>{{Form::label('rID1', 'Student')}}</b>
                <select name="rID1" class = "form-control input-rounded text-center">
                    @foreach ($students as $student) 
                        <option value={{$student->id}}>{{$student->full_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 form-group">
                <b>{{Form::label('rID2', 'Teacher')}}</b>
                <select name="rID2" class = "form-control input-rounded text-center">
                    @foreach ($teachers as $teacher) 
                        <option value={{$teacher->id}}>{{$teacher->full_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <b>{{Form::label('rID3', 'Alumnus')}}</b>
                <select name="rID3" class = "form-control input-rounded text-center">
                    @foreach ($alumni as $alumnus) 
                        <option value={{$alumnus->id}}>{{$alumnus->full_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 form-group">
                <b>{{Form::label('rID4', 'Admin')}}</b>
                <select name="rID4" class = "form-control input-rounded text-center">
                    @foreach ($admins as $admin) 
                        <option value={{$admin->id}}>{{$admin->full_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
</div>
</div>
</div>

@endsection

@section('scripts')

<script>
    $('#create').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var modal = $(this)
    })
</script>

@endsection