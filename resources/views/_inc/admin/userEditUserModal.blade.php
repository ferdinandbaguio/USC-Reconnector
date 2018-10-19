{{ Form::hidden('id', null, array('id' => 'id')) }}

<center>
<i>{{Form::label('userDetails', '~ User Details ~')}}</i><br><br>
{{-- ID Number, User Type, ID --}}
<div class="row">
    <div class="col-md-4 form-group">
        <b>{{Form::label('idnumber', 'ID Number')}}</b>
        {{Form::number('idnumber', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'idnum', 'placeholder' => 'Input ID Number', 'required'])}}
    </div>

    <div class="col-md-5 form-group">
        <b>{{Form::label('userType', 'User Type')}}</b>
        {{Form::select('userType', ['Student'       => 'Student',       'Alumnus'       => 'Alumnus',
                                    'Teacher'       => 'Teacher',       'Admin'         => 'Admin',
                                    'Coordinator'   => 'Coordinator',   'Chair'         => 'Chair'], null, 
                                    ['class' => 'form-control input-rounded', 'id' => 'type', 'required'])}}</div>

    <div class="col-md-3 form-group">
        <b>{{ $userType }} ID</b>
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

{{-- Email Address --}}
<div class="form-group">
    <b>{{Form::label('email', 'Email Address')}}</b>
    <div class="input-group">
        {{Form::email('email', '', ['class' => 'form-control input-rounded text-center',
        'id' => 'email', 'placeholder' => 'Input Email Address', 'required'])}}
    </div>
</div>

{{-- User Status and Sex --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('userStatus', 'User Status')}}</b>
        {{ Form::select('userStatus', [ 'Approved' => 'Approved', 
                                        'Pending' => 'Pending', 
                                        'Denied' => 'Denied'], null, 
        ['class' => 'form-control input-rounded text-center', 'id' => 'status', 'required']) }}
    </div>  

    <div class="col-md-6 form-group">
        <b>{{Form::label('sex', 'Sex')}}</b>
        {{Form::select('sex', ['Male' => "Male", 'Female' => 'Female'], null, 
        ['class' => 'form-control input-rounded text-center', 'id' => 'sex', 'required'])}}
    </div>
</div>

{{-- User Type Details --}}
@if($userType == "Student")
    <br><i>{{Form::label('studentDetails', '~ Student Details ~')}}</i><br><br>
    {{-- Course Code and Year Level --}}
    <div class="row">
        <div class="col-md-6 form-group">
            <b>{{Form::label('course_id', 'Course Code')}}</b>
            <select name="course_id" id="cid" class = "form-control input-rounded text-center">
                @foreach ($courses as $course) 
                    <option value={{$course->id}}>{{$course->code}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6 form-group">
            <b>{{Form::label('yearLevel', 'Year Level')}}</b>
            {{Form::selectRange('yearLevel', 1, 5, null, ['class' => 'form-control input-rounded text-center',
            'id' => 'year',  'placeholder' => 'Input Year Level'])}}
        </div>
    </div>
@elseif($userType == "Alumnus")
    <br><i>{{Form::label('alumnusDetails', '~ Alumnus Details ~')}}</i><br><br>
    <div class="row">
        <div class="col-md-6 form-group">
            <b>{{Form::label('employmentStatus', 'Employment Status')}}</b>
            {{Form::select('employmentStatus', ['Full-Time Job'         => 'Full-Time Job', 'Unemployed'    => 'Unemployed',
                                                'Part-Time Job'         => 'Part-Time Job', 'Summer Job'    => 'Summer Job',
                                                'On-the-Job Training'   => 'On-the-Job Training'], null, 
                                               ['class' => 'form-control input-rounded', 'id' => 'emply'])}}</div>
        <div class="col-md-6 form-group">
            <b>{{Form::label('updateStatus', 'Update Status')}}</b>
            {{Form::select('updateStatus', ['Updated'   => 'Updated',   'Outdated'      => 'Outdated',
                                            'Recent'    => 'Recent'], null, 
                                            ['class' => 'form-control input-rounded', 'id' => 'updt'])}}</div>
    </div>
@elseif($userType == "Teacher")
    <br><i>{{Form::label('teacherDetails', '~ Teacher Details ~')}}</i><br><br>
    <div class="row">
        <div class="col-md-6 form-group">
            <b>{{Form::label('position', 'Position')}}</b>
            {{Form::text('position', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'pos', 'required'])}}
        </div>

        <div class="col-md-6 form-group">
        <b>{{Form::label('employmentStatus', 'Employment Status')}}</b>
            {{Form::select('employmentStatus', ['Full-Time Job'         => 'Full-Time Job', 'Unemployed'    => 'Unemployed',
                                                'Part-Time Job'         => 'Part-Time Job', 'Summer Job'    => 'Summer Job',
                                                'On-the-Job Training'   => 'On-the-Job Training'], null, 
                                               ['class' => 'form-control input-rounded', 'id' => 'emply'])}}</div>
    </div>
@elseif($userType == "Admin")
    <br><i>{{Form::label('adminDetails', '~ Admin Details ~')}}</i><br><br>
    <div class="row">
        <div class="col-md-6 form-group">
            <b>{{Form::label('position', 'Position')}}</b>
            {{Form::text('position', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'pos', 'required'])}}
        </div>

        <div class="col-md-6 form-group">
        <b>{{Form::label('employmentStatus', 'Employment Status')}}</b>
            {{Form::select('employmentStatus', ['Full-Time Job'         => 'Full-Time Job', 'Unemployed'    => 'Unemployed',
                                                'Part-Time Job'         => 'Part-Time Job', 'Summer Job'    => 'Summer Job',
                                                'On-the-Job Training'   => 'On-the-Job Training'], null, 
                                                ['class' => 'form-control input-rounded', 'id' => 'emply'])}}</div>
    </div>
@elseif($userType == "Coordinator")
    <br><i>{{Form::label('coordinatorrDetails', '~ Coordinator Details ~')}}</i><br><br>
    <div class="row">
        <div class="col-md-6 form-group">
            <b>{{Form::label('position', 'Position')}}</b>
            {{Form::text('position', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'pos', 'required'])}}
        </div>

        <div class="col-md-6 form-group">
        <b>{{Form::label('employmentStatus', 'Employment Status')}}</b>
            {{Form::select('employmentStatus', ['Full-Time Job'         => 'Full-Time Job', 'Unemployed'    => 'Unemployed',
                                                'Part-Time Job'         => 'Part-Time Job', 'Summer Job'    => 'Summer Job',
                                                'On-the-Job Training'   => 'On-the-Job Training'], null, 
                                               ['class' => 'form-control input-rounded', 'id' => 'emply'])}}</div>
    </div>
@elseif($userType == "Chair")
    <br><i>{{Form::label('chairDetails', '~ Chair Details ~')}}</i><br><br>
    <div class="row">
        <div class="col-md-6 form-group">
            <b>{{Form::label('position', 'Position')}}</b>
            {{Form::text('position', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'pos', 'required'])}}
        </div>

        <div class="col-md-6 form-group">
        <b>{{Form::label('employmentStatus', 'Employment Status')}}</b>
            {{Form::select('employmentStatus', ['Full-Time Job'         => 'Full-Time Job', 'Unemployed'    => 'Unemployed',
                                                'Part-Time Job'         => 'Part-Time Job', 'Summer Job'    => 'Summer Job',
                                                'On-the-Job Training'   => 'On-the-Job Training'], null, 
                                               ['class' => 'form-control input-rounded', 'id' => 'emply'])}}</div>
    </div>   
@endif
</center>