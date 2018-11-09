@extends('_layouts.app')

@section('content')
<div class="container-fluid p-0 mb-4">
    <div class="row">
            <!-- FIRST PAGE -->
            <div class="col-12 col-md-6 p-4 mx-auto bg-light rounded formPage" page="1">
                <div class="row px-2">
                    <div class="col-9 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
                    <p class="m-auto text-white"> Occupation Form </p>
                    </div>
                    <div class="col-3 col-md-5 py-2">
                        job occupation
                    </div>
                    <div class="col-12" style="border-bottom: 1px solid gray;">
                    </div>
                </div> 
                <!-- FORM START -->
                @if($form->id)
                {!! Form::model($form, ['route' => ['alumnus.form.update', $form->id], 'method' => 'patch']) !!}
                @else 
                {!! Form::open(['url' => route('alumnus.form.store')]) !!}
                @endif
                <h1>Job information</h1>
                <hr>
                    {!! Form::label('', 'title') !!}
                <br>{!! Form::text('title',null,null,['class'=>'form-group'])!!}
                <br>{!! Form::label('', 'salaryRangeOne') !!}
                <br>{!! Form::text('salaryRangeOne',null,null,['class'=>'form-group'])!!}
                <br>{!! Form::label('', 'salaryRangeTwo') !!}
                <br>{!! Form::text('salaryRangeTwo',null,null,['class'=>'form-group'])!!}
                <br>{!! Form::label('', 'jobStart') !!}
                <br>{!! Form::text('jobStart',null,null,['class'=>'form-group'])!!}
                <br>{!! Form::label('', 'jobEnd') !!}
                <br>{!! Form::text('jobEnd',null,null,['class'=>'form-group'])!!}

                <h1>Company information</h1>
                <br>{!! Form::label('', 'name') !!}
                <br>{!! Form::text('name',null,null,['class'=>'form-group'])!!}
                <br>{!! Form::label('', 'address') !!}
                <br>{!! Form::text('address',null,null,['class'=>'form-group'])!!}
                <br>{!! Form::label('', 'description') !!}
                <br>{!! Form::textarea('description',null,null,['class'=>'form-group'])!!}
                <hr>
                <button type="submit" class="btn btn-sm btn-warning text-white mt-3" >Submit</button>
                {!! Form::close() !!}  
            </div> 
    </div> 
            <!-- END FIRST PAGE -->
</div>
@endsection

'name',
'address',
'description',
'picture',