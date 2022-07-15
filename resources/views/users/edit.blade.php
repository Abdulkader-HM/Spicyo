@extends('layouts.layout')
@section('cont')
    <div class="login-box">
        <h2>Profile </h2>
        <form method="post" action="{{ route('store', Auth::user()->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="user-box">
                <input type="name" name="address" required value="{{ Auth::user()->profile->address }}">
                <label>Address</label>
            </div>
            {{-- <div class="user-box">
                <input type="email" name="email" required value="{{ Auth::user()->profile->email }}">
                <label>Email</label>
            </div> --}}
            <div class="user-box">
                <input type="number" name="phone" required value="{{ Auth::user()->profile->phone }}">
                <label>Phone NO</label>
            </div>
            <div class="user-box">
                <input type="file" name="image">
            </div>
            <button type="submit" class="btn btn-primary">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                save
            </button>
            <a href="{{ route('profile') }}" class="btn btn-danger">Back</a>

        </form>

    </div>
@endsection

@section('footer')
@endsection

