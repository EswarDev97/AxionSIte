@extends('layouts.main')

@section('web-content')
<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="breadcrumbs-wrapper bg_cover live-streaming-banner-img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-text text-center">
                        <h1 class="title">Live Streaming</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}">Home</a></li>
                            <li><a href="{{ (Route::has('products')) ? route('products') : 'not-found' }}">Products</a></li>
                            <li class="active">Live Streaming</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Hero Section ======-->
<!--====== Start Product Details Section ======-->
<section class="product-details-section pt-30">
    <div class="container">
        <div class="product-details-wrapper pb-20">
            <div class="discription-area mt-30">
                <div class="content-box">
                    <h3 class="text-uppercase">Live Streaming</h3>
                    <p></p>
                </div>

                <section class="fancy-features light-gray-bg mt-40 pt-40 pb-20">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="block-style-two animate-icon mb-40">
                                    <div class="icon">
                                        <img src="{{ url('assets/images/icon/icon-1.png') }}" alt>
                                    </div>
                                    <div class="text">
                                        <h3 class="text-underline">Live Video</h3>
                                        <p>Live Video Streaming.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="block-style-two animate-icon mb-40">
                                    <div class="icon">
                                        <img src="{{ url('assets/images/icon/icon-2.png') }}" alt>
                                    </div>
                                    <div class="text">
                                        <h3 class="text-underline">AV Streaming</h3>
                                        <p>Application is Mobile OS Agnostic.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="block-style-two animate-icon mb-40">
                                    <div class="icon">
                                        <img src="{{ url('assets/images/icon/icon-3.png') }}" alt>
                                    </div>
                                    <div class="text">
                                        <h3 class="text-underline">Offline Mode</h3>
                                        <p>All Survey details are digitally archived.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="block-style-two animate-icon mb-40">
                                    <div class="icon">
                                        <img src="{{ url('assets/images/icon/icon-4.png') }}" alt>
                                    </div>
                                    <div class="text">
                                        <h3 class="text-underline">Chatbot Integration</h3>
                                        <p>Integration with ChatBot Applications ready.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
</section>
<!--====== End Product Details Section ======-->

<!--====== Start Newsletter Section ======
<section class="newsletter-style-one light-gray-bg">
    <div class="container">
        <div class="newsletter-wrapper bg_cover" style="background-image: url(assets/images/bg/newsletter-bg-2.jpg);">
            <div class="row">
                <div class="col-lg-5">
                    <div class="newsletter-content-box">
                        <div class="icon">
                            <i class="flaticon-email-1"></i>
                        </div>
                        <div class="content">
                            <h2>Get Special
                                Rewards</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form">
                        <form>
                            <div class="form_group">
                                <input type="email" class="form_control" placeholder="Enter Address" name="email" required>
                                <i class="far fa-map-marker-alt"></i>
                                <button class="main-btn btn-purple">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
====== End Newsletter Section ======-->
@endsection