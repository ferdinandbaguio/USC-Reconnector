@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/extra/vendors/DataTables/datatables.min.css') }}" />

@endsection

@section('content')

<div class="page-heading">

<h1 class="page-title">{{ $users[0]->userType }}s</h1>

@include('_inc.messages')

<div class="page-content fade-in-up">
<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title text-info">
            Number of {{ $users[0]->userType }}<b><i> {{ $users->count() }} </i></b>
        </div>
        <span data-toggle="modal" data-target="#create" data-type="{{ $users[0]->userType }}">
            <button class="btn btn-info" data-toggle="tooltip" data-original-title="Create A New User">
                Add <i class="ti-plus"></i>                            
            </button>
        </span>
    </div>
    <div class="ibox-body">
    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Picture</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>ID Number</th>
                <th>Sex</th>
                <th>Email Address</th>
                <th>Year Level</th>
                {{-- <th>Course</th>
                <th>Skills</th> --}}
                <th>Option</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Picture</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>ID Number</th>
                <th>Sex</th>
                <th>Email Address</th>
                <th>Year Level</th>
                {{-- <th>Course</th>
                <th>Skills</th> --}}
                <th>Option</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id}}</td>
                <td><img src="{{ asset($user->picture) }}" width="100" height="70" alt="User Default"></td>
                <td>{{ $user->firstName }}</td>
                <td>{{ $user->middleName }}</td>
                <td>{{ $user->lastName }}</td>
                <td>{{ $user->idnumber }}</td>
                <td>{{ $user->sex }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->yearLevel }}</td>
                {{-- <td>COURSE STATIC</td>
                <td>SKILL STATIC</td> --}}
                <td>
                {{-- Edit User --}}
                <span   data-toggle="modal"                     data-target="#edit-user"           
                        data-id="{{ $user->id }}"               data-status="{{ $user->userStatus}}"
                        data-fn="{{ $user->firstName }}"        data-mn="{{ $user->middleName }}"   
                        data-ln="{{ $user->lastName }}"         data-type="{{ $user->userType }}"   
                        data-idnum="{{ $user->idnumber }}"      data-sex="{{ $user->sex }}"         
                        data-email="{{ $user->email }}"         data-pic="{{ asset($user->picture) }}" 
                        data-desc="{{ $user->description }}"    data-year="{{ $user->yearLevel }}"
                        data-updt="{{ $user->updateStatus }}"   data-emply="{{ $user->employmentStatus }}"
                        data-pos="{{ $user->position }}"        data-dept="{{ $user->department_id }}" >
                    <button class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="Edit">
                        <i class="ti-pencil"></i>                                
                    </button>
                </span>

                {{-- Delete User --}}
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

<!-- Create Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Creating New {{ $users[0]->userType }}</h4>
    </div>
    {!! Form::open(['route' => 'StoreUser', 'method' => 'POST', 
                    'style' => 'display:inline-block;', 'files' => TRUE]) !!}
    @csrf
    <div class="modal-body">
            @include('_inc.admin.userCreateUserModal')
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
<div class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Editing {{ $users[0]->userType }}</h4>
    </div>
    {!! Form::open(['route' => 'UpdateUser', 'method' => 'PATCH', 
                    'style' => 'display:inline-block;', 'files' => TRUE]) !!}
    @csrf
    <div class="modal-body">
        @include('_inc.admin.userEditUserModal')
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
        <h4 class="modal-title text-center" id="myModalLabel">Delete {{ $users[0]->userType }} Confirmation</h4>
    </div>
    {!! Form::open(['route' => 'DeleteUser', 'method' => 'DELETE', 
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