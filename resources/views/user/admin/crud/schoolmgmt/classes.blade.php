@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/extra/vendors/DataTables/datatables.min.css') }}" />

@endsection

@section('title')

Classes

@endsection

@section('content')

{{-- Classes --}}
<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title text-info">
            Number of Classes:<b><i> @if(isset($grpclasses)){{$grpclasses->count()}}@endif</i></b>
        </div>
        <span data-toggle="modal" data-target="#create-class">
            <button class="btn btn-info" data-toggle="tooltip" data-original-title="Create A New Class">
                Add Class <i class="ti-plus"></i>                            
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
                <th>Room</th>
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
                <th>Room</th>
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
                <td>{{ $gc->room }}</td>
                <td>{{ $gc->status }}</td>
                <td>

                    {{-- Show Button --}}
                        <span data-toggle="modal" data-target="#show-class"
                        data-id="{{ $gc->id }}"  data-status="{{ $gc->status }}" 
                        data-tname="{{ $gc->teacher->full_name }}"  data-tidnum="{{ $gc->teacher->idnumber }}" 
                        data-tsex="{{ $gc->teacher->sex }}"  data-temail="{{ $gc->teacher->email }}" 
                        data-tpos="{{ $gc->teacher->position }}"  data-tdesc="{{ $gc->teacher->description }}"
                        data-scode="{{ $gc->subject->code }}"  data-sname="{{ $gc->subject->name }}"
                        data-sdesc="{{ $gc->subject->description }}" data-room="{{ $gc->room }}" 
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

                    {{-- Show Student Button --}}
                        {!! Form::open(['route' => 'StudentClass', 'method' => 'POST', 'style' => 'display:inline-block;']) !!}
                            @csrf
                            {{Form::hidden('id', $gc->id)}}
                            <button class="btn btn-primary btn-xs" data-toggle="tooltip" data-original-title="Show Students">
                                <i class="ti-user"></i>        
                            </button>
                        {!! Form::close() !!}
                    {{-- Edit Button --}}
                        <span data-toggle="modal" data-target="#edit-class"
                        data-id="{{ $gc->id }}"  data-status="{{ $gc->status }}" data-room="{{ $gc->room }}"
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

