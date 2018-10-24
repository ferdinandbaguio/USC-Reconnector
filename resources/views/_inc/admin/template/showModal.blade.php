<center>
        <i>{{Form::label('userDetails', '~ User Details ~')}}</i><br><br>
        {{-- ID Number, User Type, ID --}}
        <div class="row">
            <div class="col-md-3 form-group">
                <b>{{Form::label('idnumber', 'ID Number')}}</b>
                {{Form::text('idnumber', '', ['class' => 'form-control input-rounded text-center', 
                'id' => 'idnum', 'disabled'])}}
            </div>
        
            <div class="col-md-6 form-group">
                <b>{{Form::label('type', 'User Type')}}</b>
                {{ Form::text('type', null, ['class' => 'form-control input-rounded text-center', 
                'id' => 'type', 'disabled']) }}
            </div>
        
            <div class="col-md-3 form-group">
                <b>{{Form::label('type', $userType.' ID')}}</b>
                {{ Form::text('id', null, ['class' => 'form-control input-rounded text-center',
                'id' => 'id', 'disabled']) }}
            </div>
        </div>
    </center>