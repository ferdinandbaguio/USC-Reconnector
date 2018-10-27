@extends('_layouts.admin')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/unique/posts.css')}}" />

@endsection

@section('title')

Posts 
<a href="{{route('CreatePost')}}">
    <button class="btn btn-primary pull-right" data-toggle="tooltip" data-original-title="Create A New Post">
        Add Post <i class="ti-plus"></i>                            
    </button>
</a>

@endsection

@section('content')

<div class="row">
    <div class="col-sm-8">
        <h5><i>All Posts</i></h5>
    </div>
    <div class="col-sm-4">
        <h5><i>Post Cards</i></h5>
    </div>
</div>
<br>
<div class="row">
    {{-- Main Content --}}
    <div class="col-lg-8">
        {{-- Posts Carousel --}}
        @if(count($posts) > 0)
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @for($i = 0; $i < count($posts);$i++)
                        @if($i == 0)
                            <div class="carousel-item active">
                        @else
                            <div class="carousel-item">
                        @endif
                                <img class="d-block w-100 blur-image" src="/storage/post_img/{{ $posts[$i]->picture }}" alt="Post">
                                <div class="carousel-caption d-none d-md-block" id="carousel-layer">
                                    <h3>
                                        {{ $posts[$i]->title }}
                                    </h3>
                                    <span id="mytext">{!! $posts[$i]->announcement !!}</span>
                                    Posted at: {{ $posts[$i]->created_at }}
                                </div>
                            </div>
                    @endfor
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        @endif
    </div>
    {{-- Side Content --}}
    <div class="col-lg-4" style="max-height: 425px; overflow-y: scroll;">
        <?php $i=0;?>
        @foreach($posts as $post)
            <div class="card bg-dark text-white">
                <img class="card-img" src="/storage/post_img/{{ $post->picture}}" alt="Card image">
                <div class="card-img-overlay" id="card-layer">
                    <center>
                        <h4 id="inc-padding" class="card-title">{{ $post->title}}</h4>
                        Posted at: {{ $post->created_at }}
                        <div id="group-buttons">
                            <a href="{{ route('EditPost', $post->id) }}" class="btn btn-warning"  id="card-button">
                                Edit
                            </a>
                            <span data-toggle="modal" data-target="#delete" data-id="{{ $post->id }}">
                                <button class="btn btn-danger" id="card-button">
                                    Delete
                                </button>
                            </span>
                        </div>
                    </center>
                </div>
            </div>
            @if($i < count($posts)-1)
            <br>
            @endif
            <?php $i++;?>
        @endforeach
    </div>
</div>
<br><br>
<hr>

<!-- Delete Post Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Post Confirmation</h4>
    </div>
    {!! Form::open(['route' => 'DeletePost', 'method' => 'DELETE', 
                    'style' => 'display:inline-block;']) !!}
    @csrf
    <div class="modal-body">
        <p class="text-center">
            Are you sure you want to delete this?
        </p>
        {{ Form::hidden('id', '', ['id' => 'id']) }}
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

@endsection