<div class="row">
    {{-- Subjects --}}
    <div class="col-md-4">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title text-info">
                    Subjects:<b><i> @if(isset($subjects)){{$subjects->count()}}@endif</i></b>
                </div>
                <span data-toggle="modal" data-target="#create-subject">
                    <button class="btn btn-info" data-toggle="tooltip" data-original-title="Create A New Subject">
                        Add Subject <i class="ti-plus"></i>                            
                    </button>
                </span>
            </div>
            <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Picture</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Picture</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Option</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($subjects as $subj)
                    <tr>
                        <td><center>
                            <img src="/storage/subject_img/{{ $subj->picture }}" height="28" style="border-radius: 50%;" alt="Class Default">
                        </center></td>
                        <td>{{ $subj->code }}</td>
                        <td>{{ $subj->name }}</td>
                        <td>
                            {{-- Edit Button --}}
                                <span data-toggle="modal" data-target="#edit-subject"
                                data-id="{{ $subj->id }}" data-code="{{ $subj->code }}"
                                data-name="{{ $subj->name }}" data-desc="{{ $subj->description }}">
                                    <button class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="Edit">
                                        <i class="ti-pencil"></i>                                
                                    </button>
                                </span>

                            {{-- Delete Button --}}
                                <span data-toggle="modal" data-target="#delete-subject" data-id="{{ $subj->id }}">
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
    {{-- Semesters --}}
    <div class="col-md-4">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title text-info">
                    Semesters:<b><i> @if(isset($semesters)){{$semesters->count()}}@endif</i></b>
                </div>
                <span data-toggle="modal" data-target="#create-semester">
                    <button class="btn btn-info" data-toggle="tooltip" data-original-title="Create A New Semester">
                        Add Semester <i class="ti-plus"></i>                            
                    </button>
                </span>
            </div>
            <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Option</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($semesters as $sem)
                    <tr>
                        <td>{{ $sem->name }}</td>
                        <td>{{ $sem->year->name }}</td>
                        <td>

                            {{-- Edit Button --}}
                                <span data-toggle="modal" data-target="#edit-semester"
                                data-id="{{ $sem->id }}"  data-name="{{ $sem->name }}" data-year_id="{{ $sem->year_id }}">
                                    <button class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="Edit">
                                        <i class="ti-pencil"></i>                                
                                    </button>
                                </span>

                            {{-- Delete Button --}}
                                <span data-toggle="modal" data-target="#delete-semester" data-id="{{ $sem->id }}">
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
    {{-- Year --}}
    <div class="col-md-4">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title text-info">
                   Years:<b><i> @if(isset($years)){{$years->count()}}@endif</i></b>
                </div>
                <span data-toggle="modal" data-target="#create-year">
                    <button class="btn btn-info" data-toggle="tooltip" data-original-title="Create A New Year">
                        Add Year <i class="ti-plus"></i>                            
                    </button>
                </span>
            </div>
            <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Option</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($years as $year)
                    <tr>
                        <td>{{ $year->name }}</td>
                        <td>
    
                            {{-- Edit Button --}}
                                <span data-toggle="modal" data-target="#edit-year"
                                data-id="{{ $year->id }}" data-name="{{ $year->name }}">
                                    <button class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="Edit">
                                        <i class="ti-pencil"></i>                                
                                    </button>
                                </span>
    
                            {{-- Delete Button --}}
                                <span data-toggle="modal" data-target="#delete-year" data-id="{{ $year->id }}">
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


    
{{-- Modals --}}
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

    <!-- Create Subject Modal -->
    <div class="modal fade" id="create-subject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Creating New Subject</h4>
        </div>
        {!! Form::open(['route' => 'StoreSubject', 'method' => 'POST', 
                        'style' => 'display:inline-block;', 'files' => TRUE]) !!}
        @csrf
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4 form-group">
                    <b>{{Form::label('pic', 'Subject Picture')}}</b>
                    {{ Form::file('picture') }}
                </div>
            
                <div class="col-md-4 form-group">
                    <b>{{Form::label('code', 'Code')}}</b>
                    {{Form::text('code', '', ['class' => 'form-control input-rounded text-center', 
                    'placeholder' => 'Subject Code'])}}
                </div>
            
                <div class="col-md-4 form-group">
                    <b>{{Form::label('name', 'Name')}}</b>
                    {{Form::text('name', '', ['class' => 'form-control input-rounded text-center', 
                    'placeholder' => 'Subject Name', 'required'])}}
                </div>
            </div>
            <b>{{Form::label('description', 'Description')}}</b>
            {{Form::textarea('description', '', ['class' => 'form-control input-rounded text-center', 
            'placeholder' => 'Type Subject Description', 'required', 'rows' => 3])}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}
    </div>
    </div>
    </div>

    <!-- Create Semester Modal -->
    <div class="modal fade" id="create-semester" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="m
            odal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Creating New Semester</h4>
        </div>
        {!! Form::open(['route' => 'StoreSemester', 'method' => 'POST', 
                        'style' => 'display:inline-block;']) !!}
        @csrf
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6 form-group">
                    <b>{{Form::label('name', 'Name')}}</b>
                    {{Form::text('name', '', ['class' => 'form-control input-rounded', 
                    'placeholder' => 'Subject Name', 'required'])}}
                </div>
                <div class="col-md-6 form-group">
                    <b>{{Form::label('name', 'Years')}}</b>
                    <select class = "form-control input-rounded text-center" name="year_id">
                        <option disabled selected hidden>Choose Year</option>
                        @foreach ($years as $year) 
                            <option value={{$year->id}}>{{$year->name}}</option>
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

    <!-- Create Year Modal -->
    <div class="modal fade" id="create-year" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Creating New Year</h4>
        </div>
        {!! Form::open(['route' => 'StoreYear', 'method' => 'POST', 
                        'style' => 'display:inline-block;']) !!}
        @csrf
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12 form-group">
                    <b>{{Form::label('name', 'Name')}}</b>
                    {{Form::text('name', '', ['class' => 'form-control input-rounded', 
                    'placeholder' => 'Year Name', 'required'])}}
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

