<center>
<i>{{Form::label('userDetails', '~ Class Details ~')}}</i><br><br>

{{-- Status and ID --}}
<div class="row">
    {{Form::hidden('id', null,['id' => 'id'])}}
    <div class="col-md-6 form-group">
        <b>{{Form::label('id', 'Class ID')}}</b>
        {{ Form::text('id', null, ['class' => 'form-control input-rounded text-center',
        'id' => 'id', 'disabled']) }}
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('status', 'Status')}}</b>
        {{Form::select('status', ['Upcoming'  => 'Upcoming', 'Ongoing'    => 'Ongoing',
                                    'Finished'  => 'Finished', 'Dissolved'  => 'Dissolved'], null, 
                                    ['class' => 'form-control input-rounded', 'id' => 'status', 'required'])}}
    </div>
</div>

{{-- Teachers and Subjects --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('teacher', 'Teacher')}}</b>
        <select class = "form-control input-rounded text-center" name="teacher_id" id="tid" required>
            <option disabled selected hidden>Choose Teacher</option>
            @foreach ($teachers as $teacher) 
                <option value={{$teacher->id}}>{{$teacher->full_name}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('subject', 'Subject')}}</b>
        <select class = "form-control input-rounded text-center" name="subject_id" id="sid" required>
            <option disabled selected hidden>Choose Subject</option>
            @foreach ($subjects as $subject) 
                <option value={{$subject->id}}>{{$subject->code}}: {{$subject->name}}</option>
            @endforeach
        </select>
    </div>
</div>

<br><i>{{Form::label('userDetails', '~ Schedule Details ~')}}</i><br><br>

{{-- Schedule 1 Header --}}
<div class="row">
    <div class="col-md-4 form-group">
    </div>
    <div class="col-md-4 form-group">
        <i>{{Form::label('userDetails', 'Schedule 1')}}</i>
    </div>
    <div class="col-md-4 form-group pull-right">
        {{Form::submit('Delete Schedule 1', ['class' => 'btn btn-danger pull-right', 'name' => "action"])}}
    </div>
</div>
{{Form::hidden('gsid1', null, ['id' => 'gsid1'])}}

{{-- 1 Semester and Day --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('subject', 'Semester')}}</b>
        <select class = "form-control input-rounded text-center" name="semester_id1" id="gssem1">
            <option value="">Choose Semester</option>
            @foreach ($semesters as $semester) 
                <option value={{$semester->id}}>{{$semester->name }}: {{$semester->year->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('day1', 'Day')}}</b>
        {{Form::select('day1', ['Monday' => 'Monday', 'Tuesday' => 'Tuesday', 'Wednesday' => 'Wednesday', 
                               'Thursday' => 'Thursday','Friday' => 'Friday', 'Saturday' => 'Saturday'], null, 
                              ['class' => 'form-control input-rounded', 'placeholder' => 'Choose Day', 'id' => 'gsday1'])}}
    </div>
</div>

{{-- 1 Class Start and End --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('class_start1', 'Class Start')}}</b>
        {{Form::select('class_start1', ['6:00' => '6:00', '7:30' => '7:30', '9:00' => '9:00', 
                                        '10:30' => '10:30', '12:00' => '12:00', '1:30' => '1:30', 
                                        '3:00' => '3:00', '4:30' => '4:30'], null, 
                                        ['class' => 'form-control input-rounded', 'placeholder' => 'Choose', 'id' => 'gsstart1'])}}
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('class_end', 'Class End')}}</b>
        {{Form::select('class_end1', ['6:00' => '6:00', '7:30' => '7:30', '9:00' => '9:00', 
                                        '10:30' => '10:30', '12:00' => '12:00', '1:30' => '1:30', 
                                        '3:00' => '3:00', '4:30' => '4:30'], null, 
                                        ['class' => 'form-control input-rounded', 'placeholder' => 'Choose', 'id' => 'gsend1'])}}
    </div>
</div>

{{-- Schedule 2 Header --}}
<div class="row">
    <div class="col-md-4 form-group">
    </div>
    <div class="col-md-4 form-group">
        <i>{{Form::label('userDetails', 'Schedule 2')}}</i>
    </div>
    <div class="col-md-4 form-group pull-right">
        {{Form::submit('Delete Schedule 2', ['class' => 'btn btn-danger pull-right', 'name' => "action"])}}
    </div>
