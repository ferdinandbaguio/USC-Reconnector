@extends('_layouts.admin')

@section('styles') {{-- Styles Section Start --}}



@endsection {{-- Styles Section End --}}

@section('title') {{-- Title Section Start --}}

Create New Post

@endsection {{-- Title Section End --}}

@section('content') {{-- Content Section Start --}}

{!! Form::open(['route' => 'StorePost', 'method' => 'POST', 'files' => TRUE]) !!}
    {{Form::hidden('poster_id', Auth::user()->id)}}
    <div class="row">
        <div class="col-md-3 form-group">
            <div class="form-group">
                {{Form::label('picture', 'Post Picture')}}<br>
                {{Form::file('picture')}}
            </div>
        </div>
        <div class="col-md-5 form-group">
            {{Form::label('title', 'Choose Filter')}}<br>
            <label class="checkbox-inline"><input type="checkbox" name="filter_option" id="u">University&nbsp;&nbsp;</label>
            <label class="checkbox-inline" id="hideS"><input type="checkbox" name="filter_option1" id="s">School&nbsp;&nbsp;</label>
            <label class="checkbox-inline" id="hideD"><input type="checkbox" name="filter_option2" id="d">Department&nbsp;&nbsp;</label>
            <label class="checkbox-inline" id="hideCR"><input type="checkbox" name="filter_option3" id="cr">Course&nbsp;&nbsp;</label>
            <label class="checkbox-inline" id="hideCL"><input type="checkbox" name="filter_option4" id="cl">Class</label>
        </div>
        <div class="col-md-2 form-group" id="stoggle" style="display:none;">
            <b>{{Form::label('title', 'Choose School')}}</b>
            <select class = "form-control input-rounded text-center" name="school_id" required>
                <option disabled selected hidden>Choose School</option>
                @foreach ($schools as $school) 
                    <option value={{$school->id}}>{{$school->code}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2 form-group" id="dtoggle" style="display:none;">
            <b>{{Form::label('title', 'Choose Department')}}</b>
            <select class = "form-control input-rounded text-center" name="department_id" required>
                <option disabled selected hidden>Choose Department</option>
                @foreach ($departments as $department) 
                    <option value={{$department->id}}>{{$department->code}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Type in the Title', 'required'])}}
        </div>
        <div class="col-md-2 form-group" id="crtoggle" style="display:none;">
            <b>{{Form::label('title', 'Choose Course')}}</b>
            <select class = "form-control input-rounded text-center" name="course_id" required>
                <option disabled selected hidden>Choose Course</option>
                @foreach ($courses as $course) 
                    <option value={{$course->id}}>{{$course->code}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2 form-group" id="cltoggle" style="display:none;">
            <b>{{Form::label('title', 'Choose Class')}}</b>
            <select class = "form-control input-rounded text-center" name="group_class_id" required>
                <option disabled selected hidden>Choose Class</option>
                @foreach ($group_classes as $group_class) 
                    <option value={{$group_class->id}}>{{$group_class->room}}: {{$group_class->subject->code}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        {{Form::label('announcement', 'Announcement')}}
        {{Form::textarea('announcement', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 
        'placeholder' => 'Type in the Announcement', 'required'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection {{-- Content Section End --}}


@section('scripts') {{-- Scripts Section Start --}}

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
    $(document).ready(function(){
        $("#u").click(function(){
            $("#hideS").toggle();
            $("#hideD").toggle();
            $("#hideCR").toggle();
            $("#hideCL").toggle();
            $("#stoggle").hide();
            $("#dtoggle").hide();
            $("#crtoggle").hide();
            $("#cltoggle").hide();
        });
        $("#s").click(function(){
            $("#stoggle").toggle();
        });
        $("#d").click(function(){
            $("#dtoggle").toggle();
        });
        $("#cr").click(function(){
            $("#crtoggle").toggle();
        });
        $("#cl").click(function(){
            $("#cltoggle").toggle();
        });
    });
</script>

@endsection {{-- Scripts Seciton End --}}