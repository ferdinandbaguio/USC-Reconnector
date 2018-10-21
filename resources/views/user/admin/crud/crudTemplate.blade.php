@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/extra/vendors/DataTables/datatables.min.css') }}" />

@endsection

@section('content')

<div class="page-heading">

<h1 class="page-title">Title</h1>

@include('_inc.messages')

<div class="page-content fade-in-up">
<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title text-info">
            Number of Title:<b><i> @if(isset($infos)){{$infos->count()}}@endif</i></b>
        </div>
        <span data-toggle="modal" data-target="#create-title">
            <button class="btn btn-info" data-toggle="tooltip" data-original-title="Create A New Title">
                Add <i class="ti-plus"></i>                            
            </button>
        </span>
    </div>
    <div class="ibox-body">
    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Example</th>
                <th>Example</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Example</th>
                <th>Example</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($infos as $info)
            <tr>
                <td><center>
                    <img src="/storage/subject_img/{{ $info->picture }}" height="28" style="border-radius: 50%;" alt="Class Default">
                </center></td>
                <td>{{ $info->name }}</td>
                <td>

                    {{-- Show Button --}}
                    <span data-toggle="modal" data-target="#edit-title" data-id="{{ $info->id }}">
                        <button class="btn btn-xs" data-toggle="tooltip" data-original-title="Show">   
                            <i class="ti-eye"></i>                              
                        </button>
                    </span>

                    {{-- Edit Button --}}
                    <span data-toggle="modal" data-target="#edit-title" data-id="{{ $info->id }}">
                        <button class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="Edit">
                            <i class="ti-pencil"></i>                                
                        </button>
                    </span>

                    {{-- Delete Button --}}
                    <span data-toggle="modal" data-target="#delete-title" data-id="{{ $info->id }}">
                        <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete">   
                            <i class="ti-trash"></i>                              
                        </button>
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>

</div>

<!-- Show Modal -->
<div class="modal fade" id="show-title" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Showing Title</h4>
    </div>
    <div class="modal-body">
        @include('_inc.admin.MODAL')
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>
</div>
</div>

<!-- Create Modal -->
<div class="modal fade" id="create-title" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Creating New Title</h4>
    </div>
    {!! Form::open(['route' => 'Store', 'method' => 'POST', 
                    'style' => 'display:inline-block;', 'files' => TRUE]) !!}
    @csrf
    <div class="modal-body">
            @include('_inc.admin.MDOAL');
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
</div>
</div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="edit-title" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    {!! Form::open(['route' => 'Update', 'method' => 'PATCH', 
    'style' => 'display:inline-block;', 'files' => TRUE]) !!}
    @csrf
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ Form::file('picture') }}
        <h4 class="modal-title" id="myModalLabel">Editing Title</h4>
    </div>
    <div class="modal-body">
        @include('_inc.admin.MODAL')
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{Form::submit('Save Changes', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
</div>
</div>
</div>
    
<!-- Delete Modal -->
<div class="modal modal-danger fade" id="delete-title" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Title Confirmation</h4>
    </div>
    {!! Form::open(['route' => 'Delete', 'method' => 'DELETE', 
                    'style' => 'display:inline-block;']) !!}
    @csrf
    <div class="modal-body">
        <p class="text-center">
            Are you sure you want to delete this?
        </p>
        {{ Form::hidden('id', '', array('id' => 'id')) }}
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
        {{Form::submit('Yes, Delete', ['class' => 'btn btn-warning'])}}
    </div>
    {!! Form::close() !!}
</div>
</div>
</div>

@endsection

@section('scripts')

<script type="text/javascript" src="{{ asset('js/unique/crud_user.js') }}"></script>
<script type="text/javascript" src="{{ asset('css/extra/vendors/DataTables/datatables.min.js') }}"></script>

@endsection