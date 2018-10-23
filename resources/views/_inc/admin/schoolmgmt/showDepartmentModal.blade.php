<center>
    <i>{{Form::label('userDetails', '~ Department Details ~')}}</i><br><br>
    <div class="row">
        <div class="col-md-4 form-group">
            <b>{{Form::label('idnumber', 'Code')}}</b>
            {{Form::text('code', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'dcode', 'disabled'])}}
        </div>
    
        <div class="col-md-8 form-group">
            <b>{{Form::label('type', 'Name')}}</b>
            {{ Form::text('name', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'dname', 'disabled']) }}
        </div>
    </div>
    <div class="form-group">
        <b>{{Form::label('type', 'Description')}}</b>
        {{ Form::textarea('description', '', ['class' => 'form-control input-rounded text-center',
        'id' => 'ddesc', 'rows' => 3, 'disabled']) }}
    </div>
    
    <br><i>{{Form::label('userDetails', '~ School Details ~')}}</i><br><br>
    <div class="row">
        <div class="col-md-4 form-group">
            {{Form::label('userDetails', 'School Code')}}
            {{Form::text('code', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'dscode', 'disabled'])}}
        </div>
        <div class="col-md-8 form-group">
            {{Form::label('userDetails', 'School Name')}}
            {{Form::text('code', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'dsname', 'disabled'])}}
        </div>
    </div>
</center>