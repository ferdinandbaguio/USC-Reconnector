<center>
    <i>{{Form::label('userDetails', '~ School Details ~')}}</i><br><br>
    <div class="row">
        <div class="col-md-4 form-group">
            <b>{{Form::label('code', 'Code')}}</b>
            {{Form::text('code', '', ['class' => 'form-control input-rounded text-center', 'required',
            'placeholder' => 'School Code'])}}
        </div>
    
        <div class="col-md-8 form-group">
            <b>{{Form::label('name', 'Name')}}</b>
            {{ Form::text('name', '', ['class' => 'form-control input-rounded text-center', 'required',
            'placeholder' => 'School Name']) }}
        </div>
    </div>
    <div class="form-group">
        <b>{{Form::label('description', 'Description')}}</b>
        {{ Form::textarea('description', '', ['class' => 'form-control input-rounded text-center'
        , 'rows' => 3, 'required', 'placeholder' => 'School Description']) }}
    </div>
</center>