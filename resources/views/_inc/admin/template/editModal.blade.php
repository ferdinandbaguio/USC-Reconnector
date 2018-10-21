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
</center>