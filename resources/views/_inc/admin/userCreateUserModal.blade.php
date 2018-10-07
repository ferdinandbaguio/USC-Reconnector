{{ Form::hidden('userType', null, array('id' => 'type')) }}

<div class="form-group">
    {{ Form::file('picture') }}
</div>

<div class="form-group">
    <b>{{Form::label('name', 'Name')}}</b>
    <br>
        {{Form::label('firstName', 'First')}}
        {{Form::text('firstName', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Type in the First Name', 'required'])}}

        {{Form::label('middleName', 'Middle')}}
        {{Form::text('middleName', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Type in the Middle Name'])}}

        {{Form::label('lastName', 'Last')}}  
        {{Form::text('lastName', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Type in the Last Name', 'required'])}}
</div>

<div class="form-group">
    <b>{{Form::label('idnumber', 'ID Number')}}</b>
    {{Form::number('idnumber', '', ['class' => 'form-control input-rounded', 
    'placeholder' => 'Type in the ID Number', 'required', 'min' => 10000000, 'max' => 99999999])}}
</div>

<div class="form-group">
    <b>{{Form::label('sex', 'Sex')}}</b>
    {{Form::select('sex', ['Male' => 'Male', 
                           'Female' => 'Female'], null, 
                          ['class' => 'form-control input-rounded', 'placeholder' => 'Select the Sex', 'required'])}}
</div>

<div class="form-group">
    <b>{{Form::label('email', 'Email Address')}}</b>
    {{Form::email('email', '', 
    ['class' => 'form-control input-rounded', 'placeholder' => 'Type in the Email Address', 'required'])}}
</div>

<div class="form-group">
    <b>{{Form::label('yearLevel', 'Year Level')}}</b>
    {{ Form::number('yearLevel', null, ['class' => 'form-control input-rounded', 
    'placeholder' => 'Type in the Year Level', 'id' => 'year', 'min' => 1, 'max' => 5, 'required']) }}
</div>