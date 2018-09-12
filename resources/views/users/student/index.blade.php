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
                        <a class="btn btn-success btn-sm" href="{{url('carolinians/create?position=Student')}}"><i class="fa fa-plus"></i> New Student</a>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID Numnber</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                             <tbody>
                                @foreach($carolinians as $row)
                                <tr>
                                    <td>{{$row->idnumber}}</td>
                                    <td>{{$row->firstname }}</td>
                                    <td>{{$row->usertype}}</td>
                                    <td>{{$row->course->department->name}}</td>
                                    <td>{{$row->course->name}}</td>
                                    <td>
                                        <a href="{{url('carolinians/'.$row->id.'')}}" class="btn btn-success" style="color: white;">Show</a>
                                        {{ Form::open(['method' => 'DELETE', 'route' => ['carolinians.destroy', $row->id]]) }}
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

