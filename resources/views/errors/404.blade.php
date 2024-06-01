@extends('layouts/main')

@section('web-content')
<section class="error-page-section pt-50 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="error-content text-center">
                    <img src="{{ url('assets/images/errors/404.png') }}" class="mb-50" alt="">
                    <h2>Oops! This Page is Not Found</h2>
                    <p>We can't find the page you're looking for, please click the below button to go to the home. </p>
                    <a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}" class="main-btn btn-blue-light"><i class="fa fa-home pr-1"></i> Go Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Start Newsletter Section ======
<section class="newsletter-area newsletter-style-one">
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