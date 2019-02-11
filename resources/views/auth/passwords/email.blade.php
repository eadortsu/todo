@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="gx-main-content">
        <!--gx-wrapper-->
        <div class="gx-wrapper">

            <div class="login-container d-flex justify-content-center align-items-center animated slideInUpTiny animation-duration-3">
                <div class="login-content">

                    <div class="login-form">

                    <header class="panel-heading text-center">{{ __('Reset Password') }}</header>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form class="panel-body" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </div>
        </form>

                    </div>
                </div>
            </div>
        </div>
        <!--/gx-wrapper-->


@endsection
