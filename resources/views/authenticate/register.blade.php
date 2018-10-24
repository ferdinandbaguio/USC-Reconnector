 <!-- FORM FOR Registering -->
<div class="modal fade" id="registerModal" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
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
                                    <label class="mx-auto"> Register as: </label>
                                    {!! Form::select('userType',[
                                            'Student' => 'Student',
                                            'Teacher' => 'Teacher',
                                            'Alumnus' => 'Alumni',
                                    ]) !!}
                                    <small class="text-danger">{{ $errors->first('userType') }}</small>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-8 mx-auto">
                                        {!! Form::label(null, 'USC Student ID Number: ') !!}
                                        {!! Form::text('registeridnumber',null, ['class' => 'form-control', 'placeholder' => 'I.D Number']) !!}
                                        <small class="text-danger">{{ $errors->first('registeridnumber') }}</small>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto">
                                        {!! Form::label(null, 'Last Name : ') !!}
                                        {!! Form::text('lastName',null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
                                        <small class="text-danger">{{ $errors->first('lastName') }}</small>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto">
                                        {!! Form::label(null, 'First Name  : ') !!}
                                        {!! Form::text('firstName',null, ['class' => 'form-control', 'placeholder' => 'First Name ']) !!}
                                        <small class="text-danger">{{ $errors->first('firstName') }}</small>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto">
                                        {!! Form::label(null, 'Middle Initial : ') !!}
                                        {!! Form::text('middleName',null, ['class' => 'form-control', 'placeholder' => 'Middle Initial ']) !!}
                                        <small class="text-danger">{{ $errors->first('middleName') }}</small>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto">
                                    {!! Form::label(null, 'Permanent Address : ') !!}
                                        {!! Form::text('address',null, ['class' => 'form-control', 'placeholder' => 'Permanent Address']) !!}
                                        <small class="text-danger">{{ $errors->first('address') }}</small>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto">
                                        {!! Form::label(null, 'E-mail Address : ') !!}
                                        {!! Form::text('email',null, ['class' => 'form-control', 'placeholder' => 'E-mail Address']) !!}
                                        <small class="text-danger">{{ $errors->first('email') }}</small>
                                    </div>
                                </div>
                                
                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto">
                                        {!! Form::label(null, 'Contact number 1 : ') !!}
                                        {!! Form::text('contactNo',null, ['class' => 'form-control', 'placeholder' => 'Contact number 1',]) !!}
                                        <small class="text-danger">{{ $errors->first('contactNo') }}</small>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto">
                                        {!! Form::label(null, ' Sex  : ') !!}
                                        <div>{!! Form::radio('sex[]', 'Single') !!} Male </div>
                                        <div>{!! Form::radio('sex[]', 'Married') !!} Female </div>
                                        <small class="text-danger">{{ $errors->first('sex') }}</small>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto">
                                        {!! Form::label(null, 'Civil Status : ') !!}
                                        <div>{!! Form::radio('civilStatus[]', 'Single') !!} Single </div>
                                        <div>{!! Form::radio('civilStatus[]', 'Married') !!} Married </div>
                                        <div>{!! Form::radio('civilStatus[]', 'Separated') !!} Separated </div>
                                        <div>{!! Form::radio('civilStatus[]', 'Single Parent') !!} Single Parent </div>
                                        <div>{!! Form::radio('civilStatus[]', 'Widow or Widower') !!} Widow or Widower </div>
                                        <small class="text-danger">{{ $errors->first('civilStatus') }}</small>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-8 mx-auto">
                                        {!! Form::label(null, 'Birthday : ') !!}
                                        <div>{!! Form::date('birthdate') !!}</div>
                                        <small class="text-danger">{{ $errors->first('birthdate') }}</small>
                                    </div>
                                </div>

                                <div class="row mt-4 mb-2">
                                    <div class="col-md-8 mx-auto">
                                        <input type="submit" value="Register" class="btn w-100 text-white blueBtn">
                                    </div>
                                </div>
                                
                            {{ Form::close() }}
            </div>
                <!-- FORM FOR Registering END-->
        </div>
    </div>
</div>
<script>

            var g_hasError = '{{count($errors->all())}}' * 1
            $(document).ready(function(){
                if(g_hasError) $("#registerModal").modal("show")
            })
</script>
