@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <div class="gx-main-content">
        <!--gx-wrapper-->
        <div class="gx-wrapper">

            <div class="login-container d-flex justify-content-center align-items-center animated slideInUpTiny animation-duration-3">
                <div class="login-content">

                    <div class="login-form">

                    <header class="panel-heading bg bg-primary text-center">{{ __('Register') }}</header>

        <form method="POST" action="{{ route('register') }}" class="panel-body">
            @csrf
            <div class="form-group"><label class="control-label">Name</label>
                <input id="name" type="text" placeholder="Enter Your Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group"><label class="control-label">Your email address</label>
                <input id="email" type="email" placeholder="Enter Your Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group"><label class="control-label">Creat a Username</label>
                <input id="username" type="text" placeholder="Create a Username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group"><label class="control-label">Create Password</label>
                <input id="password" type="password" placeholder="Enter New Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group"><label class="control-label">Confirm Password</label>
                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>

            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"  required> Agree the <a href="#">terms and policy</a>
                </label>
            </div>

            <button type="submit" class="btn btn-info">Register</button>

           {{--
           <div class="line line-dashed"></div>
           <a href="#" class="btn btn-facebook btn-block m-b-sm">
                <i class="fa fa-facebook pull-left"></i>Register with Facebook
            </a>
            <a href="#" class="btn btn-twitter btn-block">
                <i class="fa fa-twitter pull-left"></i>Register in with Twitter
            </a>--}}
            <div class="line line-dashed"></div>
            <p class="text-muted text-center">
                <small>Already have an account?</small>
            </p>
            <a href="{{route('login')}}" class="btn btn-white btn-block">Login</a></form>

                    </div>
                </div>
            </div>
        </div>
        <!--/gx-wrapper-->




@endsection
