@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/extra/vendors/DataTables/datatables.min.css') }}" />

@endsection

@section('title')

Bulk Registration

@endsection

@section('content')

<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title text-info">
            Recent Registered Users:<b><i> @if(isset($users)){{$users->count()}}@endif</i></b>
        </div>
        <div class="pull-right">
            {!! Form::open(['route' => 'BulkImport', 'method' => 'POST', 'style' => 'display:inline-block','files' => TRUE]) !!}
                @csrf
                <label>Bulk Register: </label>
                <input type="file" name="uploaded_file" />
                <button type="submit" value="Upload" class="btn btn-info" data-toggle="tooltip" data-original-title="Upload an the Excel FIle">
                    Upload <i class="ti-upload"></i>
                </button>    
            {!! Form::close() !!}  
            <span data-toggle="modal" data-target="#undoconfirmation">  
                <button class="btn btn-warning" data-toggle="tooltip" data-original-title="Delete Recent Registered Users">
                    Undo <i class="ti-back-left"></i>
                </button>
            </span> 
        </div>
    </div>
    <div class="ibox-body">
        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Picture</th>
                    <th>ID Number</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Email Address</th>
                    <th>Year Level</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Picture</th>
                    <th>ID Number</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Email Address</th>
                    <th>Year Level</th>
                </tr>
            </tfoot>
            <tbody>
                @if(isset($users))
                @foreach ($users as $user)
                    <tr>
                        <td><center>
                            <img src="/storage/user_img/{{ $user->picture }}" height="28" style="border-radius: 50%;" alt="User Default">
                        </center></td>
                        <td>{{ $user->idnumber }}</td>
                        <td>{{ $user->full_name }}</td>
                        <td>{{ $user->sex }}</td>
                        <td>{{ $user->email }}</td>
                        <td><center><b>{{ $user->yearLevel }}</b></center></td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

<!-- Undo Confirmation Modal -->
<div class="modal modal-danger fade" id="undoconfirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel">Undo Confirmation</h4>
    </div>
    {!! Form::open(['route' => 'BulkUndo', 'method' => 'GET']) !!}    
        @csrf
        <div class="modal-body">
            <p class="text-center">
                Are you sure you want to undo?
                <br>
                This will delete all users shown in the table
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-mute" data-dismiss="modal">No, Cancel</button>
            {{Form::submit('Yes, Delete', ['class' => 'btn btn-warning'])}}
        </div>
    {!! Form::close() !!}  
</div>
</div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">
    $('#undoconfirmation').on('show.bs.modal', function(event){
    var button = $(event.relatedTarget)
    var modal = $(this)
})
$(function() {
    $('#example-table').DataTable({
        pageLength: 10, 
    });
})
</script>
<script type="text/javascript" src="{{ asset('css/extra/vendors/DataTables/datatables.min.js') }}"></script>    

@endsection