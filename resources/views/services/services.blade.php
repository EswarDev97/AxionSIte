@extends('layouts.main')

@section('web-content')
<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="breadcrumbs-wrapper bg_cover" style="background-image: url(assets/images/bg/breadcrumbs-bg-1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-text text-center">
                        <h1 class="title">Our Services</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}">Home</a></li>
                            <li class="active">Our Services</li>
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
                    <span class="sub-title sub-title-bg blue-light-bg">Our Services</span>
                    <h2>Digital Innovative Solutions 
                        For AI Management</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="block-style-eighteen animate-icon d-flex align-items-center mb-30">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-13.png') }}" alt="">
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{ (Route::has('data-analytics')) ? route('data-analytics') : 'not-found' }}" class="text-underline">Data Analytics</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="block-style-eighteen  animate-icon d-flex align-items-center mb-30">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-6.png') }}" alt="">
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{ (Route::has('image-recognition')) ? route('image-recognition') : 'not-found' }}" class="text-underline">Image Recognition</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="block-style-eighteen  animate-icon d-flex align-items-center mb-30">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-7.png') }}" alt="">
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{ (Route::has('anomaly-detection')) ? route('anomaly-detection') : 'not-found' }}" class="text-underline">Anomaly Detection</a></h3>  
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