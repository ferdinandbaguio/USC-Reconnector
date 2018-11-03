{{ Form::hidden('id', null, array('id' => 'id')) }}

<center>

{{-- ID Number, User Type, ID --}}
<div class="row">
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
        <b>{{ $currentStatus }} ID</b>
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
</center>