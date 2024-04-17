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
                                <input class="form-control" placeholder="Name" type="text" name="name">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="form-control" placeholder="Email" type="email" name="email">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="form-control" placeholder="Phone" type="text" name="phone">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <textarea class="textarea" placeholder="Message" type="text" name="message"></textarea>
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
                        <li class="active"> <a href="{{ route('main') }}">Home</a></li>
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
                            <input class="tetter" placeholder="Your email" type="email" name="email">
                            <button class="submit">Subscribe</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <center>
            <div class="copyright">
                <div class="container">
                    {{-- <p>© 2022 All Rights Reserved. Design by<a href="https://html.design/"> Abdulkader HM</a>
                                    </p> --}}
                    <div class="content container">
                        <div class="row" style="width: 100px">
                            <div class="col-xs-12 text-center">
                                <a href="https://robotech-2c17d34363ef.herokuapp.com/">
                                    <img class="footer-logo" src='images/robotechlogo.png' alt="flameonepage Logo">
                                </a>
                            </div>
                        </div>

                        <span class="copyright">Copy right © 2024 | Created by
                            <a href="https://robotech-2c17d34363ef.herokuapp.com/" style="color: #32b427">RoboTech</a>

                        </span>
                    </div>
        </center>
    </div>

    </div>
    </div>

    </div>
</fooeter>
<!-- end footer -->


</div>
</div>
<div class="overlay"></div>
