 <!-- FORM FOR Registering -->
<div class="modal fade" id="registerModal" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color:#ECECEC">
            <!-- Modal Header -->
            <div class="modal-header" style="border:none !important;">
                <button type="button" class="close ml-auto p-0" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- End of Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <div class="row pb-3">
                    <div class="col-12">
                    <img src="img/logo/studrec3.png" class="logoPic d-block mx-auto" alt="Logo">
                    </div>
                </div>
            <!-- End of Modal Body -->

            <div class="container-fluid" id="registerModal">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                                {!! Form::open(['url' => route('register.submit'), 'method'=>'POST']) !!}


                                @json($errors->all())   
                                <div class="row mt-4">
                                    <label class="mx-auto {{ $errors->has('userType') ? 'is-invalid' : '' }}"> Register as: </label>
                                    {!! Form::select('userType',[
                                            'Student' => 'Student',
                                            'Teacher' => 'Teacher',
                                            'Alumnus' => 'Alumni',
                                    ]) !!}
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-8 mx-auto {{ $errors->has('register_idnumber') ? 'is-invalid' : '' }}">
                                        {!! Form::label(null, 'USC Student ID Number: ') !!}
                                        @php  $attr = $errors->has('register_idnumber') ? 'is-invalid' : '' @endphp
                                        {!! Form::text('register_idnumber',null, ['class' => "form-control {$attr}", 'placeholder' => 'I.D Number']) !!}
                                        @if($errors->has('register_idnumber'))
                                            <small class="text-danger">{{ $errors->first('register_idnumber') }}</small>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto {{ $errors->has('lastName') ? 'is-invalid' : '' }}">
                                        {!! Form::label(null, 'Last Name : ') !!}
                                        @php  $attr = $errors->has('lastName') ? 'is-invalid' : '' @endphp
                                        {!! Form::text('lastName',null, ['class' => "form-control {$attr}", 'placeholder' => 'Last Name']) !!}
                                        @if($errors->has('lastName'))
                                             <small class="text-danger">{{ $errors->first('lastName') }}</small>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto {{ $errors->has('firstName') ? 'is-invalid' : '' }}">
                                        {!! Form::label(null, 'First Name  : ') !!}
                                        @php  $attr = $errors->has('firstName') ? 'is-invalid' : '' @endphp
                                        {!! Form::text('firstName',null, ['class' => "form-control {$attr}", 'placeholder' => 'First Name ']) !!}
                                        @if($errors->has('firstName'))
                                            <small class="text-danger">{{ $errors->first('middleName') }}</small>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto {{ $errors->has('middleName') ? 'is-invalid' : '' }}">
                                        {!! Form::label(null, 'Middle Initial : ') !!}
                                        @php  $attr = $errors->has('middleName') ? 'is-invalid' : '' @endphp
                                        {!! Form::text('middleName',null, ['class' => "form-control {$attr}", 'placeholder' => 'Middle Initial ']) !!}
                                        @if($errors->has('middleName'))
                                             <small class="text-danger">{{ $errors->first('middleName') }}</small>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto {{ $errors->has('address') ? 'is-invalid' : '' }}">
                                        {!! Form::label(null, 'Permanent Address : ') !!}
                                        @php  $attr = $errors->has('address') ? 'is-invalid' : '' @endphp
                                        {!! Form::text('address',null, ['class' => "form-control {$attr}", 'placeholder' => 'Permanent Address']) !!}
                                        @if($errors->has('address'))
                                            <small class="text-danger">{{ $errors->first('address') }}</small>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto {{ $errors->has('middleName') ? 'is-invalid' : '' }}">
                                        {!! Form::label(null, 'E-mail Address : ') !!}
                                        @php  $attr = $errors->has('email') ? 'is-invalid' : '' @endphp
                                        {!! Form::text('email',null, ['class' => "form-control {$attr}", 'placeholder' => 'E-mail Address']) !!}
                                        @if($errors->has('email'))
                                            <small class="text-danger">{{ $errors->first('email') }}</small>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto {{ $errors->has('middleName') ? 'is-invalid' : '' }}">
                                        {!! Form::label(null, 'Contact number 1 : ') !!}
                                        @php  $attr = $errors->has('contactNo') ? 'is-invalid' : '' @endphp
                                        {!! Form::text('contactNo',null, ['class' => "form-control {$attr}", 'placeholder' => 'Contact number',]) !!}
                                        @if($errors->has('contactNo'))
                                            <small class="text-danger">{{ $errors->first('contactNo') }}</small>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto {{ $errors->has('sex') ? 'is-invalid' : '' }}">
                                    @php  $attr = $errors->has('sex') ? 'is-invalid' : '' @endphp
                                        {!! Form::label(null, ' Sex  : ') !!}
                                        <div>{!! Form::radio('sex', 'Male') !!} Male </div>
                                        <div>{!! Form::radio('sex', 'Female') !!} Female </div>
                                        @if($errors->has('sex'))                                         
                                            <small class="text-danger">{{ $errors->first('sex') }}</small>
                                        @endif
                                       
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto {{ $errors->has('civilStatus') ? 'is-invalid' : '' }}">
                                        {!! Form::label(null, 'Civil Status : ') !!}
                                        <div>{!! Form::radio('civilStatus', 'Single') !!} Single </div>
                                        <div>{!! Form::radio('civilStatus', 'Married') !!} Married </div>
                                        <div>{!! Form::radio('civilStatus', 'Separated') !!} Separated </div>
                                        <div>{!! Form::radio('civilStatus', 'Single Parent') !!} Single Parent </div>
                                        <div>{!! Form::radio('civilStatus', 'Widow or Widower') !!} Widow or Widower </div>
                                        @if($errors->has('civilStatus'))                                         
                                            <small class="text-danger">{{ $errors->first('civilStatus') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto">
                                        {!! Form::label(null, 'Birthday : ') !!}
                                        <div>{!! Form::date('birthdate',null, ['class' => "form-control"]) !!}</div>
                                        @if($errors->has('birthdate'))
                                            <small class="text-danger">{{ $errors->first('birthdate') }}</small>
                                        @endif
                                        </div>
                                </div>

                                <div class="row mt-4 mb-2">
                                    <div class="col-md-8 mx-auto">
                                        <input type="submit" value="Register" class="btn w-100 text-white blueBtn">
                                    </div>
                                </div>
                                
                            {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<script>
var error = $('.modal .text-danger');
console.log(error)
error.closest('.modal').modal('show');
</script>