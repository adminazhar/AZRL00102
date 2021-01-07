@extends('users.layouts.app')

@section('title', 'Login')
@section('pageheader', 'Adventure starts here 🚀')
@section('content')
    <p class="card-text mb-2">Make your app management easy and fun!</p>
    <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label class="form-label" for="name">Full Name</label>
            <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" type="text" name="name" placeholder="johndoe" aria-describedby="name" autocomplete="name" autofocus tabindex="1" />
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="email">Email</label>
            <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="text"  value="{{ old('email') }}"  placeholder="john@example.com" aria-describedby="email" tabindex="2" />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <div class="input-group input-group-merge form-password-toggle">
                <input class="form-control form-control-merge  @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="············"  autocomplete="new-password" aria-describedby="password" tabindex="3" />
                <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

        </div>
        <div class="form-group">
            <label class="form-label" for="password-confirm">Confirm Password</label>
            <div class="input-group input-group-merge form-password-confirm-toggle">
                <input class="form-control form-control-merge" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" aria-describedby="password-confirm" tabindex="3" />
                <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                @error('password-confirm')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="register-privacy-policy" type="checkbox" tabindex="4" />
                <label class="custom-control-label" for="register-privacy-policy">I agree to<a href="javascript:void(0);">&nbsp;privacy policy & terms</a></label>
            </div>
        </div>
        <button class="btn btn-primary btn-block" type="submit" tabindex="5">Sign up</button>
    </form>
    <p class="text-center mt-2"><span>Already have an account?</span><a href="{{ route('login') }}"><span>&nbsp;Sign in instead</span></a></p>
<!--    <div class="divider my-2">
        <div class="divider-text">or</div>
    </div>
    <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="javascript:void(0)"><i data-feather="facebook"></i></a><a class="btn btn-twitter white" href="javascript:void(0)"><i data-feather="twitter"></i></a><a class="btn btn-google" href="javascript:void(0)"><i data-feather="mail"></i></a><a class="btn btn-github" href="javascript:void(0)"><i data-feather="github"></i></a></div>-->
@endsection
