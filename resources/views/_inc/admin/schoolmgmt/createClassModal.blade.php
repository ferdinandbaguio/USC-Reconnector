{{ Form::hidden('userType', null, array('id' => 'type')) }}

<center>
<i>{{Form::label('userDetails', '~ Class Details ~')}}</i><br><br>

{{-- Teachers and Subjects --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('teacher', 'Teacher')}}</b>
        <select class = "form-control input-rounded text-center" name="teacher_id">
            <option disabled selected hidden>Choose Teacher</option>
            @foreach ($teachers as $teacher) 
                <option value={{$teacher->id}}>{{$teacher->full_name}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('subject', 'Subject')}}</b>
        <select class = "form-control input-rounded text-center" name="subject_id">
            <option disabled selected hidden>Choose Subject</option>
            @foreach ($subjects as $subject) 
                <option value={{$subject->id}}>{{$subject->code}}: {{$subject->name}}</option>
            @endforeach
        </select>
    </div>
</div>

{{-- Semester and Day --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('subject', 'Semester')}}</b>
        <select class = "form-control input-rounded text-center" name="semester_id">
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
                              ['class' => 'form-control input-rounded', 'placeholder' => 'Choose Day'])}}
    </div>
</div>

{{-- Class Start and End --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('class_start', 'Class Start')}}</b>
        {{Form::select('class_start', ['6:00' => '6:00', '7:30' => '7:30', '9:00' => '9:00', 
                                        '10:30' => '10:30', '12:00' => '12:00', '1:30' => '1:30', 
                                        '3:00' => '3:00', '4:30' => '4:30'], null, 
                                        ['class' => 'form-control input-rounded', 'placeholder' => 'Choose'])}}
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('class_end', 'Class End')}}</b>
        <option disabled selected hidden>Choose Time</option>
        {{Form::select('class_end', ['6:00' => '6:00', '7:30' => '7:30', '9:00' => '9:00', 
                                        '10:30' => '10:30', '12:00' => '12:00', '1:30' => '1:30', 
                                        '3:00' => '3:00', '4:30' => '4:30'], null, 
                                        ['class' => 'form-control input-rounded', 'placeholder' => 'Choose'])}}
    </div>
</div>
</center>