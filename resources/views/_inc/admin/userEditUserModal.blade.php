{{ Form::hidden('id', null, array('id' => 'id')) }}

<center>

{{-- ID Number, User Type, ID --}}
<div class="row">
    {{-- <div class="col-md-4 form-group">
        <b>{{Form::label('pic', 'Profile Picture')}}</b>
        {{ Form::file('picture') }}
    </div> --}}

    <div class="col-md-4 form-group">
        <b>{{Form::label('idnumber', 'ID Number')}}</b>
        {{Form::number('idnumber', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'idnum', 'placeholder' => 'Input ID Number', 'required'])}}
    </div>

    <div class="col-md-5 form-group">
        <b>{{Form::label('userType', 'User Type')}}</b>
        {{Form::select('userType', ['Student'       => 'Student', 
                                    'Alumnus'       => 'Alumnus',
                                    'Teacher'       => 'Teacher',
                                    'Admin'         => 'Admin',
                                    'Coordinator'   => 'Coordinator',
                                    'Chair'         => 'Chair'], null, 
                                    ['class' => 'form-control input-rounded', 
                                    'placeholder' => 'Input User Type', 
                                    'id' => 'type', 'required'])}}</div>

    <div class="col-md-3 form-group">
        <b>{{ $users[0]->userType }} ID</b>
        {{ Form::text('id', null, ['class' => 'form-control input-rounded text-center',
        'id' => 'id', 'disabled']) }}
    </div>
</div>

{{-- First, Middle, and Last Name --}}
<div class="row">
    <div class="col-md-4 form-group">
        <b>{{Form::label('firstName', 'First Name')}}</b>
        {{Form::text('firstName', '', ['class' => 'form-control input-rounded text-center', 
        'placeholder' => 'Input First Name', 'id' => 'fn', 'required'])}}
    </div>

    <div class="col-md-4 form-group">
        <b>{{Form::label('middleName', 'Middle Name')}}</b>
        {{Form::text('middleName', '', ['class' => 'form-control input-rounded text-center', 
        'placeholder' => 'Input Middle Name', 'id' => 'mn'])}}
    </div>

    <div class="col-md-4 form-group">
        <b>{{Form::label('lastName', 'Last Name')}}</b>
        {{Form::text('lastName', '', ['class' => 'form-control input-rounded text-center', 
        'placeholder' => 'Input Last Name', 'id' => 'ln', 'required'])}}
    </div>
</div>

{{-- Email Address and Sex --}}
<div class="row">
    <div class="col-md-8 form-group">
        <b>{{Form::label('email', 'Email Address')}}</b>
        <div class="input-group">
            {{Form::email('email', '', ['class' => 'form-control input-rounded text-center',
            'id' => 'email', 'placeholder' => 'Input Email Address', 'required'])}}
        </div>
    </div>

    <div class="col-md-4 form-group">
        <b>{{Form::label('sex', 'Sex')}}</b>
        <div class="input-group">
            {{Form::select('sex', ['Male' => "Male", 'Female' => 'Female'], null, 
            ['class' => 'form-control input-rounded text-center', 'id' => 'sex', 
            'placeholder' => 'Input Sex', 'required'])}}
        </div>
    </div>
</div>

{{-- User Status, Course Code, Year Level --}}
<div class="row">
    <div class="col-md-4 form-group">
        <b>{{Form::label('userStatus', 'User Status')}}</b>
        {{ Form::select('userStatus', [ 'Approved' => 'Approved', 
                                        'Pending' => 'Pending', 
                                        'Denied' => 'Denied'], null, 
        ['class' => 'form-control input-rounded text-center', 'id' => 'status', 'required']) }}
    </div>  

    <div class="col-md-4 form-group">
        <b>{{Form::label('course_id', 'Course Code')}}</b>
        <select name="course_id" id="cid" class = "form-control input-rounded text-center">
            @foreach ($courses as $course) 
                <option value={{$course->id}}>{{$course->code}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4 form-group">
        <b>{{Form::label('yearLevel', 'Year Level')}}</b>
        {{Form::selectRange('yearLevel', 1, 5, null, ['class' => 'form-control input-rounded text-center',
        'id' => 'year',  'placeholder' => 'Input Year Level', 'required'])}}
    </div>
</div>

{{-- Department Code and School Code --}}
{{-- <div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('department_code', 'Department Code')}}</b>
        <select name="department_id" id="did" class = "form-control input-rounded text-center">
            @foreach ($courses as $course) 
                <option value={{$course->id}}>{{$course->code}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('course_code', 'Course Code')}}</b>
        <select name="school_id" id="sid" class = "form-control input-rounded text-center">
            @foreach ($courses as $course) 
                <option value={{$course->id}}>{{$course->code}}</option>
            @endforeach
        </select>
    </div>
</div> --}}
</center>