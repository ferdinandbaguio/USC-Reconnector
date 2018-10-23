<center>
    <div class="row">
        <div class="col-md-4">
            <i>{{Form::label('userDetails', '~ Department Details ~')}}</i>
        </div>
        <div class="col-md-8">
            {{Form::label('userDetails', '~ Departments ~')}}
            <select class = "form-control input-rounded text-center" name="department_id">
                <option disabled selected hidden>Choose Department</option>
                @foreach ($departments as $department) 
                    <option value={{$department->id}}>{{$department->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 form-group">
            <b>{{Form::label('code', 'Code')}}</b>
            {{Form::text('code', '', ['class' => 'form-control input-rounded text-center', 'required',
            'placeholder' => 'Course Code'])}}
        </div>
    
        <div class="col-md-8 form-group">
            <b>{{Form::label('name', 'Name')}}</b>
            {{ Form::text('name', '', ['class' => 'form-control input-rounded text-center', 'required',
            'placeholder' => 'Course Name']) }}
        </div>
    </div>
    <div class="form-group">
        <b>{{Form::label('description', 'Description')}}</b>
        {{ Form::textarea('description', '', ['class' => 'form-control input-rounded text-center'
        , 'rows' => 3, 'required', 'placeholder' => 'Course Description']) }}
    </div>
</center>