<!-- Edit Subject Modal -->
<div class="modal fade" id="edit-subject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Editing New Subject</h4>
    </div>
    {!! Form::open(['route' => 'UpdateSubject', 'method' => 'PATCH', 
                    'style' => 'display:inline-block;', 'files' => TRUE]) !!}
    @csrf
    <div class="modal-body">
        {{Form::hidden('id', null, ['id' => 'id'])}}
        <div class="row">
            <div class="col-md-4 form-group">
                <b>{{Form::label('pic', 'Subject Picture')}}</b>
                {{ Form::file('picture') }}
            </div>
        
            <div class="col-md-4 form-group">
                <b>{{Form::label('code', 'Code')}}</b>
                {{Form::text('code', '', ['class' => 'form-control input-rounded text-center', 
                'placeholder' => 'Subject Code', 'id' => 'code'])}}
            </div>
        
            <div class="col-md-4 form-group">
                <b>{{Form::label('name', 'Name')}}</b>
                {{Form::text('name', '', ['class' => 'form-control input-rounded text-center', 
                'placeholder' => 'Subject Name', 'required', 'id' => 'name'])}}
            </div>
        </div>
        <b>{{Form::label('description', 'Description')}}</b>
        {{Form::textarea('description', '', ['class' => 'form-control input-rounded text-center', 
        'placeholder' => 'Type Subject Description', 'required', 'rows' => 3, 'id' => 'desc'])}}
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
</div>
</div>
</div>

<!-- Edit Semester Modal -->
<div class="modal fade" id="edit-semester" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="m
        odal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Editing New Semester</h4>
    </div>
    {!! Form::open(['route' => 'UpdateSemester', 'method' => 'PATCH', 
                    'style' => 'display:inline-block;']) !!}
    @csrf
    <div class="modal-body">
        {{Form::hidden('id', null, ['id' => 'id'])}}
        <div class="row">
            <div class="col-md-6 form-group">
                <b>{{Form::label('name', 'Name')}}</b>
                {{Form::text('name', '', ['class' => 'form-control input-rounded', 
                'placeholder' => 'Subject Name', 'required'])}}
            </div>
            <div class="col-md-6 form-group">
                <b>{{Form::label('name', 'Years')}}</b>
                <select required class = "form-control input-rounded text-center" name="year_id">
                    @foreach ($years as $year) 
                        <option value={{$year->id}}>{{$year->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
</div>
</div>
</div>

<!-- Edit Year Modal -->
<div class="modal fade" id="edit-year" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="m
        odal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Editing New Year</h4>
    </div>
    {!! Form::open(['route' => 'UpdateYear', 'method' => 'PATCH', 
                    'style' => 'display:inline-block;']) !!}
    @csrf
    <div class="modal-body">
        {{Form::hidden('id', null, ['id' => 'id'])}}
        <div class="row">
            <div class="col-md-12 form-group">
                <b>{{Form::label('name', 'Name')}}</b>
                {{Form::text('name', '', ['class' => 'form-control input-rounded', 
                'placeholder' => 'Year Name', 'required'])}}
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
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

<!-- Delete Subject Modal -->
<div class="modal modal-danger fade" id="delete-subject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Subject Confirmation</h4>
    </div>
    {!! Form::open(['route' => 'DeleteSubject', 'method' => 'DELETE', 'style' => 'display:inline-block;']) !!}
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

<!-- Delete Semester Modal -->
<div class="modal modal-danger fade" id="delete-semester" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Semester Confirmation</h4>
    </div>
    {!! Form::open(['route' => 'DeleteSemester', 'method' => 'DELETE', 'style' => 'display:inline-block;']) !!}
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

<!-- Delete Year Modal -->
<div class="modal modal-danger fade" id="delete-year" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Year Confirmation</h4>
    </div>
    {!! Form::open(['route' => 'DeleteYear', 'method' => 'DELETE', 'style' => 'display:inline-block;']) !!}
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

<script type="text/javascript" src="{{ asset('js/unique/crud_class.js') }}"></script>
<script type="text/javascript" src="{{ asset('css/extra/vendors/DataTables/datatables.min.js') }}"></script>

@endsection