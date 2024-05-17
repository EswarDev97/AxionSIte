@extends('layouts.main')

@section('web-content')
<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="breadcrumbs-wrapper bg_cover valuation-banner-img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-text text-center">
                        <h1 class="title">Valuation</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}">Home</a></li>
                            <li><a href="{{ (Route::has('products')) ? route('products') : 'not-found' }}">Products</a></li>
                            <li class="active">Valuation</li>
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
                    <h3 class="text-uppercase">VALUATION</h3>
                    <p>The universal formula for calculating the value of a used car involves taking the vehicle's new price today and depreciating it by the number of years the vehicle has been in use. The factor of depreciation is arrived at through many years of market precedent and experience.</p>
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
                                        <h3 class="text-underline">Real Worth</h3>
                                        <p>Highly skilled & experienced workforce.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="block-style-two animate-icon mb-40">
                                    <div class="icon">
                                        <img src="{{ url('assets/images/icon/icon-2.png') }}" alt>
                                    </div>
                                    <div class="text">
                                        <h3 class="text-underline">Fair Market Value</h3>
                                        <p>We determine the Fair Market Value of all the vehicles.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="block-style-two animate-icon mb-40">
                                    <div class="icon">
                                        <img src="{{ url('assets/images/icon/icon-3.png') }}" alt>
                                    </div>
                                    <div class="text">
                                        <h3 class="text-underline">Verify</h3>
                                        <p>Verify all the car's equipment and options function as they are supposed to operate.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="block-style-two animate-icon mb-40">
                                    <div class="icon">
                                        <img src="{{ url('assets/images/icon/icon-4.png') }}" alt>
                                    </div>
                                    <div class="text">
                                        <h3 class="text-underline">Market dynamics</h3>
                                        <p>An Intelligent Valuation Module which not only take the vehicle condition, but also market dynamics.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="product-details-wrapper pb-75">
            <div class="discription-area mt-30">
                <div class="content-box">
                    <h3 class="text-uppercase">Car Valuation Process</h3>
                    <p>The car valuation process can be used before buying any car. It helps car buyers to know the original value and price of any car before buying it. It is a beneficial tool and helps to quickly know the market price of any vehicle. By using this tool, the car owners can estimate the true value of any car according to its make, model, mileage and condition. The seller cannot manipulate the buyer about the prices and this would help buyer to negotiate the price before making the final decision. In this way, by using car valuation the car buyers can get done with a profitable deal.</p>
                </div>
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