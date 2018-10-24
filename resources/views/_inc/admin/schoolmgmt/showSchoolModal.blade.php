<center>
    <i>{{Form::label('userDetails', '~ School Details ~')}}</i><br><br>
    <div class="row">
        <div class="col-md-4 form-group">
            <b>{{Form::label('idnumber', 'Code')}}</b>
            {{Form::text('code', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'scode', 'disabled'])}}
        </div>
    
        <div class="col-md-8 form-group">
            <b>{{Form::label('type', 'Name')}}</b>
            {{ Form::text('name', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'sname', 'disabled']) }}
        </div>
    </div>
    <div class="form-group">
        <b>{{Form::label('type', 'Description')}}</b>
        {{ Form::textarea('description', '', ['class' => 'form-control input-rounded text-center',
        'id' => 'sdesc', 'rows' => 3, 'disabled']) }}
    </div>
</center>