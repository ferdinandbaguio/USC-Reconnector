@extends('layouts.app_admin')


<!-- /header -->
@section('header')
    
@endsection



<!-- /content -->
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Create</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    {!! Form::open(['method'=>'post','route' => 'carolinians.store', 'files' => true]) !!}
                        {{ csrf_field() }}
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    {!! Form::text('firstname',null,['placeholder' => 'Firstname']) !!}
                                    
                                </div>
                                </div>

                                <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    {!! Form::text('middlename',null,['placeholder' => 'Middlename']) !!}
                                </div>
                                </div>
                            
                            <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                {!! Form::text('lastname',null,['placeholder' => 'Lastname']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="ui-radio ui-radio-inline">
                                    <input type="radio" name="test">
                                    <span class="input-span"></span>Male</label>
                                <label class="ui-radio ui-radio-inline">
                                    <input type="radio" name="test">
                                    <span class="input-span"></span>Female</label>
                        </div>
                        @if(request()->position != 'Admin')
                        <div class="form-group">
                            <select class="form-control">
                                <option value="1">Position</option>
                                <option value="2">Faculty</option>
                                <option value="3">Teacher</option>
                                <option value="4">Part-Time</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <select class="form-control">
                                <option value="1">Employment Status</option>
                                <option value="2">Employeed</option>
                                <option value="3">Unemployeed</option>
                            </select>
                        </div>
                            @endif

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-lock font-16"></i></div>
                                <input class="form-control" type="text" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-lock font-16"></i></div>
                                <input class="form-control" type="text" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Strength">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Weakness">
                            </div>
                        </div>

                        <button class="btn btn-success" type="submit">Submit</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                    
                    

@endsection

