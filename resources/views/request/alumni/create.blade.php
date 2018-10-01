@extends('_layouts.app')

@section('content')
    <h1><i>Reconnect through us</i></h1>
    {!! Form::open(['action' => 'register.submit', 'method' => 'POST']) !!}
    {{ Form::hidden('userStatus', 'Pending') }} 
        <div class="form-group">
            <b>{{Form::label('idnumber', 'ID Number')}}</b>
                {{Form::number('idnumber', '', 
                ['class' => 'form-control', 'placeholder' => 'Please type in your ID Number'])}}
        </div>
        <div class="form-group">
            <b>{{Form::label('sex', 'Sex')}}</b>
            <br>
                {{Form::label('male', 'Male')}}
                {{Form::radio('sex', 'Male')}}
                {{Form::label('female', 'Female')}}
                {{Form::radio('sex', 'Female')}}
        </div>
        <div class="form-group">
            <b>{{Form::label('name', 'Name')}}</b>
            <br>
                {{Form::label('firstName', 'First')}}
                {{Form::text('firstName', '', ['class' => 'form-control', 
                'placeholder' => 'Please type in your First Name'])}}

                {{Form::label('middleName', 'Middle')}}
                {{Form::text('middleName', '', ['class' => 'form-control', 
                'placeholder' => 'Please type in your Middle Name'])}}

                {{Form::label('lastName', 'Last')}}  
                {{Form::text('lastName', '', ['class' => 'form-control', 
                'placeholder' => 'Please type in your Last Name'])}}
        </div>
        <div class="form-group">
            <b>{{Form::label('employmentStatus', 'Employment Status')}}</b>
                {{Form::select('employmentStatus', ['Unemployeed' => 'Unemployeed', 
                'Employed' => 'Employed'], null, 
                ['placeholder' => 'Select your Employment Status'])}}
        </div>
        <div class="form-group">
                <b>{{Form::submit('Summit Request', ['class' => 'btn btn-primary'])}}</b>
        </div>
    {!! Form::close() !!}
@endsection