@extends('_layouts.admin')

@section('styles')



@endsection

@section('title')

Bulk Registration

@endsection

@section('content')

{!! Form::open(['route' => 'BulkImport', 'method' => 'POST', 'files' => TRUE]) !!}
    @csrf
    <label>Bulk Register: </label>
    <input type="file" name="uploaded_file" />
    <input type="submit" value="Upload">
{!! Form::close() !!}
Recent Registered Users
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($users))
            @foreach($users as $user)
                <tr>
                    <td>{{$user->full_name}}</td>
                    <td>{{$user->sex}}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

@endsection

@section('scripts')



@endsection