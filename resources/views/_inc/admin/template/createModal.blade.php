{{ Form::hidden('userType', null, array('id' => 'type')) }}

<center>
<i>{{Form::label('userDetails', '~ Details ~')}}</i><br><br>
{{-- Profile Picture and ID Number --}}
<div class="row">
    <div class="col-md-4 form-group">
        <b>{{Form::label('pic', 'Profile Picture')}}</b>
        {{ Form::file('picture') }}
    </div>

    <div class="col-md-4 form-group">
        <b>{{Form::label('idnumber', 'ID Number')}}</b>
        {{Form::number('idnumber', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Add ID Number', 'required', 'min' => 10000000, 'max' => 99999999])}}
    </div>

    <div class="col-md-4 form-group">
        <b>{{Form::label('sex', 'Sex')}}</b>
        {{Form::select('sex', ['Male' => 'Male', 'Female' => 'Female'], null, 
                              ['class' => 'form-control input-rounded', 'placeholder' => 'Choose Sex', 'required'])}}
    </div>
</div>
</center>