@extends('layouts.app')

@section('title', 'Login')
@section('pageheader', 'Welcome to Nixby CEM! 👋')
@section('content')
    <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
    <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label class="form-label" for="email">Email</label>
            <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                   id="email" type="text" name="email" required autocomplete="email" tabindex="1"/>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <div class="d-flex justify-content-between">
                <label for="password">Password</label><a href="{{ route('password.request') }}"><small>Forgot
                        Password?</small></a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
                <input class="form-control form-control-merge @error('password') is-invalid @enderror" name="password"
                       required autocomplete="current-password" id="password" type="password" tabindex="2"/>
                <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" tabindex="3" name="remember"
                       id="remember" {{ old('remember') ? 'checked' : '' }} />
                <label class="custom-control-label" for="remember-me"> Remember Me</label>
            </div>
        </div>
        <button class="btn btn-primary btn-block" type="submit" tabindex="4">Sign in</button>
    </form>
    <p class="text-center mt-2"><span>New on our platform?</span><a href="{{ route('register') }}"><span>&nbsp;Create an account</span></a>
    </p>
    {{--<div class="divider my-2">--}}
    {{--    <div class="divider-text">or</div>--}}
    {{--</div>--}}
    {{--<div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="javascript:void(0)"><i data-feather="facebook"></i></a><a class="btn btn-twitter white" href="javascript:void(0)"><i data-feather="twitter"></i></a><a class="btn btn-google" href="javascript:void(0)"><i data-feather="mail"></i></a><a class="btn btn-github" href="javascript:void(0)"><i data-feather="github"></i></a></div>--}}
@endsection
