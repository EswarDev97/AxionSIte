@extends('layouts.main')

@section('web-content')
<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="breadcrumbs-wrapper bg_cover" style="background-image: url(assets/images/bg/breadcrumbs-bg-1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-text text-center">
                        <h1 class="title">About With History</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Hero Section ======-->
<!--====== Start About Section ======-->
<section class="fancy-about fancy-about-four pt-130 pb-80" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-content-box mb-50">
                    <div class="section-title mb-25">
                        <h2>We Care AI Business
                            to Made Great Success </h2>
                    </div>
                    <p>Connection Point Technology is a foreseeing technical software design company; working towards a successful inhabitation of the latest AI & ML techniques in the Banking and Insurance Sector. The business of the firm is capably handled by a team of enthusiastic and talented people who together have many years of experience in the industry.</p>

                    <p>This experience, expertise and a willingness to ‘go the extra mile’ is what gives our firm the competitive edge in dealing with the needs of our clients.</p>

                    <p>When our experts felt that empowering people with Artificial Intelligence and the Machine Learning skills is need of the hour; our CP Academy was born. It completely focuses on keeping itself at par with the latest advancements in AI & ML.</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="img-holder-box mb-50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="experience-box">
                                <div class="year">
                                    <h2>25</h2>
                                </div>
                            </div>
                            <div class="img-holder">
                                <img src="{{ url('assets/images/about/about-10.jpg') }}" alt="About Image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img-holder">
                                <img src="{{ url('assets/images/about/about-11.jpg') }}" alt="About Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End About Section ======-->
<!--====== Start History Section ======-->
<section class="history-style-one pb-120">
    <div class="container">
        <div class="history-wrapper">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="history-img bg_cover" style="background-image: url(assets/images/features/history-img-1.jpg);"></div>
                </div>
                <div class="col-lg-6">
                    <div class="history-content-box">
                        <div class="year-box bg_cover">
                            <h3>Our Mission</h3>
                        </div>
                        <div class="content-box">
                            <ul class="check-list list-circle-bg mb-20">
                                <li class="mb-10">To enhance the business operation of our clients by developing and or implementing premium services.</li>
                                <li class="mb-10">Providing our employees with meaningful work and advancement opportunities.</li>
                                <li class="mb-10">Providing high-quality software & IT-related services.</li>
                                <li class="mb-10">Making access to information easier and more securer.</li>
                                <li class="mb-10">Improving communication and data exchange.</li>
                                <li class="mb-10">Providing our customers with a Value for Money.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End History Section ======-->
<!--====== Start Service Section ======
<section class="service-area service-style-five bg_cover pt-220 pb-150" style="background-image: url(assets/images/bg/block-bg-2.png)">
    <div class="container">
        <div class="row service-item-wrapper">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="block-style-seventeen animate-icon text-center blue-light-bg mb-40">
                    <div class="icon">
                        <i class="flaticon-web-design-1"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="service-details.html" class="text-underline">Web Design</a></h3>
                        <p>Sed perspiatis unde 
                            omna volu tate</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="block-style-seventeen animate-icon text-center dark-blue-bg mb-40">
                    <div class="icon">
                        <i class="flaticon-mobile-app"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="service-details.html" class="text-underline">Mobile Apps</a></h3>
                        <p>Sed perspiatis unde 
                            omna volu tate</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="block-style-seventeen animate-icon text-center dark-yellow-bg mb-40">
                    <div class="icon">
                        <i class="flaticon-cyber-security-1"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="service-details.html" class="text-underline">Cyber Security</a></h3>
                        <p>Sed perspiatis unde 
                            omna volu tate</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="block-style-seventeen animate-icon text-center dark-green-bg mb-40">
                    <div class="icon">
                        <i class="flaticon-product"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="service-details.html" class="text-underline">Product Strategy</a></h3>
                        <p>Sed perspiatis unde 
                            omna volu tate</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="block-style-seventeen animate-icon text-center red-dark-bg mb-40">
                    <div class="icon">
                        <i class="flaticon-target"></i>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="service-details.html" class="text-underline">QA & Tasting</a></h3>
                        <p>Sed perspiatis unde 
                            omna volu tate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
====== End Service Section ======-->
<!--====== Start Service Section ======
<section class="clients-area clients-style-two mt-minus-100">
    <div class="container">
        <div class="clients-wrapper bg_cover" style="background-image: url(assets/images/bg/sponsor-bg-2.jpg);">
            <div class="clients-slider-two">
                <div class="client-item">
                    <div class="client-img">
                        <img src="{{ url('assets/images/clients/07.png') }}" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="{{ url('assets/images/clients/08.png') }}" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="{{ url('assets/images/clients/09.png') }}" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="{{ url('assets/images/clients/10.png') }}" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="{{ url('assets/images/clients/11.png') }}" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="{{ url('assets/images/clients/08.png') }}" alt="clients image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
====== End Service Section ======-->
<!--====== Start Team Section ======
<section class="team-area team-style-two pt-130 pb-100">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-5">
                <div class="section-title mb-50">
                    <span class="sub-title sub-title-bg blue-light-bg">Team Member</span>
                    <h2>Meet Our Professionals
                        Team Member
                        </h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="button float-md-right mb-50">
                    <a href="team-details.html" class="main-btn btn-blue-light">Meet our team</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item">
                    <div class="team-img mb-30">
                        <img src="{{ url('assets/images/team/img_8.jpg') }}" alt="team image">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">James E. Villegas</a></h3>
                                <p class="position">Senior Engineer</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item mb-30">
                    <div class="team-img">
                        <img src="{{ url('assets/images/team/img_9.jpg') }}" alt="team image">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Paul C. McPherson</a></h3>
                                <p class="position">Senior Engineer</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item mb-30">
                    <div class="team-img">
                        <img src="{{ url('assets/images/team/img_10.jpg') }}" alt="team image">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">James E. Villegas</a></h3>
                                <p class="position">Senior Engineer</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item mb-30">
                    <div class="team-img">
                        <img src="{{ url('assets/images/team/img_11.jpg') }}" alt="team image">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Paul C. McPherson</a></h3>
                                <p class="position">Senior Engineer</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item mb-30">
                    <div class="team-img">
                        <img src="{{ url('assets/images/team/img_12.jpg') }}" alt="team image">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">James E. Villegas</a></h3>
                                <p class="position">Senior Engineer</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item mb-30">
                    <div class="team-img">
                        <img src="{{ url('assets/images/team/img_13.jpg') }}" alt="team image">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Paul C. McPherson</a></h3>
                                <p class="position">Senior Engineer</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item mb-30">
                    <div class="team-img">
                        <img src="{{ url('assets/images/team/img_14.jpg') }}" alt="team image">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">James E. Villegas</a></h3>
                                <p class="position">Senior Engineer</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="team-item mb-30">
                    <div class="team-img">
                        <img src="{{ url('assets/images/team/img_7.jpg') }}" alt="team image">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.html">Paul C. McPherson</a></h3>
                                <p class="position">Senior Engineer</p>
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-====== End Team Section ======-->
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