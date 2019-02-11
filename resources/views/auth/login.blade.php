@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="gx-main-content">
        <!--gx-wrapper-->
        <div class="gx-wrapper">

            <div class="login-container d-flex justify-content-center align-items-center animated slideInUpTiny animation-duration-3">
                <div class="login-content">

                    <div class="login-form">

                    <header class="panel-heading text-center">{{ __('Login') }}</header>
        <form method="POST" action="{{ route('login') }}" class="panel-body">
            @csrf
            <div class="form-group">
                <label class="control-label">Username</label>
                <input id="email" type="text" placeholder="Enter Username or Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif

            </div>
            <div class="form-group">
                <label class="control-label">Password</label>
                <input id="password" placeholder="Enter Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="checkbox"><label>

                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Keep me logged in </label></div>
            @if (Route::has('password.request'))
                <a class="pull-right m-t-xs" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

            <button type="submit" class="btn btn-info">{{ __('Login') }}</button>
           {{-- <div class="line line-dashed"></div>
            <a href="#" class="btn btn-facebook btn-block m-b-sm">
                <i class="fa fa-facebook pull-left"></i>Login with Facebook
            </a>
            <a href="#" class="btn btn-twitter btn-block">
                <i class="fa fa-twitter pull-left"></i>Login with Twitter
            </a>--}}
            <div class="line line-dashed"></div>
            <p class="text-muted text-center">
                <small>Do not have an account?</small>
            </p>
            <a href="{{route('register')}}" class="btn btn-white btn-block">Create an account</a></form>

                    </div>
                </div>
            </div>
        </div>
        <!--/gx-wrapper-->






@endsection
