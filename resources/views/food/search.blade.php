@extends('layouts.layout')

@section('cont')
    <div class="yellow_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Our Blog</h2>
                        <form method="get" action="{{ route('search') }}">
                            <input type="search" name="search">
                            <button type="submit" class="btn btn-light" >search</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <i><img src="{{ URL::asset('images/title.png') }}" alt="#" /></i>

                        <span>when looking at its layout. The point of using Lorem</span>
                    </div>
                </div>
            </div>







            <div class="row">
                @if (isset($foods) && $foods->count() > 0)
                    @foreach ($foods as $food)
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                            <div class="blog_box">
                                <div class="blog_img_box">
                                    <figure><img src="{{ URL::asset('images/food/' . $food->image) }}" height="20%"
                                            width="200px" alt="#" />
                                        <span>{{ $food->price }}$</span>
                                    </figure>
                                </div>
                                <h3>{{ $food->name }}</h3>
                                <p>{{ $food->description }} </p>
                                @if ($food->user->is_admin == 1)
                                    <h4 style="color: red"> Posted by Admin </h4>
                                @else
                                    <h4 style="color: blue"> Posted by {{ $food->user->name }}</h4>
                                @endif


                                <div class="right_header_info">
                                    <ul>
                                        <li>
                                            <form method="post" action="{{ route('order', $food->id) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">buy</button>
                                            </form>
                                        </li>

                                        <li>
                                            <form method="post" action="{{ route('basket', $food->id) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Add to basket</button>
                                            </form>
                                        </li>

                                    </ul>
                                </div>


                                <br>
                            </div>

                        </div>
                    @endforeach
                @endif










            </div>
        </div>
    </div>
    <!-- end blog -->
@endsection()
