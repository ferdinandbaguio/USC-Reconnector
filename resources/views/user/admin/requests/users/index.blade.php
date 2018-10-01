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
        <div class="ibox-title text-warning">Pending Requests</div>
    </div>
    <div class="ibox-body">
    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Sex</th>
                <th>ID Number</th>
                <th>Email Address</th>
                <th>Option</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
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
                <td>{{ $user->userType }}</td>
                <td>{{ $user->firstName }}</td>
                <td>{{ $user->middleName }}</td>
                <td>{{ $user->lastName }}</td>
                <td>{{ $user->sex }}</td>
                <td>{{ $user->idnumber }}</td>
                <td>{{ $user->email }}</td>
                <td>
                {!! Form::open(['url' => '/users/registration/'.$user->id, 'method' => 'PATCH', 
                                'style' => 'display:inline-block;']) !!}
                @csrf
                <button type="submit" name="action" value="Approved"
                    class="btn btn-success btn-xs m-r-5" data-toggle="tooltip" data-original-title="Approve">

                    <i class="ti-check"></i>
                </button>
                <button type="submit" name="action" value="Denied"
                    class="btn btn-warning btn-xs" data-toggle="tooltip" data-original-title="Deny">
                    
                    <i class="ti-close"></i>                                
                </button>
                {!! Form::close() !!}
                {!! Form::open(['url' => '/users/registration/'.$user->id, 'method' => 'DELETE', 
                                'style' => 'display:inline-block;']) !!}
                @csrf
                <button type="submit" class="btn btn-danger btn-xs"
                        data-toggle="tooltip" data-original-title="Delete">

                    <i class="ti-trash"></i>                                
                </button>
                {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>

</div>

@endsection

@section('scripts')

<script type="text/javascript" src="{{ asset('css/extra/vendors/DataTables/datatables.min.js') }}"></script>

<script type="text/javascript">
    $(function() {
        $('#example-table').DataTable({
            pageLength: 10,
        });
    })
</script>

@endsection