{{-- <div class="row mb-3">
    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
            required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
            autocomplete="new-password">
    </div>
</div> --}}




{{-- ---------------------------------------------------------------------------------------------- --}}
@extends('layouts.layout')
@section('cont')
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">


                                {{-- login part --}}
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email"class="form-style"
                                                        class=" @error('email') is-invalid @enderror" name="email"
                                                        value="{{ old('email') }}" required autocomplete="email"
                                                        class="form-style" placeholder="Your Email" id="logemail"
                                                        autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style"
                                                        class=" @error('password') is-invalid @enderror" name="password"
                                                        required autocomplete="current-password" class="form-style"
                                                        placeholder="Your Password" id="logpass" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <button type='submit'class="btn mt-4">submit</button>

                                            </form>
                                            <br>

                                            {{-- <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your
                                                password?</a></p> --}}
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>






                                {{-- register part --}}
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Sign Up</h4>
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-style"
                                                        class=" @error('name') is-invalid @enderror" name="name"
                                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                                        class="form-style" placeholder="Your Full Name" id="logname"
                                                        autocomplete="off">

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>




                                                <div class="form-group mt-2">
                                                    <input type="email" class="form-style"
                                                        class=" @error('email') is-invalid @enderror" name="email"
                                                        value="{{ old('email') }}" required autocomplete="email"
                                                        class="form-style" placeholder="Your Email" id="logemail"
                                                        autocomplete="off">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>


                                                <div class="form-group mt-2">
                                                    <input type="password" class="form-style"
                                                        class=" @error('password') is-invalid @enderror" name="password"
                                                        required autocomplete="new-password" class="form-style"
                                                        placeholder="Your Password" id="logpass" autocomplete="off">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>


                                                <div class="form-group mt-2">
                                                    <input type="password" name="password_confirmation" required
                                                        autocomplete="new-password" class="form-style"
                                                        placeholder="Your Password" id="logpass" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>


                                                <button type="submit" class="btn mt-4">Register</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
