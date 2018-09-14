@extends('layouts.app_admin')


<!-- /header -->
@section('header')

@endsection



<!-- /content -->
@section('content')
    <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Profile</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Profile</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="ibox">
                            <div class="ibox-body text-center">
                                <div class="m-t-20">
                                  
                                    <img class="img-circle" src="{{asset('dist/assets/img/users/u3.jpg')}}" />
                                </div>
                                <h5 class="font-strong m-b-10 m-t-10">{{$carolinians->fullname}}</h5>
                                <div class="m-b-20 text-muted">Web Developer</div>
                                <div class="profile-social m-b-20">
                                    <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                                    <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                                    <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
                                    <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                                </div>
                                <div>
                                    <button class="btn btn-info btn-rounded m-b-5"><i class="fa fa-plus"></i> Follow</button>
                                    <button class="btn btn-default btn-rounded m-b-5">Message</button>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="ibox">
                            <div class="ibox-body">
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-1" data-toggle="tab"><i class="ti-user"></i> My Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-settings"></i> Settings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-3" data-toggle="tab"><i class="ti-announcement"></i> Feeds</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-4" data-toggle="tab"><i class="ti-info-alt"></i> Alumni Form</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-1">
                                        <div class="row">
                                            <div class="col-md-6" style="border-right: 1px solid #eee;">
                                               user info here / if alumni display info
                                               {{  'name :'. $carolinian->fullname}}
                                               
                                               
                                            </div>
                                            <div class="col-md-6" style="border-right: 1px solid #eee;">
                                           
                                               <h1>almuni info</h1>
                                               
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-1">
                                        
                                    </div>

                                    <div class="tab-pane fade" id="tab-2">
                                        <form action="javascript:void(0)">
                                            <div class="row">
                                                <div class="col-sm-6 form-group">
                                                    <label>First Name</label>
                                                    <input class="form-control" type="text" placeholder="{{$carolinian->firstname}}">
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Last Name</label>
                                                    <input class="form-control" type="text" placeholder="{{$carolinian->lastname}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="text" placeholder="Email address">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" type="password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label class="ui-checkbox">
                                                    <input type="checkbox">
                                                    <span class="input-span"></span>Remamber me</label>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-default" type="button">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="tab-3">
                                        <h5 class="text-info m-b-20 m-t-20"><i class="fa fa-bullhorn"></i> Latest Feeds</h5>
                                        <ul class="media-list media-list-divider m-0">
                                            <li class="media">
                                                <div class="media-img"><i class="ti-user font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading">New customer <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-info-alt font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading text-warning">Server Warning <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-announcement font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading">7 new feedback <small class="float-right text-muted">Today</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-check font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading text-success">Issue fixed <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-shopping-cart font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading">7 New orders <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-img"><i class="ti-reload font-18 text-muted"></i></div>
                                                <div class="media-body">
                                                    <div class="media-heading text-danger">Server warning <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text.</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="tab-4">
                                        {!! Form::open(['method'=>'post', 'route' => 'carolinians.store']) !!}
                                                {{ csrf_field() }}
                                            <div class="card">
                                                <H1>industry</H1>
                                                <div class="card-body">
                                                    <div>
                                                        {!! Form::text('industryName',null) !!}
                                                    </div>
                                                    <div>
                                                        {!! Form::text('firstname',null) !!}
                                                    </div>
                                                    <div>
                                                        {!! Form::text('firstname',null) !!}
                                                    </div>
                                                    <div>
                                                        {!! Form::text('firstname',null) !!}
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <H1>company</H1>
                                                <div class="card-body">
                                                    <div>
                                                        {!! Form::text('firstname',null) !!}
                                                    </div>
                                                    <div>
                                                        {!! Form::text('firstname',null) !!}
                                                    </div>
                                                    <div>
                                                        {!! Form::text('firstname',null) !!}
                                                    </div>
                                                    <div>
                                                        {!! Form::text('firstname',null) !!}
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <H1>job</H1>
                                                <div class="card-body">
                                                    <div>
                                                        {!! Form::text('jobname',null) !!}
                                                    </div>
                                                    <div>
                                                        {!! Form::text('jobaddress',null) !!}
                                                    </div>
                                                    <div>
                                                        {!! Form::text('jobStart',null) !!}
                                                    </div>
                                                    <div>
                                                        {!! Form::text('jobEnd',null) !!}
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .profile-social a {
                        font-size: 16px;
                        margin: 0 10px;
                        color: #999;
                    }

                    .profile-social a:hover {
                        color: #485b6f;
                    }

                    .profile-stat-count {
                        font-size: 22px
                    }
                </style>
             
            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
                <a class="px-4" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">BUY PREMIUM</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
@endsection

asdasdsa