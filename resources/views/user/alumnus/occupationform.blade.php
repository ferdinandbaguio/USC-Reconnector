@extends('_layouts.app')
@section('header')	
<link rel="stylesheet" type="text/css" href="{{ asset('css/unique/alumnus/occupation.css') }}">	
@endsection
@section('content')
<div class="container-fluid p-0 mb-4">
    <div class="row">
            <!-- FIRST PAGE -->
            <div class="col-12 col-md-6 p-4 mx-auto bg-light rounded formPage" page="1" style="margin-top: 120px;">
                @if(session('success'))
                <div class="alert alert-success">
                     {{session('success')}}
                </div>
              @endif
                <div class="row px-2">
                    <div class="col-9 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
                    <p class="m-auto text-white"> Job Information </p>
                    </div>
                    
                    <div class="col-12" style="border-bottom: 1px solid gray;">
                    </div>
                </div> 
                

                <!-- FORM START -->
                @if($form->id)
                {!! Form::model($form, ['route' => ['alumnus.occupationform.update', $form->id], 'method' => 'patch']) !!}
                @else 
                {!! Form::open(['url' => route('occupation.store')]) !!}
                @endif
               
                <hr>
                @json($errors->all())
                    {!! Form::label('occupationTitle', 'Job Name') !!}
                <br>{!! Form::text('occupationTitle',$form->title,null,['class'=>'form-group'])!!}
                    @if($errors->has('occupationTitle'))
                    <small class="text-danger"> {{$errors->first('occupationTitle')}} </small>
                    @endif
                <div class="d-none" id="map"></div>
                <br><br>{!! Form::label('occupationAddress','Job Address') !!}
                <br>{!! Form::text('occupationAddress',$form->address,['id' => 'pac-input', 'class'=>'form-group controls', 'placeholder'=> 'Search Box', 'required'])!!}             
                <input type="text" id="latitudeData" name="latitude" value="{{$form->latitude}}" readonly>
                <input type="text" id="lngData" name="longitude" value="{{$form->latitude}}" readonly>
                @if($errors->has('occupationAddress'))
                <small class="text-danger"> {{$errors->first('occupationAddress')}} </small>
                @endif
                <br>{!! Form::label('salaryRangeOne', 'Minimum Salary Range') !!}
                <br>{!! Form::text('salaryRangeOne',null,['class'=>'form-group salary'])!!}
                @if($errors->has('salaryRangeOne'))
                    <small class="text-danger"> {{$errors->first('salaryRangeOne')}} </small>
                    @endif
                <br>{!! Form::label('salaryRangeTwo', 'Maximum Salary Range') !!}
                <br>{!! Form::text('salaryRangeTwo',null,['class'=>'form-group salary'])!!}
                @if($errors->has('salaryRangeTwo'))
                    <small class="text-danger"> {{$errors->first('salaryRangeTwo')}} </small>
                    @endif
                <br>{!! Form::label('jobStart', 'Date of Employed') !!}
                <br>{!! Form::date('jobStart',null,['class'=>'form-group startDate'])!!}
                @if($errors->has('jobStart'))
                    <small class="text-danger"> {{$errors->first('jobStart')}} </small>
                    @endif
                <br>{!! Form::label('jobEnd', 'End Date of contract Employed') !!}
                <br>{!! Form::date('jobEnd',null,['class'=>'form-group'])!!}
                @if($errors->has('jobEnd'))
                    <small class="text-danger"> {{$errors->first('jobEnd')}} </small>
                    @endif
                <br>{!! Form::label('countries', 'Country') !!}
                <div>{!! Form::select('countries', $countries,isset($form->country->id)?$form->country->id:NULL,['class'=>'selectClass']) !!}
                @if($errors->has('countries'))
                    <small class="text-danger"> {{$errors->first('countries')}} </small>
                    @endif
                <br>
                </div>

                <br><br>
                <div class="row px-2">
                    <div class="col-9 col-md-7 py-2 rounded-top" style="background-color:#0A5492;">
                    <p class="m-auto text-white"> Company Information </p>
                    </div>
                    
                    <div class="col-12" style="border-bottom: 1px solid gray;">
                    </div>
                </div> 
                <br>{!! Form::label('companyName', 'Company Name') !!}
                <br>{!! Form::text('companyName',isset($form->company->name)?$form->company->name:NULL,['class'=>'form-group'])!!}
                @if($errors->has('companyName'))
                    <small class="text-danger"> {{$errors->first('companyName')}} </small>
                @endif
                
                <div class="d-none" id="map"></div>
                <br><br>{!! Form::label('companyAddress','Company Address') !!}
                <br>{!! Form::text('companyAddress',isset($form->company->address)?$form->company->address:NULL)!!}             

                @if($errors->has('companyAddress'))
                    <small class="text-danger"> {{$errors->first('companyAddress')}} </small>
                @endif
                <br>{!! Form::label('companyDescription', 'Company Background') !!}
                <br>{!! Form::textarea('companyDescription',isset($form->company->description)?$form->company->description:NULL,['class'=>'form-group'])!!}
                @if($errors->has('companyDescription'))
                    <small class="text-danger"> {{$errors->first('companyDescription')}} </small>
                @endif
                <br>{!! Form::label('company_countries', 'Company Country') !!}
                <div>{!! Form::select('company_countries',$countries,isset($form->company->country->id)?$form->company->country->id:NULL,['class'=>'selectClass']) !!}
                @if($errors->has('company_countries'))
                    <small class="text-danger"> {{$errors->first('company_countries')}} </small>
                @endif
                </div>
             
                <br>
                <button type="submit" class="btn btn-sm btn-warning text-white mt-3" >Submit</button>
                {!! Form::close() !!}  
            </div> 
    </div> 
            <!-- END FIRST PAGE -->
</div>
<script src="/js/unique/alumnus/mapForm.js"></script>	
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtg-XSKJw7nLDyIan_k_FD2z8vdlIczvY&libraries=places&callback=mapofJonas" async defer></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".startDate").datepicker({ 
            minDate: 0, 
            dateFormat: 'yy-mm-dd'
        });
        mapofJonas()

    });   
</script>
@endsection 