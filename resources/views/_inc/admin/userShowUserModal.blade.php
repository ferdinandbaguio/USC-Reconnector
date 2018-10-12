<center>

{{-- ID Number, User Type, ID --}}
<div class="row">
    <div class="col-md-4 form-group">
        <b>{{Form::label('idnumber', 'ID Number')}}</b>
        {{Form::number('idnumber', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'idnum', 'disabled'])}}
    </div>

    <div class="col-md-5 form-group">
        <b>{{Form::label('type', 'User Type')}}</b>
        {{ Form::text('type', null, ['class' => 'form-control input-rounded text-center', 
        'id' => 'type', 'disabled']) }}
    </div>

    <div class="col-md-3 form-group">
        <b>{{Form::label('type', $users[0]->userType.' ID')}}</b>
        {{ Form::text('id', null, ['class' => 'form-control input-rounded text-center',
        'id' => 'id', 'disabled']) }}
    </div>
</div>

{{-- First, Middle, and Last Name --}}
<div class="row">
    <div class="col-md-8 form-group">
        <b>{{Form::label('name', 'Name')}}</b>
        {{Form::text('name', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'n', 'disabled'])}}
    </div>
    <div class="col-md-4 form-group">
            <b>{{Form::label('sex', 'Sex')}}</b>
            {{Form::text('sex', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'sex', 'disabled'])}}</div>
</div>

{{-- Email Address and Year Level --}}
<div class="row">
    <div class="col-md-8 form-group">
        <b>{{Form::label('email', 'Email Address')}}</b>
        <div class="input-group">
            {{Form::email('email', '', ['class' => 'form-control input-rounded text-center',
            'id' => 'email', 'disabled'])}}
        </div>
    </div>
    <div class="col-md-4 form-group">
        <b>{{Form::label('yearLevel', 'Year Level')}}</b>
        {{Form::text('yearLevel', '', ['class' => 'form-control input-rounded text-center',
        'id' => 'year', 'disabled'])}}
    </div>
</div>

{{-- User Status and Course Code --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('userStatus', 'User Status')}}</b>
        {{ Form::text('userStatus', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'status', 'disabled']) }}</div>  

    <div class="col-md-6 form-group">
        <b>{{Form::label('course_code', 'Course Code')}}</b>
        {{ Form::text('course_code', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'ccode', 'disabled']) }}</div>  
</div>

{{-- Department Code and School Code --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('Dcode', 'Department Code')}}</b>
        {{ Form::text('Dcode', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'dcode', 'disabled']) }}</div>  

    <div class="col-md-6 form-group">
        <b>{{Form::label('Scode', 'School Code')}}</b>
        {{ Form::text('Scode', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'scode', 'disabled']) }}</div>  
</div>

{{-- Course Name --}}
<div class="form-group">
    <b>{{Form::label('Cname', 'Course')}}</b>
    {{ Form::text('Cname', '', ['class' => 'form-control input-rounded text-center', 
    'id' => 'cname', 'disabled']) }}
</div> 

{{-- Department Name --}}
<div class="form-group">
    <b>{{Form::label('Dname', 'Department')}}</b>
    {{ Form::text('Dname', '', ['class' => 'form-control input-rounded text-center', 
    'id' => 'dname', 'disabled']) }}
</div> 

{{-- School Name --}}
<div class="form-group">
    <b>{{Form::label('Sname', 'School')}}</b>
    {{ Form::text('Sname', '', ['class' => 'form-control input-rounded text-center', 
    'id' => 'sname', 'disabled']) }}
</div> 

</center>