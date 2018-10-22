@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/extra/vendors/DataTables/datatables.min.css') }}" />

@endsection

@section('content')

<div class="page-heading">

<h1 class="page-title">Students @ Class</h1>

@include('_inc.messages')

<div class="page-content fade-in-up">
<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title text-info">
            Number of Students:<b><i> @if(isset($stdclasses)){{$stdclasses->count()}}@endif</i></b>
        </div>
        <span data-toggle="modal" data-target="#add-student">
            <button class="btn btn-info" data-toggle="tooltip" data-original-title="Create A New Class">
                Add <i class="ti-plus"></i>                            
            </button>
        </span>
    </div>
    <div class="ibox-body">
    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Picture</th>
                <th>ID Number</th>
                <th>Name</th>
                <th>Sex</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Picture</th>
                <th>ID Number</th>
                <th>Name</th>
                <th>Sex</th>
                <th>Remove</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach($stdclasses as $stdc)
                <tr>
                    <td><center>
                        <img src="/storage/user_img/{{ $stdc->student->picture }}" height="28" style="border-radius: 50%;" alt="User Default">
                    </center></td>
                    <td>{{ $stdc->student->idnumber }}</td>
                    <td>{{ $stdc->student->full_name }}</td>
                    <td>{{ $stdc->student->sex }}</td>
                    {{-- Remove Student --}}
                    <td>{!! Form::open(['route' => 'RemoveStudent', 'method' => 'DELETE', 
                    'style' => 'display:inline-block;']) !!}
                        {{Form::hidden('student_id', $stdc->student_id)}}
                        {{Form::hidden('group_class_id', $id)}}
                        <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Remove">   
                            <i class="ti-trash"></i>                              
                        </button>
                    {!! Form::close() !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>

</div>

<!-- Add Student -->
<div class="modal fade" id="add-student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Adding New Student</h4>
    </div>
    {!! Form::open(['route' => 'StoreStudent', 'method' => 'POST', 
                    'style' => 'display:inline-block;', 'files' => TRUE]) !!}
    @csrf
    <div class="modal-body">
            @include('_inc.admin.schoolmgmt.addStudentModal')
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{Form::submit('Add', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
</div>
</div>
</div>

@endsection

@section('scripts')

<script type="text/javascript" src="{{ asset('js/unique/crud_schoolmgmt.js') }}"></script>
<script type="text/javascript" src="{{ asset('css/extra/vendors/DataTables/datatables.min.js') }}"></script>

@endsection