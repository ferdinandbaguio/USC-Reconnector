@extends('_layouts.admin')

@section('styles') {{-- Styles Section Start --}}



@endsection {{-- Styles Section End --}}

@section('title') {{-- Title Section Start --}}

Create New Post

@endsection {{-- Title Section End --}}

@section('content') {{-- Content Section Start --}}

{!! Form::open(['route' => 'UpdatePost', 'method' => 'PATCH', 'files' => TRUE]) !!}
    {{Form::hidden('id', $post->id)}}
    {{Form::hidden('poster_id', Auth::user()->id)}}
    <img src="/storage/post_img/{{ $post->picture}}">
    <div class="form-group">
        <br>
        {{Form::label('picture', 'Post Picture')}}<br>
        {{Form::file('picture')}}
    </div>
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::textarea('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Type in the Title', 
        'required', 'rows' => 3])}}
    </div>
    <div class="form-group">
        {{Form::label('announcement', 'Announcement')}}
        {{Form::textarea('announcement', $post->announcement, ['id' => 'article-ckeditor', 'class' => 'form-control', 
        'placeholder' => 'Type in the Announcement', 'required'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection {{-- Content Section End --}}


@section('scripts') {{-- Scripts Section Start --}}

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>

@endsection {{-- Scripts Seciton End --}}