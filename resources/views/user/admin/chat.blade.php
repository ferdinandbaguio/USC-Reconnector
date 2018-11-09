@extends('_layouts.admin')

@section('styles')

{{--  --}}

@endsection

@section('title')

USC - Reconnector

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        {{-- @if(isset($recipients))
            <div class="alert alert-secondary">
                |
                @foreach($recipients as $r)
                    {{$r->recipient->idnumber}}: {{$r->recipient->full_name}} |
                @endforeach
            </div>
        @endif --}}
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    Communications
                    {{-- Create New Group Chat --}}
                    <span data-toggle="modal" data-target="#create">
                        <button class="btn btn-primary pull-right" data-toggle="tooltip" 
                        data-original-title="Create A New User">
                            Create New Group Chat
                        </button>
                    </span>
                </div>

                <div class="card-body" id="app">
                    <chat-app :user="{{ Auth::user() }}"></chat-app>
                </div>
            </div>
        </div>
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
        <h4 class="modal-title" id="myModalLabel">Creating New Group Chat</h4>
    </div>
    {!! Form::open(['route' => 'StoreChat', 'method' => 'POST', 
                    'style' => 'display:inline-block;', 'files' => TRUE]) !!}
    @csrf
    <div class="modal-body">
        <div class="row">
            <div class="col-md-6 form-group">
                <b>{{Form::label('title', 'Title')}}</b>
                {{Form::text('title', '', ['class' => 'form-control input-rounded', 
                'placeholder' => 'Type in Title', 'required'])}}
            </div>
            <div class="col-md-6 form-group">
                <b>{{Form::label('sender', 'Sender')}}</b>
                {{Form::text('sender', '', ['class' => 'form-control input-rounded', 
                'placeholder' => 'Type in Sender', 'required'])}}
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
</div>
</div>
</div>

@endsection

@section('scripts')

<script>
    $('#create').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var modal = $(this)
    })
</script>

<script>
    $(document).ready(function(){
        fetch_user_data();
    
        function fetch_user_data(query = ''){
            $.ajax({
                url:"{{ route('live_search.action') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data){
                    $('tbody').html(data.table_data);
                    $('#total_records').text(data.total_data);
                }
            })
        }
    
        $(document).on('keyup', '#search', function(){
            var query = $(this).val();
            fetch_user_data(query);
        });
    });
</script>

@endsection