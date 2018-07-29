@extends('layouts.app')


<!-- /header -->
@section('header')

@endsection



<!-- /content -->
@section('content')
    <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Data Table</div>
                        <a class="btn btn-success btn-sm" href="{{url('carolinians/create?position=Admin')}}"><i class="fa fa-plus"></i> New Admin</a>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID Numnber</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                             <tbody>
                                @foreach($carolinians as $admin)
                                <tr>
                                    <td>{{$admin->idnumber}}</td>
                                    <td>{{$admin->firstname }}</td>
                                    <td>{{$admin->usertype}}</td>
                                    <td>{{'Department of Computer Science'}}</td>
                                    <td>
                                        <a href="#" class="btn btn-success" style="color: white;">Show</a>
                                        {{ Form::open(['method' => 'DELETE', 'route' => ['carolinians.destroy', $admin->id]]) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
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

