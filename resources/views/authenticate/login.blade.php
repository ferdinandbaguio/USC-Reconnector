 <!-- FORM FOR SIGNING IN -->
<div class="modal fade" id="loginModal" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
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
            
            <!-- End of Modal Body       -->
                <div class="container-fluid" id="loginForm">
                            <form action="{{route('login.submit')}}" method="POST">
                            
                            {{ csrf_field() }}
                            <div class="row mt-4">
                                <div class="col-md-8 mx-auto {{ $errors->has('idnumber') ? 'is-invalid' : '' }}">
                                <label class="m-0"> ID Number:</label>
                                <input type="text" class="form-control " name="idnumber" placeholder="I.D Number" value="{{old('idnumber')}}"> 
                                <small class="text-danger">{{ $errors->first('idnumber') }}</small>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-8 mx-auto">
                                <label class="m-0"> Password:</label>
                                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" placeholder="Password"> 
                                @if($errors->has('password'))
                                    <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                    </div>
                                @endif
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-8 mx-auto">
                                <button type="submit" id="loginButton" class="btn w-100 text-white blueBtn">Login</button>
                                </div>
                            </div>
                            <!-- <div class="row mt-2 mb-4">
                                <div class="col-md-8 mx-auto">
                                <a href="#" id="regClick"> Register Here</a> <label> to create an account</label> 
                                </div>
                            </div> -->
                            </form>
                        
                </div>
            </div>
        </div>
    </div>
</div>
            <script>

            var g_hasError = '{{count($errors->all())}}' * 1
            $(document).ready(function(){
                if(g_hasError) $("#loginModal").modal("show")
            })
            </script>
            <!-- FORM FOR SIGNING IN END-->  