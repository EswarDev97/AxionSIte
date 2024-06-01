@extends('layouts.main')

@section('web-content')
<!--====== Start Hero Section ======-->
<section class="hero-area course-banner-section">
    
    <div class="container">
        <div class="col-lg-12">
            <ul class="breadcrumbs-link pt-3 pt-lg-5">
                <li><a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}">Home</a></li>
                <li><a href="{{ (Route::has('cp-academy')) ? route('cp-academy') : 'not-found' }}">CP Academy</a></li>
                <li class="active">AI & ML Webinar</li>
            </ul>
        </div>
    </div>

    <div class="breadcrumbs-wrapper bg_cover ai-class-banner-img">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-8 mt-5 mt-md-4 mt-lg-5">
                        <div class="page-title-text text-left">
                            <h1 class="title">AI & ML Webinar</h1>
                            <p class="text-white">Basics of AI | Application Areas | Scope of AI | ML & Deep Learning</p>
                            <p class="text-white">Suitable for Students and those who are curious about AI & ML.</p>                            
                            <div class="clearfix mb-5 pl-lg-5">
                                <h2 class="text-white mt-4 float-left"><span>@</span>99 <span class="text-sm">AED</span></h2>
                                <a href="javascript:void(0);" class="float-left ml-4 mt-4 main-btn text-white enroll-btn" data-course="ai-ml-webinar">Subscribe Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-2 mt-lg-0">
                        <div class="banner-enquiry-form-container bg-info pt-3 pb-3 border rounded">
                            <div class="col-lg-12">
                                <h3 class="text-center pb-3 text-white">Want to know more?</h3>
                                <p class="text-white pb-3 enquiry-para">We are glad to help you and we will connect with you within 24 hours.</p>
                                <form class="enquiry-form" method="post" enctype="multipart/form-data" action="{{ route('enquiry') }}">
                                    @csrf
                                    <input type="hidden" name="course" value="AI & ML Webinar">
                                    <input type="hidden" name="enquiry_from" value="{{ url()->current() }}">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <input type="text" class="form_control text-only" id="enquiry-form-name" name="name" placeholder="Full Name *">
                                                <span class="form-field-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <input type="email" class="form_control" id="enquiry-form-email" name="email" placeholder="Email Address *">
                                                <span class="form-field-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <input type="text" class="form_control numbers-only" id="enquiry-form-phone" name="phone" placeholder="Phone Number *">
                                                <span class="form-field-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <div class="text-center">
                                                    <button type="submit" class="main-btn btn-red">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Hero Section ======-->

<!--====== Start About AI Section ======-->
<section class="skill-area skill-style-two pt-80 pb-65">
    <div class="container">
        <div class="row">
            <h3 class="side-heading red-dark text-uppercase pb-25"> About AI & ML </h3>
            <div class="col-lg-12">
                <div class="row">
                    <p>
                        How will it be when it is possible for machines to learn from experience, adjust to new inputs and perform human-like tasks?! Artificial intelligence and machine learning strategies are becoming critical for making differentiation and sometimes survival of the organization in the Industry. AI hopes to produce some of this century’s most important and revolutionary inventions. The products of the new AI revolution are self-driven vehicles, robot assistance, and digital disease diagnostics that will affect how we live and function. 
                    </p>
                    <p class="mt-2">
                        Machine learning is a specific form of AI that allows computers to learn and grow after they are introduced to scenarios in the form of data. Both of these areas offer promising career opportunities.
                        The demand for qualified AI professionals has more than doubled in recent years. Those who want to take a lead in research and development in AI are provided with endless career opportunities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End About AI Section ======-->

