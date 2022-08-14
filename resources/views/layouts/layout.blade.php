<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Spicyo</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('images/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

    <!-- owl css -->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    {{-- login css --}}
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
    {{-- profile css --}}
    <link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}">
    {{-- user css --}}
    <link rel="stylesheet" href="{{ URL::asset('css/user.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ URL::asset('../css/style.css') }}">
    <!-- responsive-->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ URL::asset('images/loading.gif') }}" alt="" /></div>
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
                        <a href="{{ route('index') }}">Home</a>
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
                                <a class="logo" href="{{ route('index') }}"><img
                                        src="{{ URL::asset('images/logo.png') }}" alt="#" /></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="full">
                                <div class="right_header_info">
                                    <ul>


                                        {{-- <ul>
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
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
                                                alt="tel:00963947032440"><a>00963947032440</a></li>
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

            @yield('cont')


            @section('footer')
                <!-- footer -->
                <fooeter>
                    <div class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class=" col-md-12">
                                    <h2>Request A<strong class="white"> Call Back</strong></h2>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    {{-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
                                    <form class="main_form" action="{{ route('message') }}" method="post">
                                        @csrf
                                        <div class="row">

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Name" type="text"
                                                    name="name">
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Email" type="email"
                                                    name="email">
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <input class="form-control" placeholder="Phone" type="text"
                                                    name="phone">
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <textarea class="textarea" placeholder="Message" type="text"
                                                 name="message"></textarea>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <button class="send">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="img-box">
                                        <figure><img src="{{ URL::asset('images/img.jpg') }}" alt="img" />
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="footer_logo">
                                        <a href="{{ url('/') }}"><img src="{{ URL::asset('images/logo1.jpg') }}"
                                                alt="logo" /></a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <ul class="lik">
                                        <li class="active"> <a href="{{ route('index') }}">Home</a></li>
                                        <li> <a href="{{ route('about') }}">About</a></li>
                                        <li> <a href="{{ route('recipe') }}">Recipe</a></li>
                                        <li> <a href="{{ route('blog') }}">Blog</a></li>
                                        <li> <a href="{{ route('contact') }}">Contact us</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <div class="new">
                                        <h3>Newsletter</h3>

                                        <form class="newtetter" method="post" action="{{ route('newsletter') }}">
                                            @csrf
                                            <input class="tetter" placeholder="Your email" type="email"
                                                name="email">
                                            <button class="submit">Subscribe</button>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="copyright">
                            <div class="container">
                                <p>© 2022 All Rights Reserved. Design by<a href="https://html.design/"> Abdulkader HM</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </fooeter>
                <!-- end footer -->

            @show

        </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/custom.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-3.0.0.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <style>
        #owl-demo .item {
            margin: 3px;
        }

        #owl-demo .item img {
            display: block;
            width: 100%;
            height: auto;
        }
    </style>


    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        })
    </script>

</body>

</html>
