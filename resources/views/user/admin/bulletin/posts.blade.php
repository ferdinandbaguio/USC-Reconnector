@extends('_layouts.admin')

@section('styles') {{-- Styles Section Start --}}



@endsection {{-- Styles Section End --}}

@section('title')

Posts

@endsection

@section('content') {{-- Content Section Start --}}

<div class="row">
    <div class="col-sm-11">
    </div>
    <div class="col-sm-1">
        <a href="{{route('CreatePost')}}">
            <button class="btn btn-info " data-toggle="tooltip" data-original-title="Create A New Post">
                Add <i class="ti-plus"></i>                            
            </button>
        <a href="">
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-8">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/img/post_img/Today's_Carolinian.jpg" alt="Post">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>
                            Post 1
                        </h5>
                        <p>
                            This is Post 1
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/img/post_img/Today's_Carolinian1.jpg" alt="Post">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>
                            Post 2
                        </h5>
                        <p>
                            This is Post 2
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/img/post_img/Today's_Carolinian2.jpg" alt="Post">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>
                            Post 3
                        </h5>
                        <p>
                            This is Post 3
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/img/post_img/Today's_Carolinian3.jpg" alt="Post">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>
                            Post 4
                        </h5>
                        <p>
                            This is Post 4
                        </p>
                    </div>
                </div>
            </div>
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
    <div class="col-lg-4" style="background:grey">
    </div>
</div>

@endsection {{-- Content Section End --}}


@section('scripts') {{-- Scripts Section Start --}}



@endsection {{-- Scripts Seciton End --}}