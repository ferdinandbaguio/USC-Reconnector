@extends('_layouts.alumnus')


<!-- /header -->
@section('header')
    
@endsection



<!-- /content -->
@section('content')
    
<div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Data Table</div>
                        <a class="btn btn-success btn-sm" href="{{url('carolinians/create?position=Teacher')}}"><i class="fa fa-plus"></i> New Teacher</a>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID Numnber</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                             <tbody>
                                @foreach($users as $row)
                                <tr>
                                    <td>{{$row->idNumber}}</td>
                                    <td>{{$row->full_name }}</td>
                                    <td>{{$row->userType}}</td>
                                    <td>{{$row->userStatus}}</td>
                                    <td>
                                        <a href="#" class="btn btn-success" style="color: white;">Accept</a>
                                        {{ Form::open(['method' => 'DELETE', ]) }}
                                        {{ Form::submit('Decline', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}
                                    </td>  
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID Numnber</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                </tr>
                            </tfoot>    
                        </table>
                    </div>
                </div>
</div>
@endsection

