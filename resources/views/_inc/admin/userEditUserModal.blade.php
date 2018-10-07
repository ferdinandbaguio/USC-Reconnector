{{ Form::hidden('id', null, array('id' => 'id')) }}
{{ Form::hidden('userStatus', null, array('id' => 'status')) }}

<div class="form-group">
    {{ Form::file('picture') }}
</div>

<div class="form-group">
    <b>{{Form::label('name', 'Name')}}</b>
    <br>
        {{Form::label('firstName', 'First')}}
        {{Form::text('firstName', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Change First Name', 'id' => 'fn', 'required'])}}

        {{Form::label('middleName', 'Middle')}}
        {{Form::text('middleName', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Change Middle Name', 'id' => 'mn'])}}

        {{Form::label('lastName', 'Last')}}  
        {{Form::text('lastName', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Change Last Name', 'id' => 'ln', 'required'])}}
</div>

<div class="form-group">
    <b>{{Form::label('userType', 'User Type')}}</b>
    {{Form::select('userType', ['Student' => 'Student', 
                                'Alumnus' => 'Alumnus',
                                'Teacher' => 'Teacher',
                                'Admin' => 'Admin',
                                'Coordinator' => 'Coordinator',
                                'Chair' => 'Chair'], null, 
                                ['class' => 'form-control input-rounded', 
                                'placeholder' => 'Change User Type', 
                                'id' => 'type', 'required'])}}
</div>

<div class="form-group">
    <b>{{Form::label('idnumber', 'ID Number')}}</b>
    {{Form::number('idnumber', '', ['class' => 'form-control input-rounded', 
    'placeholder' => 'Change ID Number', 'id' => 'idnum', 'required', 'min' => 10000000, 'max' => 99999999])}}
</div>

<div class="form-group">
    <b>{{Form::label('sex', 'Sex')}}</b>
    {{Form::select('sex', ['Male' => 'Male', 
                           'Female' => 'Female'], null, 
                          ['class' => 'form-control input-rounded', 'placeholder' => 'Change Sex', 
                          'id' => 'sex', 'required'])}}
</div>

<div class="form-group">
    <b>{{Form::label('email', 'Email Address')}}</b>
    {{Form::email('email', '', 
    ['class' => 'form-control input-rounded', 'placeholder' => 'Change Email Address', 'id' => 'email', 'required'])}}
</div>

<div class="form-group">
    <b>{{Form::label('yearLevel', 'Year Level')}}</b>
    {{ Form::number('yearLevel', null, ['class' => 'form-control input-rounded', 
    'placeholder' => 'Type in the Year Level', 'id' => 'year', 'min' => 1, 'max' => 5, 'required']) }}
</div>