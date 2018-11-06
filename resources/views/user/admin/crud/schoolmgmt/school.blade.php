@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/extra/vendors/DataTables/datatables.min.css') }}" />

@endsection

@section('title')

School | Department | Course

@endsection

@section('content')

<div class="row">
    {{-- Schools --}}
    <div class="col-lg-4">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title text-info">
                Number of Schools:<b><i> @if(isset($schools)){{$schools->count()}}@endif</i></b>
            </div>
            <span data-toggle="modal" data-target="#create-school">
                <button class="btn btn-info" data-toggle="tooltip" data-original-title="Create A New School">
                    Add <i class="ti-plus"></i>                            
                </button>
            </span>
        </div>
        <div class="ibox-body">
        <table class="table table-striped table-bordered table-hover" id="example-table1" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Options</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($schools as $school)
                <tr>
                    <td>{{ $school->code }}</td>
                    <td>{{ $school->name }}</td>
                    <td>
                        {{-- Show Button --}}
                        <span data-toggle="modal" data-target="#show-school" data-scode="{{ $school->code }}"
                        data-sname="{{ $school->name }}" data-sdesc="{{ $school->description }}">
                            <button class="btn btn-xs" data-toggle="tooltip" data-original-title="Show">   
                                <i class="ti-eye"></i>                              
                            </button>
                        </span>

                        {{-- Edit Button --}}
                        <span data-toggle="modal" data-target="#edit-school" 
                        data-sid="{{ $school->id }}" data-scode="{{ $school->code }}"
                        data-sname="{{ $school->name }}" data-sdesc="{{ $school->description }}">
                            <button class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="Edit">
                                <i class="ti-pencil"></i>                                
                            </button>
                        </span>

                        {{-- Delete Button --}}
                        <span data-toggle="modal" data-target="#delete-school" data-sid="{{ $school->id }}">
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
    {{-- Departments --}}
    <div class="col-lg-4">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title text-info">
                Number of Departments:<b><i> @if(isset($departments)){{$departments->count()}}@endif</i></b>
            </div>
            <span data-toggle="modal" data-target="#create-department">
                <button class="btn btn-info" data-toggle="tooltip" data-original-title="Create A New Department">
                    Add <i class="ti-plus"></i>                            
                </button>
            </span>
        </div>
        <div class="ibox-body">
        <table class="table table-striped table-bordered table-hover" id="example-table2" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Options</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($departments as $department)
                <tr>
                    <td>{{ $department->code }}</td>
                    <td>{{ $department->name }}</td>
                    <td>

                        {{-- Show Button --}}
                        <span data-toggle="modal" data-target="#show-department" data-dcode="{{ $department->code }}"
                        data-dscode="{{ $department->school->code }}" data-dsname="{{ $department->school->name }}"
                        data-dname="{{ $department->name }}" data-ddesc="{{ $department->description }}">
                            <button class="btn btn-xs" data-toggle="tooltip" data-original-title="Show">   
                                <i class="ti-eye"></i>                              
                            </button>
                        </span>

                        {{-- Edit Button --}}
                        <span data-toggle="modal" data-target="#edit-department" data-did="{{ $department->id }}" 
                        data-dsid="{{ $department->school->id }}" data-dcode="{{ $department->code }}"
                        data-dscode="{{ $department->school->code }}" data-dsname="{{ $department->school->name }}"
                        data-dname="{{ $department->name }}" data-ddesc="{{ $department->description }}">
                            <button class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="Edit">
                                <i class="ti-pencil"></i>                                
                            </button>
                        </span>

                        {{-- Delete Button --}}
                        <span data-toggle="modal" data-target="#delete-department" data-did="{{ $department->id }}">
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
    {{-- Courses --}}
    <div class="col-lg-4">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title text-info">
                Number of Courses:<b><i> @if(isset($courses)){{$courses->count()}}@endif</i></b>
            </div>
            <span data-toggle="modal" data-target="#create-course">
                <button class="btn btn-info" data-toggle="tooltip" data-original-title="Create A New Course">
                    Add <i class="ti-plus"></i>                            
                </button>
            </span>
        </div>
        <div class="ibox-body">
        <table class="table table-striped table-bordered table-hover" id="example-table3" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Options</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->code }}</td>
                    <td>{{ $course->name }}</td>
                    <td>

                        {{-- Show Button --}}
                        <span data-toggle="modal" data-target="#show-course" data-ccode="{{ $course->code }}"
                        data-cdcode="{{ $course->department->code }}" data-cdname="{{ $course->department->name }}" 
                        data-cname="{{ $course->name }}" data-cdesc="{{ $course->description }}">
                            <button class="btn btn-xs" data-toggle="tooltip" data-original-title="Show">   
                                <i class="ti-eye"></i>                              
                            </button>
                        </span>

                        {{-- Edit Button --}}
                        <span data-toggle="modal" data-target="#edit-course" data-cid="{{ $course->id }}" 
                        data-ccode="{{ $course->code }}" data-cdid="{{ $course->department->id }}" 
                        data-cname="{{ $course->name }}" data-cdesc="{{ $course->description }}">
                            <button class="btn btn-info btn-xs" data-toggle="tooltip" data-original-title="Edit">
                                <i class="ti-pencil"></i>                                
                            </button>
                        </span>

                        {{-- Delete Button --}}
                        <span data-toggle="modal" data-target="#delete-course" data-cid="{{ $course->id }}">
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
    <!-- Show School -->
        <div class="modal fade" id="show-school" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Showing School</h4>
            </div>
            <div class="modal-body">
                @include('_inc.admin.schoolmgmt.showSchoolModal')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
        </div>
    <!-- Show Department -->
        <div class="modal fade" id="show-department" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Showing Department</h4>
            </div>
            <div class="modal-body">
                @include('_inc.admin.schoolmgmt.showDepartmentModal')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
        </div>
    <!-- Show Course -->
        <div class="modal fade" id="show-course" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Showing Course</h4>
            </div>
            <div class="modal-body">
                @include('_inc.admin.schoolmgmt.showCourseModal')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
        </div>
    <!-- Create School -->
        <div class="modal fade" id="create-school" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Creating New School</h4>
            </div>
            {!! Form::open(['route' => 'StoreSchool', 'method' => 'POST', 'style' => 'display:inline-block;']) !!}
            @csrf
            <div class="modal-body">
                    @include('_inc.admin.schoolmgmt.createSchoolModal');
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
        </div>
        </div>
    <!-- Create Department -->
        <div class="modal fade" id="create-department" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Creating New Department</h4>
            </div>
            {!! Form::open(['route' => 'StoreDepartment', 'method' => 'POST', 'style' => 'display:inline-block;']) !!}
            @csrf
            <div class="modal-body">
                    @include('_inc.admin.schoolmgmt.createDepartmentModal');
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
        </div>
        </div>
    <!-- Create Course -->
        <div class="modal fade" id="create-course" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Creating New Course</h4>
            </div>
            {!! Form::open(['route' => 'StoreCourse', 'method' => 'POST', 'style' => 'display:inline-block;']) !!}
            @csrf
            <div class="modal-body">
                    @include('_inc.admin.schoolmgmt.createCourseModal');
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
        </div>
        </div>
    <!-- Edit School -->
        <div class="modal fade" id="edit-school" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['route' => 'UpdateSchool', 'method' => 'PATCH', 'style' => 'display:inline-block;']) !!}
            @csrf
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Editing School</h4>
            </div>
            <div class="modal-body">
                @include('_inc.admin.schoolmgmt.editSchoolModal')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{Form::submit('Save Changes', ['class' => 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
        </div>
        </div>
    <!-- Edit Department -->
        <div class="modal fade" id="edit-department" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['route' => 'UpdateDepartment', 'method' => 'PATCH', 'style' => 'display:inline-block;']) !!}
            @csrf
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Editing Department</h4>
            </div>
            <div class="modal-body">
                @include('_inc.admin.schoolmgmt.editDepartmentModal')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{Form::submit('Save Changes', ['class' => 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
        </div>
        </div>
    <!-- Edit Course -->
        <div class="modal fade" id="edit-course" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['route' => 'UpdateCourse', 'method' => 'PATCH', 'style' => 'display:inline-block;']) !!}
            @csrf
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Editing Course</h4>
            </div>
            <div class="modal-body">
                @include('_inc.admin.schoolmgmt.editCourseModal')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{Form::submit('Save Changes', ['class' => 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
        </div>
        </div>
    <!-- Delete School -->
        <div class="modal modal-danger fade" id="delete-school" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center" id="myModalLabel">Delete School Confirmation</h4>
            </div>
            {!! Form::open(['route' => 'DeleteSchool', 'method' => 'DELETE', 'style' => 'display:inline-block;']) !!}
            @csrf
            <div class="modal-body">
                <p class="text-center">
                    Are you sure you want to delete this?
                </p>
                {{ Form::hidden('id', null, ['id' => 'sid']) }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                {{Form::submit('Yes, Delete', ['class' => 'btn btn-warning'])}}
            </div>
            {!! Form::close() !!}
        </div>
        </div>
        </div>
    <!-- Delete Department -->
        <div class="modal modal-danger fade" id="delete-department" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center" id="myModalLabel">Delete Department Confirmation</h4>
            </div>
            {!! Form::open(['route' => 'DeleteDepartment', 'method' => 'DELETE', 'style' => 'display:inline-block;']) !!}
            @csrf
            <div class="modal-body">
                <p class="text-center">
                    Are you sure you want to delete this?
                </p>
                {{ Form::hidden('id', null, ['id' => 'did']) }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                {{Form::submit('Yes, Delete', ['class' => 'btn btn-warning'])}}
            </div>
            {!! Form::close() !!}
        </div>
        </div>
        </div>
    <!-- Delete Course -->
        <div class="modal modal-danger fade" id="delete-course" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center" id="myModalLabel">Delete Course Confirmation</h4>
            </div>
            {!! Form::open(['route' => 'DeleteCourse', 'method' => 'DELETE', 'style' => 'display:inline-block;']) !!}
            @csrf
            <div class="modal-body">
                <p class="text-center">
                    Are you sure you want to delete this?
                </p>
                {{ Form::hidden('id', null, ['id' => 'cid']) }}
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