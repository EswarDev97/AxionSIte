@extends('layouts.main')

@section('web-content')
<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="breadcrumbs-wrapper bg_cover" style="background-image: url(assets/images/bg/breadcrumbs-bg-1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-text text-center">
                        <h1 class="title">CP ACADEMY</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">CP ACADEMY</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Hero Section ======-->
<!--====== Start About Section ======-->
<section class="fancy-about fancy-about-five pt-130 pb-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="text-wrapper mb-50">
                    <div class="experience-box">
                        
                        <div class="content mb-45">
                            <h2 class="mb-4">AI & ML learning Program</h2>
                            <blockquote>
                                <p>Unlock your potential and stay ahead in technology with our learning Program in Artificial Intelligence (AI) and Machine Learning (ML).
                                    AI is a system of solving complex problems and taking actions without human intervention. ML is the ability to "statistically learn" from data without explicit programming.
                                    </p>
                                <p class="pt-10">It is a transformative technology that will only keep improving with time and help organizations achieve their business objectives by assisting in building innovative solutions for products and services.</p>
                                <p class="pt-10">We have already seen that many businesses has started to embrace these technologies to thrive in this cut-throat world.</p>
                                <p class="pt-10">It is no longer a rocket science! It has become the main stream in all the industry. Starting from a simple Food delivery App to Automotive AI shopfloor has a speck of AI & ML in it.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-img mb-50">
                    <img src="{{ url('assets/images/about/about-10.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section><!--====== End About Section ======-->
<!--====== Start Features Section ======
<section class="features-area features-style-four mb-minus-100">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                
                <div class="block-style-eight">
                    <h3 class="text-center pb-3">Machine Learning</h3>
                    <div class="d-flex">
                        <div class="img">
                            <img src="{{ url('assets/images/features/img-1.jpg') }}" alt="Image">
                        </div>
                        <div class="text">
                            <p>Machine learning (ML) allows software applications to become more accurate.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="block-style-eight">
                    <h3 class="text-center pb-3">Artificial Intelligence</h3>
                    <div class="d-flex">
                        <div class="img">
                            <img src="{{ url('assets/images/features/img-2.jpg') }}" alt="Image">
                        </div>
                        <div class="text">
                            <p>Artificial intelligence is the simulation of human intelligence processes by machines.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="block-style-eight">
                    <h3 class="text-center pb-3">Anomaly Detection</h3>
                    <div class="d-flex">
                        <div class="img">
                            <img src="{{ url('assets/images/features/img-3.jpg') }}" alt="Image">
                        </div>
                        <div class="text">
                            <p>Anomaly detection is the process of identifying items in data sets, which differ from the norm.</p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
====== End Features Section ======-->
<section class="features-area features-style-eight light-gray-bg pt-60 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-50">
                    <!-- <span class="sub-title sub-title-bg blue-light-bg">what  we  offer</span> -->
                    <h2>How this workshop will help you</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="block-style-twenty animate-icon d-flex mb-30">
                    <div class="icon">
                        <i class="flaticon-help"></i>
                    </div>
                    <div class="text">
                        <h3 class="text-underline">Technically updated processes</h3>
                        <p>Helps to drive efficiency and increase productivity.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block-style-twenty animate-icon d-flex mb-30">
                    <div class="icon">
                        <i class="flaticon-technical-support"></i>
                    </div>
                    <div class="text">
                        <h3 class="text-underline">Delightful customer experiences</h3>
                        <p>Deliver more engaged and customized products.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block-style-twenty animate-icon d-flex mb-30">
                    <div class="icon">
                        <i class="flaticon-technical-support-1"></i>
                    </div>
                    <div class="text">
                        <h3 class="text-underline">Talent empowerment</h3>
                        <p>Improve your workforce efficiency and engagement.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block-style-twenty animate-icon d-flex mb-30">
                    <div class="icon">
                        <i class="flaticon-technical-support-1"></i>
                    </div>
                    <div class="text">
                        <h3 class="text-underline">Reduce Errors</h3>
                        <p>The AI model greatly reduces the manual errors!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block-style-twenty animate-icon d-flex mb-30">
                    <div class="icon">
                        <i class="flaticon-it"></i>
                    </div>
                    <div class="text">
                        <h3 class="text-underline">Gain foreknowledge and security</h3>
                        <p>Secure every endpoint of your business by greater insights and better decision making.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="block-style-twenty animate-icon d-flex mb-30">
                    <div class="icon">
                        <i class="flaticon-technical-support-1"></i>
                    </div>
                    <div class="text">
                        <h3 class="text-underline">Tackles complex problems</h3>
                        <p>The Automation process analyses the raw data and takes objective decisions; without human emotions!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Start CTA Section ======-->
<section class="cta-area cta-style-three bg_cover pt-140 pb-140" style="background-image: url(assets/images/bg/cta-bg-2.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="cta-content-box text-center">
                    <h2>Ready To Get Our 
                        AI & ML Course?</h2>
                    <ul class="button">
                        <li><a href="{{route('ai-ml-masterclass-course')}}" class="main-btn btn-purple">Our Master Class Course</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End CTA Section ======-->
<!--====== Start Fancy Block Section ======-->
<section class="fancy-text-block fancy-text-block-eleven pt-130 pb-40" id="workshop-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-holder-box mb-50">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="img-holder border-top-left-radius mb-30">
                                <img src="{{ url('assets/images/block/gallery-9.jpg') }}" alt="">
                            </div>
                            <div class="img-holder border-bottom-left-radius mb-30">
                                <img src="{{ url('assets/images/block/gallery-10.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img-holder mb-30">
                                <img src="{{ url('assets/images/block/gallery-11.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-wrapper">
                    <div class="section-title section-title-two mb-25">
                        <span class="sub-title">What We Provide</span>
                        <h2>We Provide How You Can Grow 
                            Your AI & ML Skill</h2>
                    </div>
                    <p>Learn from the world - class faculty to get hand-on learning with industry relevant syllabus and actual case studies.</p>
                    <ul class="check-list list-circle-bg mb-20">
                        <li>Python and ML Concepts</li>
                        <li>Math & Regression</li>
                        <li>Advanced algorithms</li>
                        <li>NLP & Unsupervised</li>
                        <li>Deep Learning</li>
                    </ul>
                    <!-- <a href="about.html" class="main-btn btn-blue-light">Learn More Us</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Fancy Block Section ======-->
<!--====== Start Contact Section ======
<section class="contact-area contact-style-three bg_cover pt-80 pb-80" style="background-image: url(assets/images/bg/testimonial-bg-1.jpg);"> 
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="contact-section-box">
                    <div class="section-title section-title-two mb-25">
                        <span class="sub-title">Need help ?</span>
                        <h2>Let’s Talk About CP Academy</h2>
                    </div>
                    <p>If you have any queries about CP Academy, don't hesitate to ask us. Stay updated with the latest AI courses, news, and events.
                    </p>
                    <ul class="social-link">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-wrapper">
                    <form class="contact-form" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text" class="form_control" placeholder="First Name" name="fname" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text" class="form_control" placeholder="Last Name" name="lname">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text" class="form_control" placeholder="Phone Number" name="phone" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_group">
                                    <input type="text" class="form_control" placeholder="company" name="company" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_group">
                                    <textarea class="form_control" placeholder="Query" name="message" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_group">
                                    <div class="col-lg-12">
                                        <button class="main-btn btn-purple">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>====== End Contact Section ======-->
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