<!--====== Start Workshop Topic Section ======-->
<section class="skill-area skill-style-two pb-35">
    <div class="container">
        <div class="row">
            <h3 class="side-heading red-dark text-uppercase pb-25"> Highlights of the Webinar </h3>
            <div class="col-lg-12">
                <div class="row">
                    <p class="mb-2">
                        <b>AI & ML</b> is a subset of artificial intelligence that is at the forefront of digital transformation in the world. Thanks to machine learning, it is now possible to detect diseases, know the defaulters of a loan and know the future sales of a product. All this information can be had proactively and not as an after the fact scenario. Machine learning and artificial intelligence-based roles are in great demand in the job market and such roles offer a higher salary than traditional programming roles.
                    </p>

                    <div class="col-lg-12 pl-0 pt-25">
                        <h4 class="text-uppercase pb-25">We will cover the following in this course:</h4>
                        <div class="text-wrapper">
                            <div class="faq-accordian">
                                <div class="list-tick-mark">
                                    <p class="check color-red-dark">Simple and multiple linear regression</p>
                                    <p class="check color-red-dark">Logistic regression</p>
                                    <p class="check color-red-dark">Decision tree, Random forest and XG boost</p>
                                    <p class="check color-red-dark">Unsupervised algorithms - Cluster (kNN based) and Hierarchical.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Skill Section ======-->

<!--====== Start Skills You Learn Section ======-->
<section class="skill-area skill-style-two pb-35">
    <div class="container">
        <div class="row">
            <h4 class="text-uppercase pb-25"> What you will learn </h4>
            <div class="col-lg-12">
                <div class="row">
                    <ul class="list-tick-mark">
                        <li class="check color-red-dark">What is Artificial Intelligence.</li>
                        <li class="check color-red-dark">History of AI.</li>
                        <li class="check color-red-dark">Types of AI.</li>
                        <li class="check color-red-dark">Pattern explanation.</li>
                        <li class="check color-red-dark">What is Machine Learning.</li>
                        <li class="check color-red-dark">What is Deep Learning.</li>
                        <li class="check color-red-dark">Types of ML.</li>                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Skills You Learn Section ======-->

<!--====== Start Workshop Topic Section ======-->
<section class="skill-area skill-style-two pb-35">
    <div class="container">
        <div class="row">
            <h4 class="text-uppercase pb-25"> Who this Webinar is for? </h4>
            <div class="col-lg-12">
                <div class="row">
                    <ul class="list-tick-mark">                        
                        <li class="check color-red-dark">Students</li>
                        <li class="check color-red-dark">Professionals wanting to shift to ML roles</li>                        
                        <li class="check color-red-dark">Those who are curious about Machine Learning or AI.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Skill Section ======-->

<!--====== Start Features Section ======-->
<section class="skill-area skill-style-two pb-65">
    <div class="container">
        <div class="row">
            <h3 class="side-heading red-dark text-uppercase pb-25"> Features </h3>
            <div class="col-lg-12">
                <div class="row">
                    <ul class="list-tick-mark">
                        <li class="check color-red-dark">Instructor Led</li>
                        <li class="check color-red-dark">Hands on Experience</li>
                        <li class="check color-red-dark">Case Studies</li>
                        <li class="check color-red-dark">On Demand Video</li>
                        <li class="check color-red-dark">Physical and Digital Course Material</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Features Section ======-->

<!--====== Start Team Details Section ======-->
<section class="team-details-section">
    <div class="container">
        <h3 class="side-heading red-dark text-uppercase pb-45 pt-25"> Instructor Profile </h3>
        <div class="row">
            <div class="col-xl-9 col-lg-12">
                <div class="team-content mb-50">
                    <div class="member-info">
                        <h3 class="side-heading red-dark">Govind Kumar</h3>
                        <p class="position">B. Tech., MBA</p>
                        <p> 23 years of experience in MNCs and startups. Authored 5 books. Three books are related to AI and ML – Comprehensive Machine Learning, Python Programming, De-Mystifying Math & Stats for Machine Learning. Research interests in Fraud Risk Analytics and Customer AI.</p>
                    </div>
                    <div class="member-img text-center mb-10">
                        <img src="{{ url('assets/images/instructor/instructor-1.jpg') }}" class="rounded-circle" alt="Instructor Image">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12">
                <div class="counter-style-three mb-50 mt-4">
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-document"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="count">23</span>+</h2>
                            <p>Experience (Years)</p>
                        </div>
                    </div>
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-rating"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="count">5</span></h2>
                            <p>Authored books</p>
                        </div>
                    </div>
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-dashboard-1"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="count">99,848</span>+</h2>
                            <p>Students Trained</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9 col-lg-12">
                <div class="team-content mb-50">
                    <div class="member-info">
                        <h3 class="side-heading red-dark">Kiran Raj</h3>
                        <p class="position">BE, M. Tech</p>
                        <p> Data science and machine learning professional with signal processing background having 8 years of research experience in Artificial Intelligence and Machine Learning. 4 research publications. Research interests in Healthcare AI and Biomedical Signal Processing.</p>
                    </div>
                    <div class="member-img text-center mb-10">
                        <img src="{{ url('assets/images/instructor/instructor-2.jpg') }}" class="rounded-circle" alt="Instructor Image">
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12">
                <div class="counter-style-three mb-50 mt-4">
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-document"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="count">8</span>+</h2>
                            <p>Experience (Years)</p>
                        </div>
                    </div>
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-rating"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="count">4</span></h2>
                            <p>Research Publications</p>
                        </div>
                    </div>
                    <div class="counter-item">
                        <div class="icon">
                            <i class="flaticon-dashboard-1"></i>
                        </div>
                        <div class="text">
                            <h2 class="number"><span class="count">25</span>+</h2>
                            <p>Courses Completed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Team Details Section ======-->

