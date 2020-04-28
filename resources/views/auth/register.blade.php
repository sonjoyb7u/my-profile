{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}




@extends('admin.components.layout')

@section('title', 'REGISTER || MY PROFILE')

@section('register-form')
    <!--LOGO-->
    <div class="logo">
{{--        <img alt="logo" src="{{ asset('assets/admin/images/logo/logo1.png') }}" />--}}
        <h2 style="font-weight: bold; font-size: 40px;" class="text-center">REGISTER</h2>
    </div>
    <div class="box">
        <!--SIGN IN FORM-->
        <div class="panel mb-none">
            <div class="panel-content bg-scale-0">
                <form>
                    <div class="form-group mt-md">
                        <span class="input-with-icon">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>
                    <div class="form-group mt-md">
                        <span class="input-with-icon">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <span class="input-with-icon">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                            <i class="fa fa-key"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <span class="input-with-icon">
                            <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password">
                            <i class="fa fa-key"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" id="terms" value="option1">
                            <label class="check" for="terms">I agree </label>  to the <a href="#">Terms and Conditions</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="index.html" class="btn btn-primary btn-block">Register</a>
                    </div>
                    <div class="form-group text-center">
                        Have an account ?, please&nbsp;&nbsp;<a href="{{ route('login') }}">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

