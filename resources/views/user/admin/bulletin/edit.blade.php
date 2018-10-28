@extends('_layouts.admin')

@section('styles') {{-- Styles Section Start --}}



@endsection {{-- Styles Section End --}}

@section('title') {{-- Title Section Start --}}

Edit Post

@endsection {{-- Title Section End --}}

@section('content') {{-- Content Section Start --}}

{!! Form::open(['route' => 'UpdatePost', 'method' => 'PATCH', 'files' => TRUE]) !!}
    {{Form::hidden('id', $post->id)}}
    {{Form::hidden('poster_id', Auth::user()->id)}}
    <div class="row">
        <div class="col-md-8">
            <img src="/storage/post_img/{{ $post->picture}}">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <b>{{Form::label('picture', 'Post Picture')}}:</b>
                {{Form::file('picture')}}<br><hr>
                <b>{{Form::label('title', 'Title')}}</b>
                {{Form::textarea('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Type in the Title',
                'required', 'rows' => 3])}}
            </div>
            <hr>
            <div class="form-group">
                <b>{{Form::label('title', 'Add Filter')}}:</b>&nbsp;&nbsp;
                <label class="checkbox-inline"><input type="checkbox" name="filter_option" id="u"> University&nbsp;&nbsp;</label>
                <label class="checkbox-inline" id="hideS"><input type="checkbox" name="filter_option1" id="s"> School&nbsp;&nbsp;</label>
                <label class="checkbox-inline" id="hideD"><input type="checkbox" name="filter_option2" id="d"> Department&nbsp;&nbsp;</label>
                <label class="checkbox-inline" id="hideCR"><input type="checkbox" name="filter_option3" id="cr"> Course&nbsp;&nbsp;</label>
                <label class="checkbox-inline" id="hideCL"><input type="checkbox" name="filter_option4" id="cl"> Class</label>
                <div class="row">
                    <div class="col-sm-6 form-group" id="stoggle" style="display:none;">
                        <b>{{Form::label('title', 'Choose School')}}</b>
                        <select class = "form-control input-rounded text-center" name="school_id" required>
                            <option disabled selected hidden>Choose School</option>
                            @foreach ($schools as $school) 
                                <option value={{$school->id}}>{{$school->code}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6 form-group" id="dtoggle" style="display:none;">
                        <b>{{Form::label('title', 'Choose Department')}}</b>
                        <select class = "form-control input-rounded text-center" name="department_id" required>
                            <option disabled selected hidden>Choose Department</option>
                            @foreach ($departments as $department) 
                                <option value={{$department->id}}>{{$department->code}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6 form-group" id="crtoggle" style="display:none;">
                        <b>{{Form::label('title', 'Choose Course')}}</b>
                        <select class = "form-control input-rounded text-center" name="course_id" required>
                            <option disabled selected hidden>Choose Course</option>
                            @foreach ($courses as $course) 
                                <option value={{$course->id}}>{{$course->code}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6 form-group" id="cltoggle" style="display:none;">
                        <b>{{Form::label('title', 'Choose Class')}}</b>
                        <select class = "form-control input-rounded text-center" name="group_class_id" required>
                            <option disabled selected hidden>Choose Class</option>
                            @foreach ($group_classes as $group_class) 
                                <option value={{$group_class->id}}>{{$group_class->room}}: {{$group_class->subject->code}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <span data-toggle="modal" data-target="#show-filter"
                        
                        >
                            <button type="button" class="btn btn-light" style="width:100%">
                                Show Filters
                            </button>
                        </span>
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-info" style="width:100%">
                            Add Filter
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><hr>
    <div class="form-group">
        <b>{{Form::label('announcement', 'Announcement')}}</b>
        {{Form::textarea('announcement', $post->announcement, ['id' => 'article-ckeditor', 'class' => 'form-control',
        'placeholder' => 'Type in the Announcement', 'required'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

<!-- Show Modal -->
<div class="modal fade" id="show-filter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Showing Filter</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12 form-group">
                <b>{{Form::label('idnumber', 'ID Number')}}</b>
                {{Form::text('idnumber', '', ['class' => 'form-control input-rounded text-center', 
                'id' => 'tidnum', 'disabled'])}}
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>
</div>
</div>

@endsection {{-- Content Section End --}}


@section('scripts') {{-- Scripts Section Start --}}

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
    $(document).ready(function(){
        $("#u").click(function(){
            $('select').prop('selectedIndex',0);
            $("#s").prop("checked", false);
            $("#d").prop("checked", false);
            $("#cr").prop("checked", false);
            $("#cl").prop("checked", false);
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
    $('#show-filter').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var modal = $(this)

        modal.find('.modal-body #id').val(id);
    })
</script>

@endsection {{-- Scripts Seciton End --}}