<center>
    <i>{{Form::label('userDetails', '~ Course Details ~')}}</i><br><br>
    <div class="row">
        <div class="col-md-4 form-group">
            <b>{{Form::label('idnumber', 'Code')}}</b>
            {{Form::text('code', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'ccode', 'disabled'])}}
        </div>
    
        <div class="col-md-8 form-group">
            <b>{{Form::label('type', 'Name')}}</b>
            {{ Form::text('name', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'cname', 'disabled']) }}
        </div>
    </div>
    <div class="form-group">
        <b>{{Form::label('type', 'Description')}}</b>
        {{ Form::textarea('description', '', ['class' => 'form-control input-rounded text-center',
        'id' => 'cdesc', 'rows' => 3, 'disabled']) }}
    </div>

    <br><i>{{Form::label('userDetails', '~ Department Details ~')}}</i><br><br>
    <div class="row">
        <div class="col-md-4 form-group">
            {{Form::label('userDetails', 'Department Code')}}
            {{Form::text('code', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'cdcode', 'disabled'])}}
        </div>
        <div class="col-md-8 form-group">
            {{Form::label('userDetails', 'Department Name')}}
            {{Form::text('code', '', ['class' => 'form-control input-rounded text-center', 
            'id' => 'cdname', 'disabled'])}}
        </div>
    </div>
</center>