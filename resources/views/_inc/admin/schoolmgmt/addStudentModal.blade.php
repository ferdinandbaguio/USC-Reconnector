{{ Form::hidden('group_class_id', $id) }}

<center>
{{-- List of Students --}}
<div class="form-group">
    <b>{{Form::label('teacher', 'Students')}}</b>
    <select class = "form-control input-rounded text-center" name="student_id" required>
        <option disabled selected hidden>Choose Student</option>
        @foreach ($students as $student) 
            <option value={{$student->id}}>{{$student->full_name}}</option>
        @endforeach
    </select>
</div>
</center>