{{ Form::hidden('userType', null, array('id' => 'type')) }}

{{-- Profile Picture and ID Number --}}
<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('pic', 'Profile Picture')}}</b>
        {{ Form::file('picture') }}
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('idnumber', 'ID Number')}}</b>
        {{Form::number('idnumber', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Add ID Number', 'required', 'min' => 10000000, 'max' => 99999999])}}
    </div>
</div>

{{-- First, Middle, and Last Name --}}
<div class="row">
    <div class="col-md-4 form-group">
        <b>{{Form::label('firstName', 'First Name')}}</b>
        {{Form::text('firstName', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Type First Name', 'required'])}}
    </div>

    <div class="col-md-4 form-group">
        <b>{{Form::label('middleName', 'Middle Name')}}</b>
        {{Form::text('middleName', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Type Middle Name'])}}
    </div>

    <div class="col-md-4 form-group">
        <b>{{Form::label('lastName', 'Last Name')}}</b>
        {{Form::text('lastName', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Type Last Name', 'required'])}}
    </div>
</div>

{{-- Email Address --}} 
<div class="form-group">
    <b>{{Form::label('email', 'Email Address')}}</b>
    <div class="input-group">
        {{Form::email('email', '', 
        ['class' => 'form-control input-rounded', 'placeholder' => 'Type Email Address', 'required'])}}
        <div class="input-rounded input-group-addon">@example.com</div>
    </div>
</div>

{{-- Deparment Code and Sex --}}
<div class="row">  
    <div class="col-md-6 form-group">
        <b>{{Form::label('department_code', 'Department Code')}}</b>
        <select name="department_id" id="did" class = "form-control input-rounded text-center" disabled>
            @foreach ($departments as $department) 
                <option value={{$department->id}}>{{$department->code}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('sex', 'Sex')}}</b>
        {{Form::select('sex', ['Male' => 'Male', 'Female' => 'Female'], null, 
                              ['class' => 'form-control input-rounded', 'placeholder' => 'Choose Sex', 'required'])}}
    </div>
</div>


<div class="row">
    {{-- Course Code and Year Level --}}
    @if($users[0]->userType == "Student")            
        <div class="col-md-6 form-group">
            <b>{{Form::label('course_id', 'Course Code')}}</b>
            <select name="course_id" class = "form-control input-rounded text-center">
                <option value="" disabled selected>Choose Course</option>
                @foreach ($courses as $course) 
                    <option value={{$course->id}}>{{$course->code}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6 form-group">
            <b>{{Form::label('yearLevel', 'Year Level')}}</b>
            {{Form::selectRange('yearLevel', 1, 5, null, ['class' => 'form-control input-rounded text-center',
            'id' => 'year',  'placeholder' => 'Input Year Level', 'required'])}}
        </div>
    @endif


</div>