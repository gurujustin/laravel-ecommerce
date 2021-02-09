@extends('layout.app')

@section('title', 'Home')

@section('content')
    <!-- Home section -->
    <div class="section-xl bg-image parallax" data-bg-src="{{asset('assets/images/background.jpg')}}">
        <div class="bg-black-01">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-10 col-md-8">
                        <div class="margin-top-50 margin-bottom-50">
                            <h1 class="display-4 font-weight-bold text-white">Wireless Headphone</h1>
                            <ul class="list-inline-dash">
                                <li class="text-white-09 font-weight-normal">Modern Design</li>
                                <li class="text-white-09 font-weight-normal">5 Color Options</li>
                                <li class="text-white-09 font-weight-normal">Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
    </div>
    <!-- end Home section -->

    <!-- About section -->
    <div class="section">
        <div class="container">
            <div class="row align-items-center col-spacing-50">
                <div class="col-12 col-lg-6">
                    <img src="{{asset('assets/images/col-2.jpg')}}" alt="">
                </div>
                <div class="col-12 col-lg-6">
                    <h2 class="font-weight-normal">Simplicity is the key</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <a class="button button-lg button-radius button-dark margin-top-30" href="#">Learn more</a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end About section -->

    <!-- Features section -->
    <div class="section-lg padding-top-0">
        <div class="container">
            <div class="row col-spacing-40 text-center">
                <div class="col-12 col-lg-4 icon-5xl">
                    <div class="border-all padding-30 border-radius hover-float hover-shadow">
                        <i class="ti-thumb-up text-black-09 margin-top-20"></i>
                        <h5 class="font-weight-normal margin-top-20">Noise Cancelling</h5>
                        <p class="margin-bottom-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 icon-5xl">
                    <div class="border-all padding-30 border-radius hover-float hover-shadow">
                        <i class="ti-headphone text-black-09 margin-top-20"></i>
                        <h5 class="font-weight-normal margin-top-20">Wireless</h5>
                        <p class="margin-bottom-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 icon-5xl">
                    <div class="border-all padding-30 border-radius hover-float hover-shadow">
                        <i class="ti-time text-black-09 margin-top-20"></i>
                        <h5 class="font-weight-normal margin-top-20">Long Battery Life</h5>
                        <p class="margin-bottom-20">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Features section -->

    <!-- Slider section -->
    <div class="section-lg border-top">
        <div class="container">
            <div class="margin-bottom-70">
                <div class="row text-center">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h2 class="font-weight-normal">Color Options</h2>
                        <div class="divider-zigzag divider-zigzag-color-black-07">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel" data-owl-nav="true" data-owl-margin="30" data-owl-xs="1" data-owl-sm="1" data-owl-md="1" data-owl-lg="2" data-owl-xl="2">
                <div>
                    <img src="{{asset('assets/images/col-2.jpg')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('assets/images/col-2.jpg')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('assets/images/col-2.jpg')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('assets/images/col-2.jpg')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('assets/images/col-2.jpg')}}" alt="">
                </div>
            </div>
        </div><!-- end container -->
    </div>
    <!-- end Slider section -->

    <!-- Prices section -->
    <div class="section-lg border-top">
        <div class="container">
            <div class="margin-bottom-70">
                <div class="row text-center">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h2 class="font-weight-normal">Incredible Prices</h2>
                        <div class="divider-zigzag divider-zigzag-color-black-07">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-spacing-40">
                <!-- Prices box 1 -->
                <div class="col-12 col-lg-4">
                    <div class="prices-box border-radius hover-float hover-shadow">
                        <h5 class="font-weight-normal">Regular</h5>
                        <div class="price">
                            <h1 class="font-weight-light">74</h1>
                        </div>
                        <div class="price-features">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>
                        <a class="button button-md button-radius button-dark" href="#">Order Now</a>
                    </div>
                </div>
                <!-- Prices box 2 -->
                <div class="col-12 col-lg-4">
                    <div class="prices-box border-radius hover-float hover-shadow">
                        <h5 class="font-weight-normal">Premium</h5>
                        <div class="price">
                            <h1 class="font-weight-light">84</h1>
                        </div>
                        <div class="price-features">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>
                        <a class="button button-md button-radius button-dark" href="#">Order Now</a>
                    </div>
                </div>
                <!-- Prices box 3 -->
                <div class="col-12 col-lg-4">
                    <div class="prices-box border-radius hover-float hover-shadow">
                        <h5 class="font-weight-normal">Custom</h5>
                        <div class="price">
                            <h1 class="font-weight-light">94</h1>
                        </div>
                        <div class="price-features">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>
                        <a class="button button-md button-radius button-dark" href="#">Order Now</a>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Prices section -->

    <!-- Parallax section -->
    <div class="section-2xl bg-image parallax" data-bg-src="{{asset('assets/images/background.jpg')}}">
        <div class="bg-black-01">
            <div class="container text-center">
                <a class="button-circle button-circle-xl button-circle-white-3 button-circle-animation-drop button-hover-shrink lightbox-media-link" href="https://www.youtube.com/watch?v=W-j4QGAgNu8">
                    <i class="fas fa-play"></i>
                </a>
            </div><!-- end container -->
        </div>
    </div>
    <!-- end Parallax section -->
@endsection
