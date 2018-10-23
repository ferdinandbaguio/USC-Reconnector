{{Form::hidden('id', null, ['id' => 'did'])}}

<center>
    <div class="row">
        <div class="col-md-4">
            <i>{{Form::label('userDetails', '~ Department Details ~')}}</i>
        </div>
        <div class="col-md-8">
            {{Form::label('userDetails', '~ Schools ~')}}
            <select class = "form-control input-rounded text-center" name="school_id" id="dsid">
                <option disabled selected hidden>Choose School</option>
                @foreach ($schools as $school) 
                    <option value={{$school->id}}>{{$school->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 form-group">
            <b>{{Form::label('code', 'Code')}}</b>
            {{Form::text('code', '', ['class' => 'form-control input-rounded text-center', 'required',
            'placeholder' => 'Department Code', 'id' => 'dcode'])}}
        </div>
    
        <div class="col-md-8 form-group">
            <b>{{Form::label('name', 'Name')}}</b>
            {{ Form::text('name', '', ['class' => 'form-control input-rounded text-center', 'required',
            'placeholder' => 'Department Name', 'id' => 'dname']) }}
        </div>
    </div>
    <div class="form-group">
        <b>{{Form::label('description', 'Description')}}</b>
        {{ Form::textarea('description', '', ['class' => 'form-control input-rounded text-center'
        , 'rows' => 3, 'required', 'placeholder' => 'Department Description', 'id' => 'ddesc']) }}
    </div>
</center>