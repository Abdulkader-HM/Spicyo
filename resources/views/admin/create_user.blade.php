{{-- ---------------------------------------------------------------------------------------------- --}}
@extends('layouts.layout')
@section('cont')
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        {{-- <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label> --}}
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">


                                {{-- login part --}}
                                <div class="card-front">



                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Sign Up</h4>
                                            <form method="POST" action="{{ route('create/user') }}">
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




                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="type" required
                                                        id="inlineRadio1" value="0">
                                                    <label class="form-check-label" for="inlineRadio1">User</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="type" required
                                                        id="inlineRadio2" value="1">
                                                    <label class="form-check-label" for="inlineRadio2">Admin</label>
                                                </div>

                                                <br>



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
    </div>
@endsection
