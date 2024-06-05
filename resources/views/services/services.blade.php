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

<br>

<section class="service-area service-style-four pt-90 pb-130" id="about-us">
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


<!--====== Start preacceptance-inspection Section ======-->
<section class="fancy-about fancy-about-four pt-130 pb-80" id="preacceptance-inspection">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-content-box mb-50">
                    <div class="section-title mb-25">
                        <h2>Motor Pre-Inspection Services</h2>
                    </div>
                    <p>Vehicle inspection is a process to verify and document the existence of a motor vehicle, as well as its condition and existing options and accessories. Vehicle inspection works as an effective deterrent against those intending to make dishonest financial gains by committing vehicle insurance fraud.</p>
                    <p>Vehicle inspection is also required when you seek a claim for repair of damage that has accidentally happened to your car. In such a case, a vehicle inspection is done by an authorized surveyor or the insurance company itself to appraise the approximate cost of repair and also gauge if the claim is genuine.</p>
                    <p>When our experts felt that empowering people with Artificial Intelligence and Machine Learning skills was needed, our CP Academy was born. It completely focuses on keeping itself at par with the latest advancements in AI & ML.</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="img-holder-box mb-50">
                    <div class="row">
                        <div class="col-12">
                            <div class="img-holder" style="background-image: url('assets/images/inspection/motor_inspection.jpg'); height: 400px; background-size: cover; background-position: center;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
            <div class="img-holder-box mb-50">
                    <div class="row">
                        <div class="col-12">
                            <div class="img-holder" style="background-image: url('assets/images/inspection/motor_inspection2.jpg'); height: 400px; background-size: cover; background-position: center;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
            <div class="about-content-box mb-50">
                    <div class="section-title mb-25">
                        <h2>Vehicle Inspection for Insurance</h2>
                    </div>
                    <p>App based real time geo tagged pictures, videos of inspected vehicles with GPS location, time stamp, data regarding the condition of inspected vehicle captured from field, customer signature and selfie of field officer with inspected vehicle is uploaded to the server according to guidelines of insurance of companies.</p>
                    <p>Cloud based web system to manage and prepare PDF reports instantly and send it instantly insurance companies and to other stake holders</p>
                    <p>eparate logins for Head Office, Regional offices, agents</p>
                    <p>Real time location of field officers, so that a case can be quickly forwarded for inspection purpose</p>
                    <p>Only real time upload of picture and no picture is allowed to be uploaded from mobile gallery</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End preacceptance-inspection Section ======-->

<!--====== Start INVESTIGATION Section ======-->
<section class="fancy-about fancy-about-four pt-130 pb-80" id="investigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-content-box mb-50">
                    <div class="section-title mb-25">
                        <h2>INVESTIGATION</h2>
                    </div>
                    <p>We do have a remarkable reputation for delivering results, and for ensuring our clients get the information they need quickly, reliably, and ethically. And while we’re committed to professionalism and best practices, we also know that successful investigations also require smart and creative thinking.</p>
                    <p>Our investigations are handled with the utmost discretion and completed in a timely manner. Information developed through our investigations is consistent, through and convert.</p>
                    
                </div>
            </div>
            <div class="col-lg-7">
                <div class="img-holder-box mb-50">
                    <div class="row">
                        <div class="col-12">
                            <div class="img-holder" style="background-image: url('assets/images/inspection/investigation.jpg'); height: 400px; background-size: cover; background-position: center;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
</section>
<!--====== End  INVESTIGATION Section ======-->

<!--====== Start veyesclaimsurvey Section ======-->
<section class="product-details-section pt-30" id="veyesclaimsurvey">
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
<!--====== End veyesclaimsurvey Section ======-->



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