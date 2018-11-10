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
                    {{-- <div class="col-3 col-md-5 py-2">
                        job occupation
                    </div> --}}
                    <div class="col-12" style="border-bottom: 1px solid gray;">
                    </div>
                </div> 
                <!-- FORM START -->
                @if($form->id)
                {!! Form::model($form, ['route' => ['alumnus.form.update', $form->id], 'method' => 'patch']) !!}
                @else 
                {!! Form::open(['url' => route('occupation.store')]) !!}
                @endif
                <h1>Job information</h1>
                <hr>
                {{-- @json($errors->all())  --}}
                    {!! Form::label('occupationTitle', 'title') !!}
                <br>{!! Form::text('occupationTitle',null,null,['class'=>'form-group'])!!}
                    @if($errors->has('occupationTitle'))
                    <small class="text-danger"> {{$errors->first('occupationTitle')}} </small>
                    @endif
                <br>{!! Form::label('occupationAddress', 'occupationAddress') !!}
                <br>{!! Form::text('occupationAddress',null,null,['class'=>'form-group'])!!}
                @if($errors->has('occupationAddress'))
                <small class="text-danger"> {{$errors->first('occupationAddress')}} </small>
                @endif
                <br>{!! Form::label('salaryRangeOne', 'salaryRangeOne') !!}
                <br>{!! Form::text('salaryRangeOne',null,['class'=>'form-group salary'])!!}
                @if($errors->has('salaryRangeOne'))
                    <small class="text-danger"> {{$errors->first('salaryRangeOne')}} </small>
                    @endif
                <br>{!! Form::label('salaryRangeTwo', 'salaryRangeTwo') !!}
                <br>{!! Form::text('salaryRangeTwo',null,['class'=>'form-group salary'])!!}
                @if($errors->has('salaryRangeTwo'))
                    <small class="text-danger"> {{$errors->first('salaryRangeTwo')}} </small>
                    @endif
                <br>{!! Form::label('jobStart', 'jobStart') !!}
                <br>{!! Form::date('jobStart',null,['class'=>'form-group startDate'])!!}
                @if($errors->has('jobStart'))
                    <small class="text-danger"> {{$errors->first('jobStart')}} </small>
                    @endif
                <br>{!! Form::label('jobEnd', 'jobEnd') !!}
                <br>{!! Form::date('jobEnd',null,['class'=>'form-group'])!!}
                @if($errors->has('jobEnd'))
                    <small class="text-danger"> {{$errors->first('jobEnd')}} </small>
                    @endif
                <br>{!! Form::label('countries', 'Country') !!}
                <div>{!! Form::select('countries',['' => 'Please Choose'] + $countries,null,['class'=>'selectClass']) !!}
                @if($errors->has('countries'))
                    <small class="text-danger"> {{$errors->first('countries')}} </small>
                    @endif
                <br>
                </div>
                <h2>Occupation area</h2>
                <br>{!! Form::label('area_code', 'code') !!}
                <br>{!! Form::text('area_code',null,['class'=>'form-group'])!!}
                @if($errors->has('area_code'))
                    <small class="text-danger"> {{$errors->first('area_code')}} </small>
                    @endif
                <br>{!! Form::label('area_name', 'name') !!}
                <br>{!! Form::text('area_name',null,['class'=>'form-group'])!!}
                @if($errors->has('area_name'))
                    <small class="text-danger"> {{$errors->first('area_name')}} </small>
                    @endif
                <br>{!! Form::label('area_address', 'address') !!}
                <br>{!! Form::text('area_address',null,['class'=>'form-group'])!!}
                @if($errors->has('area_address'))
                    <small class="text-danger"> {{$errors->first('area_address')}} </small>
                    @endif
                <br>{!! Form::label('area_value', 'value') !!}
                <br>{!! Form::text('area_value',null,['class'=>'form-group'])!!}
                @if($errors->has('area_value'))
                    <small class="text-danger"> {{$errors->first('area_value')}} </small>
                    @endif
                <br>{!! Form::label('area_countries', 'Country') !!}
                <div>{!! Form::select('area_countries',['' => 'Please Choose'] + $countries,null,['class'=>'selectClass']) !!}
                @if($errors->has('area_countries'))
                    <small class="text-danger"> {{$errors->first('area_countries')}} </small>
                @endif
                 </div>
                <hr>
                <h1>Company information</h1>
                <br>{!! Form::label('companyName', 'name') !!}
                <br>{!! Form::text('companyName',null,['class'=>'form-group'])!!}
                @if($errors->has('companyName'))
                    <small class="text-danger"> {{$errors->first('companyName')}} </small>
                @endif
                <br>{!! Form::label('companyAddress', 'address') !!}
                <br>{!! Form::text('companyAddress',null,['class'=>'form-group'])!!}
                @if($errors->has('companyAddress'))
                    <small class="text-danger"> {{$errors->first('companyAddress')}} </small>
                @endif
                <br>{!! Form::label('companyDescription', 'description') !!}
                <br>{!! Form::textarea('companyDescription',null,['class'=>'form-group'])!!}
                @if($errors->has('companyDescription'))
                    <small class="text-danger"> {{$errors->first('companyDescription')}} </small>
                @endif
                <br>{!! Form::label('company_countries', 'Country') !!}
                <div>{!! Form::select('company_countries',['' => 'Please Choose'] + $countries,null,['class'=>'selectClass']) !!}
                @if($errors->has('company_countries'))
                    <small class="text-danger"> {{$errors->first('company_countries')}} </small>
                @endif
                </div>
                <h2>company area</h2>
                <br>{!! Form::label('company_area_code', 'code') !!}
                <br>{!! Form::text('company_area_code',null,['class'=>'form-group'])!!}
                @if($errors->has('company_area_code'))
                    <small class="text-danger"> {{$errors->first('company_area_code')}} </small>
                @endif
                <br>{!! Form::label('company_area_name', 'name') !!}
                <br>{!! Form::text('company_area_name',null,['class'=>'form-group'])!!}
                @if($errors->has('company_area_name'))
                    <small class="text-danger"> {{$errors->first('company_area_name')}} </small>
                @endif
                <br>{!! Form::label('company_area_address', 'address') !!}
                <br>{!! Form::text('company_area_address',null,['class'=>'form-group'])!!}
                @if($errors->has('company_area_address'))
                    <small class="text-danger"> {{$errors->first('company_area_address')}} </small>
                @endif
                <br>{!! Form::label('company_area_value', 'value') !!}
                <br>{!! Form::text('company_area_value',null,['class'=>'form-group'])!!}
                @if($errors->has('company_area_value'))
                    <small class="text-danger"> {{$errors->first('company_area_value')}} </small>
                @endif

                <br>{!! Form::label('company_countries_area', 'Company Country') !!}
                <div>{!! Form::select('company_countries_area',['' => 'Please Choose'] + $countries,null,['class'=>'selectClass']) !!}
                @if($errors->has('company_countries_area'))
                    <small class="text-danger"> {{$errors->first('company_countries_area')}} </small>
                @endif
            </div>
                <br>
                <button type="submit" class="btn btn-sm btn-warning text-white mt-3" >Submit</button>
                {!! Form::close() !!}  
            </div> 
    </div> 
            <!-- END FIRST PAGE -->
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $(".startDate").datepicker({ 
            minDate: 0, 
            dateFormat: 'yy-mm-dd'
        });
    });   
</script>
@endsection 