{{ Form::hidden('userType', null, array('id' => 'type')) }}

<div class="row">
    <div class="col-md-9 form-group">
        <b>{{Form::label('pic', 'Profile Picture')}}</b>
        {{ Form::file('picture') }}
    </div>

    <div class="col-md-3 form-group">
        <center><b>{{ $users[0]->userType }} ID</b></center>
        {{ Form::text('id', null, ['class' => 'form-control input-rounded text-center', 'disabled']) }}
    </div>
</div>

<div class="row">
    <div class="col-md-4 form-group">
        <b>{{Form::label('idnumber', 'ID Number')}}</b>
        {{Form::number('idnumber', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Add ID Number', 'required', 'min' => 10000000, 'max' => 99999999])}}
    </div>

    <div class="col-md-8 form-group">
        <b>{{Form::label('firstName', 'First Name')}}</b>
        {{Form::text('firstName', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Type in the First Name', 'required'])}}
    </div>
</div>

<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('middleName', 'Middle Name')}}</b>
        {{Form::text('middleName', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Type in the Middle Name'])}}
    </div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('lastName', 'Last Name')}}</b>
        {{Form::text('lastName', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Type in the Last Name', 'required'])}}
    </div>
</div>

<div class="form-group">
    <b>{{Form::label('email', 'Email Address')}}</b>
    <div class="input-group">
        {{Form::email('email', '', 
        ['class' => 'form-control input-rounded', 'placeholder' => 'Type in the Email Address', 'required'])}}
        <div class="input-rounded input-group-addon">@example.com</div>
    </div>
</div>

<div class="row">    
    <div class="col-md-6 form-group">
        <b>{{Form::label('yearLevel', 'Year Level')}}</b>
        {{Form::selectRange('yearLevel', 1, 5, null, 
                                ['class' => 'form-control input-rounded', 'placeholder' => 'Choose Year Level', 'required'])}}</div>

    <div class="col-md-6 form-group">
        <b>{{Form::label('sex', 'Sex')}}</b>
        {{Form::select('sex', ['Male' => 'Male', 
                            'Female' => 'Female'], null, 
                            ['class' => 'form-control input-rounded', 'placeholder' => 'Choose Sex', 'required'])}}</div>
</div>

<div class="row">
    <div class="col-md-6 form-group">
        <b>{{Form::label('position', 'Position')}}</b>
        {{Form::text('position', '', ['class' => 'form-control input-rounded', 
        'placeholder' => 'Type in the Position', 'required'])}}</div>
                                    
    <div class="col-md-6 form-group">
            <b>{{Form::label('userStatus', 'User Status')}}</b>
            {{ Form::select('userStatus', ['Approved'   => 'Approved',
                                            'Pending'    => 'Pending',
                                            'Denied'     => 'Denied'], null, 
                                            ['class' => 'form-control input-rounded', 
                                            'placeholder' => 'Choose the User Status', 'required']) }}</div>  
</div>