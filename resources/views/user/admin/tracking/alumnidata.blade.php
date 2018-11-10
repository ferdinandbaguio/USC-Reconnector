@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/extra/vendors/DataTables/datatables.min.css') }}" />

@endsection

@section('title')

Companies

@endsection

@section('content')

<div class="ibox">
    <div class="ibox-head">
        Companies: {{$companies->count()}}
        <span data-toggle="modal" data-target="#create">
            <button class="btn btn-info" data-toggle="tooltip" data-original-title="Create A New Company">
                Add <i class="ti-plus"></i>                            
            </button>
        </span>
    </div>
    <div class="ibox-body">
    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Company</th>
                <th>Address</th>
                <th>Description</th>
                <th>Option</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Company</th>
                <th>Address</th>
                <th>Description</th>
                <th>Option</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($companies as $comp)
            <tr>
                <td>{{ $comp->name }}</td>
                <td><img src="/storage/flag_img/{{ $comp->country->flag }}" height="28" style="border-radius: 50%;" alt="Country Default">
                     {{ $comp->address }}
                </td>
                <td>{{ $comp->description }}</td>
                {{-- OPTIONS --}}
                <td>
                    {{-- Delete Request --}}
                    <span data-toggle="modal" data-target="#delete" data-id="{{ $comp->id }}">
                        <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-original-title="Delete">   
                            <i class="ti-trash"></i>                              
                        </button>
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
  
<!-- Create Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Creating New Company</h4>
    </div>
    {!! Form::open(['route' => 'StoreCompany', 'method' => 'POST', 
                    'style' => 'display:inline-block;', 'files' => TRUE]) !!}
    @csrf
    <div class="modal-body">
        <center>
        {{-- Profile Picture and ID Number --}}
        <div class="row">
            <div class="col-md-6 form-group">
                <b>{{Form::label('firstName', 'Name')}}</b>
                {{Form::text('name', '', ['class' => 'form-control input-rounded', 
                'placeholder' => 'Type Company Name', 'required'])}}
            </div>
            <div class="col-md-6 form-group">
                <b>{{Form::label('firstName', 'Address')}}</b>
                {{Form::text('address', '', ['class' => 'form-control input-rounded', 
                'placeholder' => 'Type Address', 'required'])}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <b>{{Form::label('firstName', 'Address')}}</b>
                {{Form::text('address', '', ['class' => 'form-control input-rounded', 
                'placeholder' => 'Type Address', 'required'])}}
            </div>
            <div class="col-md-6 form-group">
                <b>{{Form::label('firstName', 'Country')}}</b>
                <select name="country_id" class = "form-control input-rounded text-center">
                    @foreach ($countries as $country) 
                        <option value={{$country->id}}>{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <b>{{Form::label('firstName', 'Description')}}</b>
            {{Form::textarea('description', '', ['class' => 'form-control', 
            'placeholder' => 'Type Description', 'required', 'rows' => 3])}}
        </div>
        </center>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
</div>
</div>
</div>

<!-- Delete Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation #<span id='id'></span></h4>
    </div>
    {!! Form::open(['route' => ['DeleteCompany','Destroying'], 'method' => 'DELETE', 
                    'style' => 'display:inline-block;']) !!}
    @csrf
    <div class="modal-body">
        <p class="text-center">
            Are you sure you want to delete this?
        </p>
        {{ Form::hidden('id', '', array('id' => 'id')) }}
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
        {{Form::submit('Yes, Delete', ['class' => 'btn btn-warning'])}}
    </div>
    {!! Form::close() !!}
</div>
</div>
</div>

@endsection

@section('scripts')

<script>
    $('#delete').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var modal = $(this)
    
        modal.find('.modal-body #id').val(id);
    })
</script>
<script>
    $(function() {
        $('#example-table').DataTable({
            pageLength: 10, 
        });
    })
</script>
<script type="text/javascript" src="{{ asset('css/extra/vendors/DataTables/datatables.min.js') }}"></script>

@endsection