<!--====== AI & Ml Video Section ======-->
<section class="skill-area skill-style-two pb-65">
    <div class="container">
        <div class="row">
            <h3 class="side-heading red-dark text-uppercase pb-25"> AI & ML Course Videos </h3>
            <div class="col-lg-12">
                <div class="row">
                    <video autoplay="" loop="" controls="" width="100%" height="480">
                        <source type="video/mp4" src="{{ url('assets\videos\webinar\Introduction-to-AI-and-ML.mp4') }}">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section><!--====== AI & Ml Video Section ======-->

<!--====== Start Workshop Topic Section ======-->
<section class="skill-area skill-style-two pb-65">
    <div class="container">
        <div class="row">
            <h3 class="side-heading red-dark text-uppercase pb-25"> Steps to Apply Price </h3>
            <div class="col-lg-12">
                <div class="row">
                    <ul class="list-tick-mark">
                        <li class="check color-red-dark">Click <b>Subscribe Now</b> Button</li>
                        <li class="check color-red-dark">Fill Basic Information</li>
                        <li class="check color-red-dark">Proceed to Payment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Skill Section ======-->

<!--====== Start Pricing Section ======-->
<section class="pricing-area pricing-style-one bg_cover pt-110 pb-90" style="background-image: url(assets/images/bg/pricing-bg-1.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title section-title-white text-center mb-65">
                    <span class="sub-title sub-title-bg blue-light-bg">Our Pricing</span>
                    <h2>AI & ML Webinar</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- <div class="course-banner-info col-md-6 col-lg-8">
                <h2 class="text-white">AI & ML Webinar</h2>
                <p>Learn A-Z everything about Python, from the basics, to advanced topics like Python GUI, Python Data Analysis, and more!</p>
            </div> -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="pricing-item mb-40">
                    <div class="pricing-title-price">
                        <div class="pricing-title">
                            <h3 class="title">Subscribe Now</h3>
                            <span class="discount">Payless, Learn More</span>
                        </div>
                        <div class="pricing-price">
                            <h3 class="price">@99 &nbsp;<span class="currency">AED</span></h3>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <p>Future-proof your career with in-demand AI & ML skills. Start your mind-blowing journey today with us.</p>
                        <ul class="list-tick-mark">
                            <li class="check color-red-dark">Machine Learning & AI Concepts</li>
                            <li class="check color-red-dark">Introduction To Python</li>
                            <li class="check color-red-dark">Math Behind Building The AI Solutions</li>
                            <li class="check color-red-dark">Regression & Data Visualization</li>
                            <li class="check color-red-dark">Classification Algorithms</li>
                            <li class="check color-red-dark">Exploratory Data Analysis</li>
                        </ul>
                        <h2 class="text-center mb-25 mt-25 red-dark border-top border-bottom pt-1"><span class="text-sm">@</span>99 <span class="text-sm">AED</span></h2>
                        <a href="javascript:void(0);" class="main-btn enroll-btn" data-course="ai-ml-webinar">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Pricing Section ======-->

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