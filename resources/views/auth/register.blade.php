
@extends('layouts.auth')
@section('contentAuth')
    <div class="login-container">
    	<div class="login-wrapper flex-center">
    		<div class="login-widget-wrapper">
    			<div class="company-info">
    				<div class="erp-logo">


    				</div>

    			</div>
    			<div class="login-widget">
    				<div class="user-login">

        <form class="row form-app col-12 p-0 col-md-9 col-lg-9 col-xl-8 mx-auto" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
        @csrf
        <input type="hidden" name="user_type_id" value="1">
                       <div class="form-title">
    							<h1>Sign up</h1>
    						</div>
    						<div class="input-wrapper">
    							<span class="input-pholder">Username</span>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="First Name" >
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                                <span class="invalid-text">Already Exists</span>

    						</div>
    						<div class="input-wrapper">
    							<span class="input-pholder">Email</span>

                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
    							<span class="invalid-text">Already Exists</span>
    						</div>
    						<div class="input-wrapper">
    							<span class="input-pholder">Password</span>
    							<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <span class="invalid-text">Already Exists</span>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
    							<img src="visible.png" class="showPassImg" alt="Show Password" title="Show Password">
                            </div>
                            <div class="col-12 col-md-6">

                            <span class="ts-icon"><i class="fas fa-unlock-alt"></i></span>

                             <input id="password-confirm" class="form-control"  type="password" class="form-control" name="password_confirmation" required>

                                </div>

                                <div class="col-12 col-md-6">
                                <div class="form-group">
                             <span class="ts-icon"><i class="fas fa-signature"></i></span>

    						<input type="submit" value="Sign up" class="sign-up-btn">
                        </form>



    					<div class="register-forget">
    						<span related-form="sign-in-form" class="signin-btn"><a href="{{url('/login')}}">Already registered? Sign in</a></span>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
@endsection
