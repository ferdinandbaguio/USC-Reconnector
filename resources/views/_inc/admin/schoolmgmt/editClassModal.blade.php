<center>
<i>{{Form::label('userDetails', '~ Class Details ~')}}</i><br><br>

{{-- Status and ID --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('id', 'Class ID')}}</b>
        {{ Form::text('id', null, ['class' => 'form-control input-rounded text-center',
        'id' => 'id', 'disabled']) }}
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('status', 'Status')}}</b>
        {{Form::select('userType', ['Upcoming'  => 'Upcoming', 'Ongoing'    => 'Ongoing',
                                    'Finished'  => 'Finished', 'Dissolved'  => 'Dissolved'], null, 
                                    ['class' => 'form-control input-rounded', 'id' => 'status', 'required'])}}
    </div>
</div>

{{-- Teachers and Subjects --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('teacher', 'Teacher')}}</b>
        <select class = "form-control input-rounded text-center" name="teacher_id" id="tid">
            <option disabled selected hidden>Choose Teacher</option>
            @foreach ($teachers as $teacher) 
                <option value={{$teacher->id}}>{{$teacher->full_name}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('subject', 'Subject')}}</b>
        <select class = "form-control input-rounded text-center" name="subject_id" id="sid">
            <option disabled selected hidden>Choose Subject</option>
            @foreach ($subjects as $subject) 
                <option value={{$subject->id}}>{{$subject->code}}: {{$subject->name}}</option>
            @endforeach
        </select>
    </div>
</div>

<br><i>{{Form::label('userDetails', '~ Schedule Details ~')}}</i><br><br>

<br><i>{{Form::label('userDetails', 'Schedule 1')}}</i><br>
{{-- 1 Semester and Day --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('subject', 'Semester')}}</b>
        <select class = "form-control input-rounded text-center" name="semester_id" id="gssem1">
            <option disabled selected hidden>Choose Semester</option>
            @foreach ($semesters as $semester) 
                <option value={{$semester->id}}>{{$semester->name }}: {{$semester->year->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('day', 'Day')}}</b>
        <option disabled selected hidden>Choose Day</option>
        {{Form::select('day', ['Monday' => 'Monday', 'Tuesday' => 'Tuesday', 'Wednesday' => 'Wednesday', 
                               'Thursday' => 'Thursday','Friday' => 'Friday', 'Saturday' => 'Saturday'], null, 
                              ['class' => 'form-control input-rounded', 'placeholder' => 'Choose Day', 'id' => 'gsday1'])}}
    </div>
</div>

{{-- 1 Class Start and End --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('class_start', 'Class Start')}}</b>
        {{Form::select('class_start', ['6:00' => '6:00', '7:30' => '7:30', '9:00' => '9:00', 
                                        '10:30' => '10:30', '12:00' => '12:00', '1:30' => '1:30', 
                                        '3:00' => '3:00', '4:30' => '4:30'], null, 
                                        ['class' => 'form-control input-rounded', 'placeholder' => 'Choose', 'id' => 'gsstart1'])}}
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('class_end', 'Class End')}}</b>
        {{Form::select('class_end', ['6:00' => '6:00', '7:30' => '7:30', '9:00' => '9:00', 
                                        '10:30' => '10:30', '12:00' => '12:00', '1:30' => '1:30', 
                                        '3:00' => '3:00', '4:30' => '4:30'], null, 
                                        ['class' => 'form-control input-rounded', 'placeholder' => 'Choose', 'id' => 'gsend1'])}}
    </div>
</div>

<br><i>{{Form::label('userDetails', 'Schedule 2')}}</i><br>
{{-- 2 Semester and Day --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('subject', 'Semester')}}</b>
        <select class = "form-control input-rounded text-center" name="semester_id" id="gssem2">
            <option disabled selected hidden>Choose Semester</option>
            @foreach ($semesters as $semester) 
                <option value={{$semester->id}}>{{$semester->name }}: {{$semester->year->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('day', 'Day')}}</b>
        <option disabled selected hidden>Choose Day</option>
        {{Form::select('day', ['Monday' => 'Monday', 'Tuesday' => 'Tuesday', 'Wednesday' => 'Wednesday', 
                               'Thursday' => 'Thursday','Friday' => 'Friday', 'Saturday' => 'Saturday'], null, 
                              ['class' => 'form-control input-rounded', 'placeholder' => 'Choose Day', 'id' => 'gsday2'])}}
    </div>
</div>

{{-- 2 Class Start and End --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('class_start', 'Class Start')}}</b>
        {{Form::select('class_start', ['6:00' => '6:00', '7:30' => '7:30', '9:00' => '9:00', 
                                        '10:30' => '10:30', '12:00' => '12:00', '1:30' => '1:30', 
                                        '3:00' => '3:00', '4:30' => '4:30'], null, 
                                        ['class' => 'form-control input-rounded', 'placeholder' => 'Choose', 'id' => 'gsstart2'])}}
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('class_end', 'Class End')}}</b>
        {{Form::select('class_end', ['6:00' => '6:00', '7:30' => '7:30', '9:00' => '9:00', 
                                        '10:30' => '10:30', '12:00' => '12:00', '1:30' => '1:30', 
                                        '3:00' => '3:00', '4:30' => '4:30'], null, 
                                        ['class' => 'form-control input-rounded', 'placeholder' => 'Choose', 'id' => 'gsend2'])}}
    </div>
</div>

<br><i>{{Form::label('userDetails', 'Schedule 3')}}</i><br>
{{-- 3 Semester and Day --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('subject', 'Semester')}}</b>
        <select class = "form-control input-rounded text-center" name="semester_id" id="gssem3">
            <option disabled selected hidden>Choose Semester</option>
            @foreach ($semesters as $semester) 
                <option value={{$semester->id}}>{{$semester->name }}: {{$semester->year->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('day', 'Day')}}</b>
        <option disabled selected hidden>Choose Day</option>
        {{Form::select('day', ['Monday' => 'Monday', 'Tuesday' => 'Tuesday', 'Wednesday' => 'Wednesday', 
                               'Thursday' => 'Thursday','Friday' => 'Friday', 'Saturday' => 'Saturday'], null, 
                              ['class' => 'form-control input-rounded', 'placeholder' => 'Choose Day', 'id' => 'gsday3'])}}
    </div>
</div>

{{-- 3 Class Start and End --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('class_start', 'Class Start')}}</b>
        {{Form::select('class_start', ['6:00' => '6:00', '7:30' => '7:30', '9:00' => '9:00', 
                                        '10:30' => '10:30', '12:00' => '12:00', '1:30' => '1:30', 
                                        '3:00' => '3:00', '4:30' => '4:30'], null, 
                                        ['class' => 'form-control input-rounded', 'placeholder' => 'Choose', 'id' => 'gsstart3'])}}
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('class_end', 'Class End')}}</b>
        {{Form::select('class_end', ['6:00' => '6:00', '7:30' => '7:30', '9:00' => '9:00', 
                                        '10:30' => '10:30', '12:00' => '12:00', '1:30' => '1:30', 
                                        '3:00' => '3:00', '4:30' => '4:30'], null, 
                                        ['class' => 'form-control input-rounded', 'placeholder' => 'Choose', 'id' => 'gsend3'])}}
    </div>
</div>
</center>