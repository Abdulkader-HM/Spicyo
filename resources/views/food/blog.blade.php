@extends('layouts.layout')

@section('cont')
    <div class="yellow_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Our Blog</h2>

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
                            @if ($food->user->is_admin === 1)
                                <h4 style="color: red"> Posted by Admin </h4>
                            @else
                                <h4 style="color: blue"> Posted by {{ $food->user->name }}</h4>
                            @endif
                        </div>
                    </div>
                @endforeach




                {{-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
                    <div class="blog_box">
                        <div class="blog_img_box">
                            <figure><img src="{{ URL::asset('images/blog_img2.png') }}" alt="#" />
                                <span>02 FEB 2019</span>
                            </figure>
                        </div>
                        <h3>Egg & Tosh</h3>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                            Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced
                            in their exact original form, accompanied by English versions from the </p>
                    </div>
                </div> --}}






                {{-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="blog_box">
                        <div class="blog_img_box">
                            <figure><img src="{{ URL::asset('images/blog_img3.png') }}" alt="#" />
                                <span>02 FEB 2019</span>
                            </figure>
                        </div>
                        <h3>Pizza</h3>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                            Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced
                            in their exact original form, accompanied by English versions from the </p>
                    </div>
                </div> --}}



            </div>
        </div>
    </div>
    <!-- end blog -->
@endsection()
