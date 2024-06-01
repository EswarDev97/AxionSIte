@extends('layouts.main')

@section('web-content')
<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="breadcrumbs-wrapper bg_cover veyes-claim-survey-banner-img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-text text-center">
                        <h1 class="title">Veyes Claim Survey</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}">Home</a></li>
                            <li><a href="{{ (Route::has('products')) ? route('products') : 'not-found' }}">Products</a></li>
                            <li class="active">Veyes Claim Survey</li>
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
                    <h3 class="text-uppercase">Veyes Claim Survey</h3>
                </div>

                <section class="fancy-features light-gray-bg mt-30 pt-25 pb-20">
                    <div class="container">
                        <div class="row">
                            <ul class="check-list list-circle-bg mb-20">
                                <li class="mb-10 pl-5">V-EYES Virtual Survey</li>
                                <li class="mb-10 pl-5">Damage Recognition Solution (DRS) / Image Recognition
                                    <ul class="list-disk">
                                        <li class="mt-2 mb-2 pl-5">Superficial Damages</li>
                                        <li class="mb-2 pl-5">Computer Vision Algorithm</li>
                                        <li class="mb-2 pl-5">Deducts Damage & Severity</li>
                                    </ul>
                                </li>
                                <li class="mb-10 pl-5">Auto Assessment
                                    <ul class="list-disk">
                                        <li class="mt-2 mb-2 pl-5">Real-Time Predictive Analysis</li>
                                    </ul>
                                </li>
                                <li class="mb-10 pl-5">Auto Settlement
                                    <ul class="list-disk">
                                        <li class="mt-2 mb-2 pl-5">ML Guided Workflow</li>
                                    </ul>
                                </li>
                            </ul>
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