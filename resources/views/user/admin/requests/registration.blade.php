@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/extra/vendors/DataTables/datatables.min.css') }}" />

@endsection

@section('content')

<div class="page-heading">

<h1 class="page-title">User Registration</h1>

@include('_inc.messages')

<div class="page-content fade-in-up">
<div class="ibox">
    <div class="ibox-head">
        @if($users[0]->userStatus == 'Denied')
            <div class="ibox-title text-muted">
                Denied Requests
            </div>
        @else
            <div class="ibox-title text-warning">
                Pending Requests
            </div>
        @endif
        {!! Form::open(['route' => ['registration.index','Filtering'], 'method' => 'GET', 'class' => 'form-inline']) !!} 
            {{ Form::select('status', ['Pending' => 'Pending', 'Denied' => 'Denied'], $users[0]->userStatus, 
            ['class' => 'form-control', 'style' => 'height: 30px;padding-top: 2px;']) }}
            &nbsp;
            {{ Form::submit('Change', ['class' => 'btn btn-primary', 'style' => 'display:inline-block;']) }}
        {!! Form::close() !!}
    </div>
    <div class="ibox-body">
    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Type</th>
                <th>Sex</th>
                <th>ID Number</th>
                <th>Email Address</th>
                <th>Option</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Type</th>
                <th>Sex</th>
                <th>ID Number</th>
                <th>Email Address</th>
                <th>Option</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id}}</td>
                <td>{{ $user->firstName }}</td>
                <td>{{ $user->middleName }}</td>
                <td>{{ $user->lastName }}</td>
                <td>{{ $user->userType }}</td>
                <td>{{ $user->idnumber }}</td>
                <td>{{ $user->sex }}</td>
                <td>{{ $user->email }}</td>
                <td>
                {!! Form::open(['route' => ['registration.update','Changing'], 'method' => 'PATCH', 
                                'style' => 'display:inline-block;']) !!}
                @csrf
                {{ Form::hidden('id', $user->id) }}
                
                @if($users[0]->userStatus == 'Denied')
                    {{-- Pending Request --}}
                    <button type="submit" name="action" value="Pending"
                        class="btn btn-warning btn-xs" data-toggle="tooltip" data-original-title="Pending">

                        <i class="ti-minus"></i>
                    </button>
                @else
                    {{-- Approve Request --}}
                    <button type="submit" name="action" value="Approved"
                        class="btn btn-success btn-xs" data-toggle="tooltip" data-original-title="Approve">

                        <i class="ti-check"></i>
                    </button>

                    {{-- Deny Request --}}
                    <button type="submit" name="action" value="Denied"
                        class="btn btn-muted btn-xs" data-toggle="tooltip" data-original-title="Deny">
                        
                        <i class="ti-close"></i>                                
                    </button>
                @endif

                {!! Form::close() !!}

                {{-- Edit Request --}}
                <span   data-toggle="modal"                 data-target="#edit"           
                        data-id="{{ $user->id }}"           data-status="{{ $user->userStatus}}"
                        data-fn="{{ $user->firstName }}"    data-mn="{{ $user->middleName }}"   
                        data-ln="{{ $user->lastName }}"     data-type="{{ $user->userType }}"   
                        data-idnum="{{ $user->idnumber }}"  data-sex="{{ $user->sex }}"         
                        data-email="{{ $user->email }}">
                    <button class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="Edit">
                        <i class="ti-pencil"></i>                                
                    </button>
                </span>

                {{-- Delete Request --}}
                <span data-toggle="modal" data-target="#delete" data-id="{{ $user->id }}">
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

<!-- Edit Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Editing User Request #<span id='id'></span></h4>
    </div>
    {!! Form::open(['route' => ['registration.update','Updating'], 'method' => 'PATCH', 
                    'style' => 'display:inline-block;']) !!}
    @csrf
    <div class="modal-body">
            @include('_inc.admin.userEditRequestModal')
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
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation #<span id='id'></span></h4>
    </div>
    {!! Form::open(['route' => ['registration.destroy','Destroying'], 'method' => 'DELETE', 
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

<script type="text/javascript" src="{{ asset('js/unique/userRequestEdit.js') }}"></script>
<script type="text/javascript" src="{{ asset('css/extra/vendors/DataTables/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/unique/userRequestDeleteAndDataTablesPagination.js') }}"></script>

@endsection