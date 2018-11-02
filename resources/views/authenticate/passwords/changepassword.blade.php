@extends('_layouts.app')

@section('header')
	<h1 class="h2">Change Password</h1>
@endsection

@section('content')

<div class="container-fluid py-4">
    {!! Form::model(null, ['route' => ['dochangepassword', Auth::user()->id], 'method' => 'patch']) !!}
    {{ csrf_field() }}
        <h1>Change Password</h1>
        <div class="row mt-4 ">
        @json($errors->all())
            <div class="col-md-8 mx-auto">
                 <label class="m-0"> Old Password</label>
                 <input type="password" class="form-control  {{ $errors->has('old_password') ? 'is-invalid' : '' }}" name="old_password" > 
                 @if($errors->has('old_password'))
                    <div class="invalid-feedback">
                    <small class="text-danger">{{ $errors->first('old_password') }}</small>
                    </div>
                @endif
                
                <label class="m-0"> New Password</label>
                <input type="password" class="form-control  {{ $errors->has('new_password') ? 'is-invalid' : '' }}" name="new_password"> 
                @if($errors->has('new_password'))
                    <div class="invalid-feedback">
                    <small class="text-danger">{{ $errors->first('new_password') }}</small>
                    </div>
                @endif

                <label class="m-0"> Confirm New Password</label>
                <input type="password" class="form-control  {{ $errors->has('new_password_confirmation') ? 'is-invalid' : '' }}" name="new_password_confirmation" > 
                @if($errors->has('new_password_confirmation'))
                    <div class="invalid-feedback">
                    <small class="text-danger">{{ $errors->first('new_password_confirmation') }}</small>
                    </div>
                @endif
                
            </div>
            <button type="submit" class="btn btn-sm btn-outline-info">
					Update Password
			</button>
            
        </div>

    </form>
</div>

@endsection