@extends('layouts.main')

@section('web-content')
<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="breadcrumbs-wrapper bg_cover" style="background-image: url(assets/images/bg/breadcrumbs-bg-1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-text text-center">
                        <h1 class="title">Products</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}">Home</a></li>
                            <li class="active">Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Hero Section ======-->
<!--====== Start Projects Section ======-->
<section class="portfolio-area pt-120 pb-70" id="filter-project">
    <div class="container">
        <!-- <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="portfolio-filter-button text-center mb-40">
                    <ul class="filter-btn mb-30">
                        <li data-filter="*" class="active">View All</li>
                        <li data-filter=".cat-1">Software</li>
                        <li data-filter=".cat-2">Design</li>
                        <li data-filter=".cat-3">Cyber Security</li>
                        <li data-filter=".cat-4">Engineering</li>
                        <li data-filter=".cat-5">Consulting</li>
                    </ul>
                </div>
            </div>
        </div> -->
        <div class="row project-row">
            <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-1 cat-5">
                <div class="portfolio-block-five mb-50">
                    <div class="portfolio-img">
                        <img src="{{ url('assets/images/bg/veyes-claim-survey-bg-2.jpg') }}" alt="project Image">
                    </div>
                    <div class="portfolio-content">
                        <h3 class="title text-center"><a href="{{ (Route::has('veyes-claim-survey')) ? route('veyes-claim-survey') : 'not-found' }}" class="text-underline">Veyes Claim Survey</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-2 cat-4">
                <div class="portfolio-block-five mb-50">
                    <div class="portfolio-img">
                        <img src="{{ url('assets/images/bg/live-streaming-bg-2.jpg') }}" alt="project Image">
                    </div>
                    <div class="portfolio-content">
                        <h3 class="title text-center"><a href="{{ (Route::has('live-streaming')) ? route('live-streaming') : 'not-found' }}" class="text-underline">Live Streaming</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-3 cat-1">
                <div class="portfolio-block-five mb-50">
                    <div class="portfolio-img">
                        <img src="{{ url('assets/images/bg/valuation-bg-2.jpg') }}" alt="project Image">
                    </div>
                    <div class="portfolio-content">
                        <h3 class="title text-center"><a href="{{ (Route::has('valuation')) ? route('valuation') : 'not-found' }}" class="text-underline">Valuation</a></h3>
                    </div>
                </div>
            </div>

            <!--
            <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-4 cat-3">
                <div class="portfolio-block-five mb-50">
                    <div class="portfolio-img">
                        <img src="{{ url('assets/images/projects/project-20.jpg') }}" alt="project Image">
                    </div>
                    <div class="portfolio-content">
                        <h3 class="title"><a href="project-details.html" class="text-underline">IT Business Consulting</a></h3>
                        <a href="project-details.html" class="cat-btn">Consulting Services</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-5 cat-2">
                <div class="portfolio-block-five mb-50">
                    <div class="portfolio-img">
                        <img src="{{ url('assets/images/projects/project-21.jpg') }}" alt="project Image">
                    </div>
                    <div class="portfolio-content">
                        <h3 class="title"><a href="project-details.html" class="text-underline">Cyber Security Development</a></h3>
                        <a href="project-details.html" class="cat-btn">IT Consulting Services</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-3 cat-1">
                <div class="portfolio-block-five mb-50">
                    <div class="portfolio-img">
                        <img src="{{ url('assets/images/projects/project-22.jpg') }}" alt="project Image">
                    </div>
                    <div class="portfolio-content">
                        <h3 class="title"><a href="project-details.html" class="text-underline">Product Engineering</a></h3>
                        <a href="project-details.html" class="cat-btn">IT Services</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-4 cat-2">
                <div class="portfolio-block-five mb-50">
                    <div class="portfolio-img">
                        <img src="{{ url('assets/images/projects/project-23.jpg') }}" alt="project Image">
                    </div>
                    <div class="portfolio-content">
                        <h3 class="title"><a href="project-details.html" class="text-underline">Cyber Security Development</a></h3>
                        <a href="project-details.html" class="cat-btn">IT Consulting Services</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-5 cat-3">
                <div class="portfolio-block-five mb-50">
                    <div class="portfolio-img">
                        <img src="{{ url('assets/images/projects/project-24.jpg') }}" alt="project Image">
                    </div>
                    <div class="portfolio-content">
                        <h3 class="title"><a href="project-details.html" class="text-underline">Software Development</a></h3>
                        <a href="project-details.html" class="cat-btn">IT Consulting Services</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 project-column cat-2 cat-1">
                <div class="portfolio-block-five mb-50">
                    <div class="portfolio-img">
                        <img src="{{ url('assets/images/projects/project-25.jpg') }}" alt="project Image">
                    </div>
                    <div class="portfolio-content">
                        <h3 class="title"><a href="project-details.html" class="text-underline">Cyber Security Development</a></h3>
                        <a href="project-details.html" class="cat-btn">IT Consulting Services</a>
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>
</section><!--====== End Projects Section ======-->
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