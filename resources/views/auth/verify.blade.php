@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <div class="gx-main-content">
        <!--gx-wrapper-->
        <div class="gx-wrapper">

            <div class="login-container d-flex justify-content-center align-items-center animated slideInUpTiny animation-duration-3">
                <div class="login-content">

                    <div class="login-form">

                    <div class="card">
            <header class="panel-heading text-center">{{ __('Verify Your Email Address') }}</header>
            <div class="card-header"></div>

            <div class="card-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </div>
        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/gx-wrapper-->
@endsection
