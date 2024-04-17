
    <!-- start slider section -->
    <div class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Discover Restaurants<br>That deliver near You</h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                <a class="main_bt_border" href="#">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <img class="img-responsive" src="{{ URL::asset('images/burger_slide.png') }}" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Discover Restaurants<br>That deliver near You</h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                <a class="main_bt_border" href="#">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 full text_align_center">
                                            <div class="slider_image">
                                                <img class="img-responsive" src="{{ URL::asset('images/burger_slide.png') }}" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->



<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src='images/loading.gif' alt="" /></div>
    </div>

    <div class="wrapper">
        <!-- end loader -->

        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>




                @if (!Auth::user())
                    <ul class="list-unstyled components">

                        <li class="active">
                            <a href="{{ route('main') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('recipe') }}">Recipe</a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}">All Meals</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contact Us</a>
                        </li>
                        {{-- <li>
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>

                        </form>
                    </li> --}}
                    </ul>
                @elseif (Auth::user()->is_admin == 0)
                    <ul class="list-unstyled components">

                        <li class="active">
                            <a href="{{ route('profile') }}">My Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('create.meal') }}">Create meal</a>
                        </li>
                        <li>
                            <a href="{{ route('control') }}">My Meals</a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}">All Meals</a>
                        </li>
                        <li>
                            <a href="{{ route('my/orders') }}">My Orders</a>
                        </li>

                        <li>
                            <form method="post" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>

                            </form>
                        </li>
                    </ul>
                @else
                    <ul class="list-unstyled components">

                        <li class="active">
                            <a href="{{ route('profile') }}">{{ __('My Profile') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('admin/index') }}">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('control') }}">My Meals</a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}">All Meals</a>
                        </li>
                        <li>
                            <a href="{{ route('my/orders') }}">My Orders</a>
                        </li>

                        <li>
                            <form method="post" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>

                            </form>
                        </li>
                    </ul>
                @endif

            </nav>
        </div>

        <div id="content">
            <!-- header -->
            <header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="full">
                                <a class="logo" href="{{ route('main') }}"><img
                                        src="images/logo.png" alt="#" /></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="full">
                                <div class="right_header_info">
                                    <ul>


                                        {{-- <ul>
                                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                <li>
                                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                        {{ $properties['native'] }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul> --}}
                                        <i class="fa-solid fa-basket-shopping"></i>


                                        <li class="dinone">{{ __('Contact Us') }} : <img
                                                style="margin-right: 15px;margin-left: 15px;"
                                                src="{{ URL::asset('images/phone_icon.png') }}"
                                                alt="tel:004917623721083"><a>004917623721083</a></li>
                                        <li class="dinone"><img style="margin-right: 15px;"
                                                src="{{ URL::asset('images/mail_icon.png') }}" alt="#"><a
                                                href="mailto:Abdulkader.haj.mahmoud@gmail.com">Abdulkader.haj.mahmoud@gmail.com</a>
                                        </li>
                                        <li class="dinone"><img
                                                style="margin-right: 15px;height: 21px;position: relative;top: -2px;"
                                                src="{{ URL::asset('images/location_icon.png') }}"
                                                alt="#"><a>{{ __('Alexandria-Egypt') }}</a></li>
                                        @if (Auth::user())
                                        @else
                                            <li class="button_user">
                                                <a class="button active" href="{{ route('login') }}">Login</a>
                                                {{-- <a class="button" href="#">Register</a> --}}
                                            </li>
                                        @endif
                                        {{-- <li><img style="margin-right: 15px;"
                                                src="{{ URL::asset('images/search_icon.png') }}" alt="#"></li> --}}
                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="{{ URL::asset('images/menu_icon.png') }}" alt="#">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header -->



