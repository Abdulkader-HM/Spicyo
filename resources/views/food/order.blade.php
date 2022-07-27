@extends('layouts.layout')

@section('cont')

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <input class="form-control" placeholder="User Name" type="text"
            name="user_name">
    </div>
    {{-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
    <form class="main_form" action="{{ route('order',$meal->id) }}" method="post">
        @csrf
        <div class="row">


            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <input class="form-control" value="{{ Auth::user()->name }}" type="text"
                    name="user_name">
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <input class="form-control" placeholder="address" type="text"
                    name="address">
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <input class="form-control" placeholder="city" type="text"
                    name="city">
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <textarea class="textarea" placeholder="postcode" type="text"
                 name="postcode"></textarea>
            </div>

            <p class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <input class="form-control" value="{{ $meal->price }}" type="test"
                    name="meal_price">
            </p>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <input class="form-control" placeholder="quantity" type="number"
                    name="qty">
            </div>



            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <button class="send">Send</button>
            </div>
        </div>
    </form>
</div>
@endsection