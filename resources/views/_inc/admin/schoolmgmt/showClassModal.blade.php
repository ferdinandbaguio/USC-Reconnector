<center>
<i>{{Form::label('userDetails', '~ Class Details ~')}}</i><br><br>

{{-- Status, ID and Room --}}
<div class="row">
    <div class="col-md-4 form-group">
        <b>{{Form::label('id', 'Class ID')}}</b>
        {{ Form::text('id', null, ['class' => 'form-control input-rounded text-center',
        'id' => 'id', 'disabled']) }}
    </div>

    <div class="col-md-4 form-group">
        <b>{{Form::label('room', 'Room')}}</b>
        {{ Form::text('room', null, ['class' => 'form-control input-rounded text-center',
        'id' => 'room', 'disabled']) }}
    </div>

    <div class="col-md-4 form-group">
        <b>{{Form::label('status', 'Status')}}</b>
        {{ Form::text('status', null, ['class' => 'form-control input-rounded text-center',
        'id' => 'status', 'disabled']) }}
    </div>
</div>

<br><i>{{Form::label('userDetails', '~ Teacher Details ~')}}</i><br><br>

{{-- ID Number, Name and Sex --}}
<div class="row">
    <div class="col-md-3 form-group">
        <b>{{Form::label('idnumber', 'ID Number')}}</b>
        {{Form::text('idnumber', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'tidnum', 'disabled'])}}
    </div>
    <div class="col-md-6 form-group">
        <b>{{Form::label('name', 'Name')}}</b>
        {{Form::text('name', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'tname', 'disabled'])}}
    </div>
    <div class="col-md-3 form-group">
            <b>{{Form::label('sex', 'Sex')}}</b>
            {{Form::text('tsex', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'tsex', 'disabled'])}}</div>
</div>

{{-- Email Address and Position--}}
<div class="row">
    <div class="col-md-8 form-group">
        <b>{{Form::label('email', 'Email Address')}}</b>
        <div class="input-group">
            {{Form::email('email', '', ['class' => 'form-control input-rounded text-center',
            'id' => 'temail', 'disabled'])}}
        </div>
    </div>

    <div class="col-md-4 form-group">
        <b>{{Form::label('position', 'Position')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'tpos', 'disabled']) }}</div> 
</div>

{{-- User Description --}}
<div class="form-group">
    <b>{{Form::label('desc', 'Description')}}</b>
    <div class="input-group">
        {{Form::textarea('desc', '', ['class' => 'form-control input-rounded text-center',
        'id' => 'tdesc', 'rows' => 3,'disabled'])}}
    </div>
</div>

<br><i>{{Form::label('userDetails', '~ Subject Details ~')}}</i><br><br>

{{-- Subject Code and Name --}}
<div class="row">
    <div class="col-md-4 form-group">
        <b>{{Form::label('email', 'Subject Code')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'scode', 'disabled']) }} 
    </div>

    <div class="col-md-8 form-group">
        <b>{{Form::label('position', 'Subject Name')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'sname', 'disabled']) }}
    </div> 
</div>

{{-- Subject Description --}}
<div class="form-group">
    <b>{{Form::label('desc', 'Subject Descripttion')}}</b>
    <div class="input-group">
        {{Form::textarea('sdesc', '', ['class' => 'form-control input-rounded text-center',
        'id' => 'sdesc', 'rows' => 3,'disabled'])}}
    </div>
</div>

<br><i>{{Form::label('userDetails', '~ Schedule Details ~')}}</i><br><br>

{{-- 1 Year, Semester and Day --}}
<br><i>{{Form::label('userDetails', 'Schedule 1')}}</i><br>
<div class="row">
    <div class="col-md-3 form-group">
        <b>{{Form::label('email', 'Year')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'year1', 'disabled']) }} 
    </div>

    <div class="col-md-5 form-group">
        <b>{{Form::label('email', 'Semester')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'sem1', 'disabled']) }} 
    </div>

    <div class="col-md-4 form-group">
        <b>{{Form::label('position', 'Day')}}</b>
        {{ Form::text('day', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'cday1', 'disabled']) }}
    </div> 
</div>

{{-- 1 Start and End Class --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('email', 'Class Start')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'cstart1', 'disabled']) }} 
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('email', 'Class End')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'cend1', 'disabled']) }} 
    </div>
</div>

{{-- 2 Year, Semester and Day --}}
<br><i>{{Form::label('userDetails', 'Schedule 2')}}</i><br>
<div class="row">
    <div class="col-md-3 form-group">
        <b>{{Form::label('email', 'Year')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'year2', 'disabled']) }} 
    </div>

    <div class="col-md-5 form-group">
        <b>{{Form::label('email', 'Semester')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'sem2', 'disabled']) }} 
    </div>

    <div class="col-md-4 form-group">
        <b>{{Form::label('position', 'Day')}}</b>
        {{ Form::text('day', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'cday2', 'disabled']) }}
    </div> 
</div>

{{-- 2 Start and End Class --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('email', 'Class Start')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'cstart2', 'disabled']) }} 
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('email', 'Class End')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'cend2', 'disabled']) }} 
    </div>
</div>

{{-- 3 Year, Semester and Day --}}
<br><i>{{Form::label('userDetails', 'Schedule 3')}}</i><br>
<div class="row">
    <div class="col-md-3 form-group">
        <b>{{Form::label('email', 'Year')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'year3', 'disabled']) }} 
    </div>

    <div class="col-md-5 form-group">
        <b>{{Form::label('email', 'Semester')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'sem3', 'disabled']) }} 
    </div>

    <div class="col-md-4 form-group">
        <b>{{Form::label('position', 'Day')}}</b>
        {{ Form::text('day', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'cday3', 'disabled']) }}
    </div> 
</div>

{{-- 3 Start and End Class --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('email', 'Class Start')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'cstart3', 'disabled']) }} 
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('email', 'Class End')}}</b>
        {{ Form::text('pos', '', ['class' => 'form-control input-rounded text-center', 
        'id' => 'cend3', 'disabled']) }} 
    </div>
</div>
</center>