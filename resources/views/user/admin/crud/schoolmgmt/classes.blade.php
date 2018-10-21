@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/extra/vendors/DataTables/datatables.min.css') }}" />

@endsection

@section('content')

<div class="page-heading">

<h1 class="page-title">Classes</h1>

@include('_inc.messages')

<div class="page-content fade-in-up">
<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title text-info">
            Number of Classes:<b><i> @if(isset($grpclasses)){{$grpclasses->count()}}@endif</i></b>
        </div>
        <span data-toggle="modal" data-target="#create-class">
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
                <th>Subject</th>
                <th>Schedule</th>
                <th>Teacher</th>
                <th>Status</th>
                <th>Option</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Picture</th>
                <th>Subject</th>
                <th>Schedule</th>
                <th>Teacher</th>
                <th>Status</th>
                <th>Option</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($grpclasses as $gc)
            <tr>
                <td><center>
                    <img src="/storage/subject_img/{{ $gc->subject->picture }}" height="28" style="border-radius: 50%;" alt="Class Default">
                </center></td>
                <td>{{ $gc->subject['name'] }}</td>
                <td>
                    @foreach($gc->schedules as $sched)
                        {{ $sched->schedule['day'] }}
                        {{ $sched->schedule['class_start'] }}
                        {{ $sched->schedule['class_end'] }}<br>
                    @endforeach
                </td>
                <td>
                    <img src="/storage/user_img/{{ $gc->teacher->picture }}" height="28" style="border-radius: 50%;" alt="Class Default">
                    {{ $gc->teacher->full_name }}
                </td>
                <td>{{ $gc->status }}</td>
                <td>

                    {{-- Show Button --}}
                    <span data-toggle="modal" data-target="#show-class"
                    data-id="{{ $gc->id }}"  data-status="{{ $gc->status }}" 
                    data-tname="{{ $gc->teacher->full_name }}"  data-tidnum="{{ $gc->teacher->idnumber }}" 
                    data-tsex="{{ $gc->teacher->sex }}"  data-temail="{{ $gc->teacher->email }}" 
                    data-tpos="{{ $gc->teacher->position }}"  data-tdesc="{{ $gc->teacher->description }}"
                    data-scode="{{ $gc->subject->code }}"  data-sname="{{ $gc->subject->name }}"
                    data-sdesc="{{ $gc->subject->description }}" 
                    <?php $i=1;?>
                    @foreach($gc->schedules as $sched)
                        data-year<?php echo $i; ?>="{{ $sched->schedule->semester->year['name'] }}"  
                        data-sem<?php echo $i; ?>="{{ $sched->schedule->semester['name'] }}"
                        data-cday<?php echo $i; ?>="{{ $sched->schedule['day'] }}"  
                        data-cstart<?php echo $i; ?>="{{ $sched->schedule['class_start'] }}"
                        data-cend<?php echo $i; ?>="{{ $sched->schedule['class_end'] }}"  <?php $i++;?>
                    @endforeach
                    >
                        <button class="btn btn-xs" data-toggle="tooltip" data-original-title="Show">   
                            <i class="ti-eye"></i>                              
                        </button>
                    </span>

                    {{-- Edit Button --}}
                    <span data-toggle="modal" data-target="#edit-class"
                    data-id="{{ $gc->id }}"  data-status="{{ $gc->status }}" 
                    data-tid="{{ $gc->teacher->id }}" data-sid="{{ $gc->subject->id }}"
                    <?php $i=1;?>
                    @foreach($gc->schedules as $sched)
                        data-gsid<?php echo $i; ?>="{{ $sched->schedule['id'] }}" 
                        data-gsday<?php echo $i; ?>="{{ $sched->schedule['day'] }}" 
                        data-gsstart<?php echo $i; ?>="{{ $sched->schedule['class_start'] }}" 
                        data-gsend<?php echo $i; ?>="{{ $sched->schedule['class_end'] }}" 
                        data-gssem<?php echo $i; ?>="{{ $sched->schedule['semester_id'] }}" 
                        <?php $i++;?>
                    @endforeach
                    >
                        <button class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="Edit">
                            <i class="ti-pencil"></i>                                
                        </button>
                    </span>

                    {{-- Delete Button --}}
                    <span data-toggle="modal" data-target="#delete-class" data-id="{{ $gc->id }}">
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
<div class="modal fade" id="show-class" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Showing Class</h4>
    </div>
    <div class="modal-body">
        @include('_inc.admin.schoolmgmt.showClassModal')
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>
</div>
</div>

<!-- Create Modal -->
<div class="modal fade" id="create-class" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Creating New Class</h4>
    </div>
    {!! Form::open(['route' => 'StoreClass', 'method' => 'POST', 
                    'style' => 'display:inline-block;', 'files' => TRUE]) !!}
    @csrf
    <div class="modal-body">
            @include('_inc.admin.schoolmgmt.createClassModal')
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
<div class="modal fade" id="edit-class" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    {!! Form::open(['route' => 'UpdateClass', 'method' => 'PATCH', 'style' => 'display:inline-block;']) !!}
    @csrf
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Editing Class</h4>
    </div>
    <div class="modal-body">
        @include('_inc.admin.schoolmgmt.editClassModal')
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
<div class="modal modal-danger fade" id="delete-class" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Class Confirmation</h4>
    </div>
    {!! Form::open(['route' => 'DeleteClass', 'method' => 'DELETE', 'style' => 'display:inline-block;']) !!}
    @csrf
    <div class="modal-body">
        <p class="text-center">
            Are you sure you want to delete this?
        </p>
        {{ Form::hidden('id', '', ['id' => 'id']) }}
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

<script type="text/javascript" src="{{ asset('js/unique/crud_schoolmgmt.js') }}"></script>
<script type="text/javascript" src="{{ asset('css/extra/vendors/DataTables/datatables.min.js') }}"></script>

@endsection