</div>
{{Form::hidden('gsid2', null, ['id' => 'gsid2'])}}

{{-- 2 Semester and Day --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('subject', 'Semester')}}</b>
        <select class = "form-control input-rounded text-center" name="semester_id2" id="gssem2">
            <option value="">Choose Semester</option>
            @foreach ($semesters as $semester) 
                <option value={{$semester->id}}>{{$semester->name }}: {{$semester->year->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('day2', 'Day')}}</b>
        {{Form::select('day2', ['Monday' => 'Monday', 'Tuesday' => 'Tuesday', 'Wednesday' => 'Wednesday', 
                               'Thursday' => 'Thursday','Friday' => 'Friday', 'Saturday' => 'Saturday'], null, 
                              ['class' => 'form-control input-rounded', 'placeholder' => 'Choose Day', 'id' => 'gsday2'])}}
    </div>
</div>

{{-- 2 Class Start and End --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('class_start2', 'Class Start')}}</b>
        {{Form::select('class_start2', ['6:00' => '6:00', '7:30' => '7:30', '9:00' => '9:00', 
                                        '10:30' => '10:30', '12:00' => '12:00', '1:30' => '1:30', 
                                        '3:00' => '3:00', '4:30' => '4:30'], null, 
                                        ['class' => 'form-control input-rounded', 'placeholder' => 'Choose', 'id' => 'gsstart2'])}}
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('class_end2', 'Class End')}}</b>
        {{Form::select('class_end2', ['6:00' => '6:00', '7:30' => '7:30', '9:00' => '9:00', 
                                        '10:30' => '10:30', '12:00' => '12:00', '1:30' => '1:30', 
                                        '3:00' => '3:00', '4:30' => '4:30'], null, 
                                        ['class' => 'form-control input-rounded', 'placeholder' => 'Choose', 'id' => 'gsend2'])}}
    </div>
</div>

{{-- Schedule 3 Header --}}
<div class="row">
    <div class="col-md-4 form-group">
    </div>
    <div class="col-md-4 form-group">
        <i>{{Form::label('userDetails', 'Schedule 1')}}</i>
    </div>
    <div class="col-md-4 form-group pull-right">
        {{Form::submit('Delete Schedule 3', ['class' => 'btn btn-danger pull-right', 'name' => "action"])}}
    </div>
</div>
{{Form::hidden('gsid3', null,['id' => 'gsid3'])}}

{{-- 3 Semester and Day --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('subject', 'Semester')}}</b>
        <select class = "form-control input-rounded text-center" name="semester_id3" id="gssem3">
            <option value="">Choose Semester</option>
            @foreach ($semesters as $semester) 
                <option value={{$semester->id}}>{{$semester->name }}: {{$semester->year->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('day3', 'Day')}}</b>
        {{Form::select('day3', ['Monday' => 'Monday', 'Tuesday' => 'Tuesday', 'Wednesday' => 'Wednesday', 
                               'Thursday' => 'Thursday','Friday' => 'Friday', 'Saturday' => 'Saturday'], null, 
                              ['class' => 'form-control input-rounded', 'placeholder' => 'Choose Day', 'id' => 'gsday3'])}}
    </div>
</div>

{{-- 3 Class Start and End --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('class_start3', 'Class Start')}}</b>
        {{Form::select('class_start3', ['6:00' => '6:00', '7:30' => '7:30', '9:00' => '9:00', 
                                        '10:30' => '10:30', '12:00' => '12:00', '1:30' => '1:30', 
                                        '3:00' => '3:00', '4:30' => '4:30'], null, 
                                        ['class' => 'form-control input-rounded', 'placeholder' => 'Choose', 'id' => 'gsstart3'])}}
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('class_end3', 'Class End')}}</b>
        {{Form::select('class_end3', ['6:00' => '6:00', '7:30' => '7:30', '9:00' => '9:00', 
                                        '10:30' => '10:30', '12:00' => '12:00', '1:30' => '1:30', 
                                        '3:00' => '3:00', '4:30' => '4:30'], null, 
                                        ['class' => 'form-control input-rounded', 'placeholder' => 'Choose', 'id' => 'gsend3'])}}
    </div>
</div>
</center>