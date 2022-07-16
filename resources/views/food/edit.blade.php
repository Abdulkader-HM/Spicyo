@extends('layouts.layout')
@section('cont')
    <div class="login-box">
        <h2>Edit Meal</h2>
        <form method="post" action="{{ route('food.update',$meal->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="user-box">
                <input type="text" name="name" required value="{{ $meal->name }}">
                <label>Meal name</label>
            </div>
            <div class="user-box">
                <input type="text" name="price" required value="{{ $meal->price }}">
                <label>Meal price</label>
            </div>
            <div class="user-box">
                <input type="longtext" name="description" required value="{{ $meal->description }}">
                <label>Discrito</label>
            </div>
            <div class="user-box">
                <input type="file" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                save
            </button>
        </form>
    </div>
@endsection

@section('footer')
@endsection
