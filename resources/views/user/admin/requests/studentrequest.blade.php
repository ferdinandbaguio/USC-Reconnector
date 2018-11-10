@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/extra/vendors/DataTables/datatables.min.css') }}" />

@endsection

@section('title')

Student Requests

@endsection

@section('content')

<div class="ibox">
    <div class="ibox-head">
        Request: {{$student_classes->count()}}
    </div>
    <div class="ibox-body">
    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Room</th>
                <th>Student Name</th>
                <th>Option</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Subject</th>
                <th>Room</th>
                <th>Student Name</th>
                <th>Option</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($student_classes as $stc)
            <tr>
                <td>{{ $stc->group_class->subject->code }}: {{ $stc->group_class->subject->name }}</td>
                <td>{{ $stc->group_class->room }}: {{ $stc->group_class->status }}</td>
                <td>{{ $stc->student->idnumber }}: {{ $stc->student->full_name }}</td>
                {{-- OPTIONS --}}
                <td>
                    {!! Form::open(['route' => ['studentrequest.update', 'Updating'], 'method' => 'PATCH', 
                    'style' => 'display:inline-block;']) !!}
                        {{Form::hidden('id', $stc->id) }}
                        <button type="submit" name="action" value="Approved"
                            class="btn btn-success btn-xs" data-toggle="tooltip" data-original-title="Approve">
                            <i class="ti-check"></i>
                        </button>
                    {!! Form::close() !!}

                    {{-- Delete Request --}}
                    <span data-toggle="modal" data-target="#delete" data-id="{{ $stc->id }}">
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
    {!! Form::open(['route' => ['studentrequest.destroy','Destroying'], 'method' => 'DELETE', 
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

<script>
    $('#delete').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var modal = $(this)
    
        modal.find('.modal-body #id').val(id);
    })
</script>
<script>
    $(function() {
        $('#example-table').DataTable({
            pageLength: 10, 
        });
    })
</script>
<script type="text/javascript" src="{{ asset('css/extra/vendors/DataTables/datatables.min.js') }}"></script>

@endsection