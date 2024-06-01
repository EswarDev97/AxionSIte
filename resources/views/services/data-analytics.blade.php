@extends('layouts.main')

@section('web-content')
<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="breadcrumbs-wrapper bg_cover data-analytics-banner-img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-text text-center">
                        <h1 class="title">Data Analytics</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}">Home</a></li>
                            <li><a href="{{ (Route::has('services')) ? route('services') : 'not-found' }}">Services</a></li>
                            <li class="active">Data Analytics</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Hero Section ======-->
<section class="service-area service-style-four pt-90 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center mb-50">
                    <span class="sub-title sub-title-bg blue-light-bg">Data Analytics</span>
                    <h2>Design, Deployment & Management Solution</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="block-style-eighteen animate-icon d-flex align-items-center mb-30">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-12.png') }}" alt="">
                    </div>
                    <div class="text">
                        <h3 class="title">Data Preparation</h3>
                        <p>Connection Point provides connectors to over 25 leading data sources on-premise and in the cloud.</p>
                        <!-- <a href="{{ (Route::has('data-preparation')) ? route('data-preparation') : 'not-found' }}" class="btn-link">read more</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block-style-eighteen  animate-icon d-flex align-items-center mb-30">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-17.png') }}" alt="">
                    </div>
                    <div class="text">
                        <h3 class="title">Visualization</h3>
                        <p>Connection Point facilitates robust statistical analysis, univariate and bivariate analysis.</p>
                        <!-- <a href="{{ (Route::has('visualization')) ? route('visualization') : 'not-found' }}" class="btn-link">read more</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block-style-eighteen  animate-icon d-flex align-items-center mb-30">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-14.png') }}" alt="">
                    </div>
                    <div class="text">
                        <h3 class="title">Machine Learning</h3>
                        <p>Connection Point AutoML uses leading algorithms and frameworks that is an easy to use. </p>
                        <!-- <a href="{{ (Route::has('machine-learning')) ? route('machine-learning') : 'not-found' }}" class="btn-link">read more</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block-style-eighteen  animate-icon d-flex align-items-center mb-30">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-10.png') }}" alt="">
                    </div>
                    <div class="text">
                        <h3 class="title">DataOps</h3>
                        <p>Connection Point provides better visual flow, data quality and advanced automation. </p>
                        <!-- <a href="{{ (Route::has('dataops')) ? route('dataops') : 'not-found' }}" class="btn-link">read more</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block-style-eighteen  animate-icon d-flex align-items-center mb-30">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-18.png') }}" alt="">
                    </div>
                    <div class="text">
                        <h3 class="title">MLOps</h3>
                        <p>Connection Point automation nodes are production nodes with advanced automation capabilities.</p>
                        <!-- <a href="{{ (Route::has('mlops')) ? route('mlops') : 'not-found' }}" class="btn-link">read more</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block-style-eighteen animate-icon d-flex align-items-center mb-30">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-6.png') }}" alt="">
                    </div>
                    <div class="text">
                        <h3 class="title">Analytic Apps</h3>
                        <p>Connection Point makes it easy to create project dashboards and share them with business users.</p>
                        <!-- <a href="{{ (Route::has('analytic-apps')) ? route('analytic-apps') : 'not-found' }}" class="btn-link">read more</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Start Testimonial Section ======
<section class="testimonial-area testimonial-style-two bg_cover pt-130 pb-130" style="background-image: url(assets/images/bg/testimonial-bg-1.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-50">
                    <span class="sub-title sub-title-bg blue-light-bg">Our testimonials</span>
                    <h2>What Our Clients Say About 
                        Our IT Solutions</h2>
                </div>
            </div>
        </div>
        <div class="testimonial-slider-two">
            <div class="testimonial-item">
                <div class="wt-thumb-box">
                    <div class="thumb">
                        <img src="{{ url('assets/images/testimonial/thumb-3.jpg') }}" alt="testimonial image">
                    </div>
                    <div class="comment">
                        <h5>“Quality Team”</h5>
                    </div>
                </div>
                <div class="wt-content">
                    <p>Quis autem veleum iure rerehenderitey qui in ea voluptate velit esse quamessc nihil molestia consequatur velillum qus dolorem eum fugiat quoes.</p>
                    <div class="quote-title-box">
                        <div class="quote">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="author-title">
                            <h5>Robert D. Matthews</h5>
                            <span class="position">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="wt-thumb-box">
                    <div class="thumb">
                        <img src="{{ url('assets/images/testimonial/thumb-4.jpg') }}" alt="testimonial image">
                    </div>
                    <div class="comment">
                        <h5>“Clean Code”</h5>
                    </div>
                </div>
                <div class="wt-content">
                    <p>Quis autem veleum iure rerehenderitey qui in ea voluptate velit esse quamessc nihil molestia consequatur velillum qus dolorem eum fugiat quoes.</p>
                    <div class="quote-title-box">
                        <div class="quote">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="author-title">
                            <h5>Courtney F. Schlem</h5>
                            <span class="position">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="wt-thumb-box">
                    <div class="thumb">
                        <img src="{{ url('assets/images/testimonial/thumb-5.jpg') }}" alt="testimonial image">
                    </div>
                    <div class="comment">
                        <h5>“Quality Team”</h5>
                    </div>
                </div>
                <div class="wt-content">
                    <p>Quis autem veleum iure rerehenderitey qui in ea voluptate velit esse quamessc nihil molestia consequatur velillum qus dolorem eum fugiat quoes.</p>
                    <div class="quote-title-box">
                        <div class="quote">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="author-title">
                            <h5>Herbert L. McCoy</h5>
                            <span class="position">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="wt-thumb-box">
                    <div class="thumb">
                        <img src="{{ url('assets/images/testimonial/thumb-4.jpg') }}" alt="testimonial image">
                    </div>
                    <div class="comment">
                        <h5>“Quality Team”</h5>
                    </div>
                </div>
                <div class="wt-content">
                    <p>Quis autem veleum iure rerehenderitey qui in ea voluptate velit esse quamessc nihil molestia consequatur velillum qus dolorem eum fugiat quoes.</p>
                    <div class="quote-title-box">
                        <div class="quote">
                            <i class="flaticon-quotation"></i>
                        </div>
                        <div class="author-title">
                            <h5>Courtney F. Schlem</h5>
                            <span class="position">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
====== End Testimonial Section ======-->
<!--====== Start Newsletter Section ======
<section class="newsletter-area newsletter-style-one light-gray-bg">
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