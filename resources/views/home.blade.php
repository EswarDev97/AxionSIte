@extends('layouts.main')

@section('web-content')
<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="hero-wrapper-one hero-slider-two">
        <div class="single-slider bg_cover" style="background-image: url(assets/images/hero/hero-slider-1_1.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero-content home-slider text-center">
                            <div class="home-slider-text">
                                <h1 class="position-relative"> 
                                    <small class="text-white home-slider-pre-text">and</small> 
                                    Cutting Edge
                                    <div class="banner-animate-text text-left">
                                        <span>Innovation</span>
                                        <span>Excellence</span>
                                        <span>Quality</span>
                                        <span>Care</span>
                                        <span class="text-nowrap">Technology <small class="text-white home-slider-post-text">too</small></span>
                                    </div>
                                </h1>
                            </div>
                            <ul class="button">
                                <li><a href="{{ url('corporate#about-us') }}" class="main-btn btn-red-dark">get started now</a></li>
                                <li><a href="{{ (Route::has('services')) ? route('services') : 'not-found' }}" class="main-btn btn-white">explore more</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Hero Section ======-->
<!--====== Start Features Section ======-->
<section class="fancy-features">
    <div class="continer-fluid p-0">
        <div class="features-style-one pt-70 pb-30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-45">
                            <span class="sub-title red-dark text-underline">great journey for AI solutions</span>
                            <h2 class="text-uppercase">specializes in building Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="block-style-one animate-icon d-flex mb-40">
                            <div class="icon">
                                <i class="flaticon-project-management"></i>
                            </div>
                            <div class="text">
                                <h3 class="title text-underline">Excellence</h3>
                                <p>Our clients expect nothing less from us, and we strive to deliver the highest levels of customer service and product excellence. That’s one reason why we discuss the “Circle of Operational Excellence” with our clients from the time to time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="block-style-one animate-icon d-flex mb-40">
                            <div class="icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                            <div class="text">
                                <h3 class="title text-underline">Quality</h3>
                                <p>We hold ourselves responsible to the Highest Standards.  This gives us motivation to compete with ourselves and raise the bar.  This constant quest for perfection helps us Produce Quality Work, Consistently.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="block-style-one animate-icon d-flex mb-40">
                            <div class="icon">
                                <i class="flaticon-compliant"></i>
                            </div>
                            <div class="text">
                                <h3 class="title text-underline">Best IT Solutions</h3>
                                <p>With our cutting edge technology we help our clients with an operational competence, starting from claims registration to claims settlements at an optimum cost. This enhances the client experience by reducing the claim settlement time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Features Section ======-->
<!--====== Start About Section ======-->
<section class="fancy-about fancy-about-one pt-130 position-relative pb-45">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="about-img-box mb-50">
                    <img src="{{ url('assets/images/about/about-1.jpg') }}" alt="About image">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="text-wrapper mb-50">
                    <div class="section-title mb-20">
                        <span class="sub-title red-dark text-underline">who we are</span>
                        <h2 class="text-transform">The Enterprise 
                            Productivity Platform 
                            for Complex Data</h2>
                    </div>
                    <p>Connection Point Technology is a strong consultancy and a professional IT service provider to help organizations to sink with the latest global technologies into their product and services. We offer consulting, full time project support and comprehensive training to help our customers meet their business goals through cloud automation and transformation.</p>
                    <a href="{{ url('corporate#about-us') }}" class="main-btn">learn more us</a>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End About Section ======-->
<!--====== Start Features Section ======-->
<section class="fancy-features light-gray-bg pt-90 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-45">
                    <span class="sub-title red-dark text-underline">what we do</span>
                    <!-- <h2 class="text-uppercase">Solutions Customers Have 
                        Built with Instabase</h2> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="block-style-two animate-icon mb-40">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-12.png') }}" alt>
                    </div>
                    <div class="text">
                        <h3 class="text-underline">Data Preparation</h3>
                        <p>Connection Point provides connectors to over 25 leading data sources on-premise and in the cloud.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="block-style-two animate-icon mb-40">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-17.png') }}" alt>
                    </div>
                    <div class="text">
                        <h3 class="text-underline">Visualization</h3>
                        <p>Connection Point facilitates robust statistical analysis, including univariate and bivariate analysis.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="block-style-two animate-icon mb-40">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-14.png') }}" alt>
                    </div>
                    <div class="text">
                        <h3 class="text-underline">Machine Learning</h3>
                        <p>Connection Point AutoML uses leading algorithms and frameworks that is an easy to use. </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="block-style-two animate-icon mb-40">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-10.png') }}" alt>
                    </div>
                    <div class="text">
                        <h3 class="text-underline">DataOps</h3>
                        <p>Connection Point provides better visual flow, data quality and advanced automation. </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="block-style-two animate-icon mb-40">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-18.png') }}" alt>
                    </div>
                    <div class="text">
                        <h3 class="text-underline">MLOps</h3>
                        <p>Connection Point automation nodes are production nodes with advanced automation capabilities.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="block-style-two animate-icon mb-40">
                    <div class="icon">
                        <img src="{{ url('assets/images/icon/icon-6.png') }}" alt>
                    </div>
                    <div class="text">
                        <h3 class="text-underline">Analytic Apps</h3>
                        <p>Connection Point makes it easy to create project dashboards and share them with business users.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Features Section ======-->
<!--====== Start CTA Section ======
<section class="cta-area cta-style-one bg_cover pt-70 pb-40" style="background-image: url(assets/images/bg/cta-bg-1.jpg);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="cta-content mb-30">
                    <h3 class="text-underline">Full Truckload Planning Reimagined Experts in Security
                        Dynamic Load Planning & Dispatching</h3>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="button float-lg-right float-md-none mb-30">
                    <a href="about.html" class="main-btn">Let’s meet us</a>
                </div>
            </div>
        </div>
    </div>
</section>====== End CTA Section ======-->
<!--====== Start Projects Section ======-->
<section class="portfolio-area pt-90 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center mb-45">
                    <span class="sub-title red-dark text-underline">Our Products</span>
                    <!-- <h2 class="text-uppercase">over 15 years, customers have 
                        Come to IT solutions.</h2> -->
                </div>
            </div>
        </div>
        <div class="portfolio-slider-one">
            <div class="portfolio-block-one">
                <div class="portfolio-img">
                    <img src="{{ url('assets/images/bg/veyes-claim-survey-bg-2.jpg') }}" alt="project image">
                </div>
                <div class="portfolio-content text-center">
                    <a href="{{ (Route::has('veyes-claim-survey')) ? route('veyes-claim-survey') : 'not-found' }}" class="cat-btn">Veyes Claim Survey</a>
                </div>
            </div>
            <div class="portfolio-block-one">
                <div class="portfolio-img">
                    <img src="{{ url('assets/images/bg/live-streaming-bg-2.jpg') }}" alt="project image">
                </div>
                <div class="portfolio-content text-center">
                    <a href="{{ (Route::has('live-streaming')) ? route('live-streaming') : 'not-found' }}" class="cat-btn">Live Streaming</a>
                </div>
            </div>
            <div class="portfolio-block-one">
                <div class="portfolio-img">
                    <img src="{{ url('assets/images/bg/valuation-bg-2.jpg') }}" alt="project image">
                </div>
                <div class="portfolio-content text-center">
                    <a href="{{ (Route::has('valuation')) ? route('valuation') : 'not-found' }}" class="cat-btn">Valuation</a>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Projects Section ======-->
<!--====== Start Service Section ======
<section class="clients-area clients-style-one light-gray-bg pt-70 pb-80 clients-map">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center mb-45">
                    <span class="sub-title red-dark">popular partners</span>
                    <h2 class="text-uppercase">We have <span class="red-dark">2563+</span> world wide clients</h2>
                </div>
            </div>
        </div>
        <div class="clients-wrapper">
            <div class="clients-slider-one">
                <div class="client-item">
                    <div class="client-img">
                        <img src="{{ url('assets/images/clients/01.png') }}" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="{{ url('assets/images/clients/02.png') }}" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="{{ url('assets/images/clients/03.png') }}" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="{{ url('assets/images/clients/04.png') }}" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="{{ url('assets/images/clients/05.png') }}" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="{{ url('assets/images/clients/06.png') }}" alt="clients image">
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-img">
                        <img src="{{ url('assets/images/clients/03.png') }}" alt="clients image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>====== End Service Section ======-->
<!--====== Start Service Section ======
<section class="service-area dark-black-bg pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center service-style-one">
            <div class="col-lg-4">
                <div class="text-wrapper mb-40">
                    <div class="section-title section-title-white mb-20">
                        <span class="sub-title red-dark text-underline">Our popular services</span>
                        <h2 class="text-uppercase">Best Professional
                            IT Solutiuons
                            </h2>
                    </div>
                    <p>Sed perspiciatis unde omniste natus voluptate 
                        accusantiuy doloremque laudantium totam aperm
                        eaque quae ainvtore veritatis architecto</p>
                    <a href="service-1.html" class="main-btn">explore more services</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-wrapper">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="block-style-three animate-icon border-right-1">
                                <div class="icon">
                                    <i class="flaticon-puzzle-1"></i>
                                </div>
                                <div class="text">
                                    <h3 class="title"><a href="service-details.html" class="text-underline">Infrastructure</a></h3>
                                    <p>But I must explain to you how all this mistaken ideofe denouncing pleasure</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block-style-three animate-icon pr-lg-0">
                                <div class="icon">
                                    <i class="flaticon-solution-1"></i>
                                </div>
                                <div class="text">
                                    <h3 class="title"><a href="service-details.html" class="text-underline">IT Engineering</a></h3>
                                    <p>But I must explain to you how all this mistaken ideofe denouncing pleasure</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block-style-three animate-icon border-right-1">
                                <div class="icon">
                                    <i class="flaticon-cyber-security"></i>
                                </div>
                                <div class="text">
                                    <h3 class="title"><a href="service-details.html" class="text-underline">cyber security</a></h3>
                                    <p>But I must explain to you how all this mistaken ideofe denouncing pleasure</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block-style-three animate-icon pr-lg-0">
                                <div class="icon">
                                    <i class="flaticon-internet-of-things"></i>
                                </div>
                                <div class="text">
                                    <h3 class="title"><a href="service-details.html" class="text-underline">Apps Development</a></h3>
                                    <p>But I must explain to you how all this mistaken ideofe denouncing pleasure</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>====== End Service Section ======-->
<!--====== Start Team Section ======
<section class="team-area team-style-one pb-130 pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-45">
                    <span class="sub-title text-underline red-dark">meet our team</span>
                    <h2 class="text-uppercase">let’s talk our professional 
                        team members</h2>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
                <div class="team-item mb-50">
                    <div class="team-img">
                        <img src="{{ url('assets/images/team/img_1.jpg') }}" alt="Team img">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h6 class="title"><a href="team-details.html">James E. Villegas</a></h6>
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
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
                <div class="team-item mb-50">
                    <div class="team-img">
                        <img src="{{ url('assets/images/team/img_2.jpg') }}" alt="Team img">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h6 class="title"><a href="team-details.html">Timothy B. Garcia</a></h6>
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
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
                <div class="team-item mb-50">
                    <div class="team-img">
                        <img src="{{ url('assets/images/team/img_3.jpg') }}" alt="Team img">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h6 class="title"><a href="team-details.html">Brian H. Rodriguez</a></h6>
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
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
                <div class="team-item mb-50">
                    <div class="team-img">
                        <img src="{{ url('assets/images/team/img_4.jpg') }}" alt="Team img">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h6 class="title"><a href="team-details.html">Donald N. Souciee</a></h6>
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
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
                <div class="team-item mb-50">
                    <div class="team-img">
                        <img src="{{ url('assets/images/team/img_5.jpg') }}" alt="Team img">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h6 class="title"><a href="team-details.html">Morris A. Savador</a></h6>
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
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12">
                <div class="team-item mb-50">
                    <div class="team-img">
                        <img src="{{ url('assets/images/team/img_6.jpg') }}" alt="Team img">
                        <div class="team-overlay">
                            <div class="team-content">
                                <h6 class="title"><a href="team-details.html">James E. Villegas</a></h6>
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
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="notification-box">
                    <h5><span><img src="{{ url('assets/images/notification.png') }}" alt="Bell Image"></span> Become a Team Member With Our Company</h5>
                    <a href="#" class="main-btn main-btn-sm">join with us</a>
                </div>
            </div>
        </div>
    </div>
</section>====== End Team Section ======-->
<!--====== Start Counter Section ======
<section class="counter-area counter-style-one bg_cover pt-80 pb-30" style="background-image: url(assets/images/bg/counter-bg-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter-item text-center mb-40">
                    <div class="icon">
                        <i class="flaticon-document"></i>
                    </div>
                    <h2 class="number"><span class="count">25630</span>+</h2>
                    <p>Happy Customer</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter-item text-center mb-40">
                    <div class="icon">
                        <i class="flaticon-rating"></i>
                    </div>
                    <h2 class="number"><span class="count">75646</span>+</h2>
                    <p>Star Work Reviews</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter-item text-center mb-40">
                    <div class="icon">
                        <i class="flaticon-dashboard-1"></i>
                    </div>
                    <h2 class="number"><span class="count">89634</span>+</h2>
                    <p>Project Complate</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter-item text-center mb-40">
                    <div class="icon">
                        <i class="flaticon-trophy"></i>
                    </div>
                    <h2 class="number"><span class="count">96325</span>+</h2>
                    <p>Win Of Awards</p>
                </div>
            </div>
        </div>
    </div>
</section>====== End Counter Section ======-->
<!--====== Start Pricing Section ======
<section class="pricing-area pricing-style-one light-gray-bg pt-120 pb-100">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="section-title mb-55">
                    <span class="sub-title red-dark text-underline">Awesome pricing plan</span>
                    <h2 class="text-uppercase">we provide an smart pricing 
                        package for it solutions</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="pricing-nav float-md-right mb-65">
                    <ul class="nav nav-tabs">
                        <li>
                            <a class="nav-link active" data-toggle="tab" href="#monthly">Monthly</a>
                        </li>
                        <li>
                            <a class="nav-link" data-toggle="tab" href="#yearly">Yearly</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="monthly">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-item mb-40">
                            <div class="pricing-title-price">
                                <div class="pricing-title">
                                    <h3 class="title">Basic Plan</h3>
                                    <span class="discount">25% Save Package</span>
                                </div>
                                <div class="pricing-price">
                                    <h3 class="price"><span class="currency">$</span>19.99<span class="sm-text">for Monthly</span></h3>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <p>Take a trivial example which of us ever undertakes laborious physical exercise On the other hand</p>
                                <ul class="list">
                                    <li class="check">30 Days Trial Features</li>
                                    <li class="check">Synced To Cloud Database</li>
                                    <li class="check">Easy Website Builder</li>
                                    <li class="uncheck">10 Hours Of Support</li>
                                    <li class="uncheck">Social Media Integration</li>
                                    <li class="uncheck">Unlimited Features</li>
                                </ul>
                                <a href="pricing.html" class="main-btn">Choose this pricing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-item mb-40">
                            <div class="pricing-title-price">
                                <div class="pricing-title">
                                    <h3 class="title">Regular Plan</h3>
                                    <span class="discount">25% Save Package</span>
                                </div>
                                <div class="pricing-price">
                                    <h3 class="price"><span class="currency">$</span>39.99<span class="sm-text">for Monthly</span></h3>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <p>Take a trivial example which of us ever undertakes laborious physical exercise On the other hand</p>
                                <ul class="list">
                                    <li class="check">30 Days Trial Features</li>
                                    <li class="check">Synced To Cloud Database</li>
                                    <li class="check">Easy Website Builder</li>
                                    <li class="check">10 Hours Of Support</li>
                                    <li class="check">Social Media Integration</li>
                                    <li class="check">Unlimited Features</li>
                                </ul>
                                <a href="pricing.html" class="main-btn">Choose this pricing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-item mb-40">
                            <div class="pricing-title-price">
                                <div class="pricing-title">
                                    <h3 class="title">Silver Plan</h3>
                                    <span class="discount">25% Save Package</span>
                                </div>
                                <div class="pricing-price">
                                    <h3 class="price"><span class="currency">$</span>99.99<span class="sm-text">for Monthly</span></h3>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <p>Take a trivial example which of us ever undertakes laborious physical exercise On the other hand</p>
                                <ul class="list">
                                    <li class="check">30 Days Trial Features</li>
                                    <li class="check">Synced To Cloud Database</li>
                                    <li class="check">Easy Website Builder</li>
                                    <li class="check">10 Hours Of Support</li>
                                    <li class="check">Social Media Integration</li>
                                    <li class="check">Unlimited Features</li>
                                </ul>
                                <a href="pricing.html" class="main-btn">Choose this pricing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="yearly">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-item mb-40">
                            <div class="pricing-title-price">
                                <div class="pricing-title">
                                    <h3 class="title">Basic Plan</h3>
                                    <span class="discount">25% Save Package</span>
                                </div>
                                <div class="pricing-price">
                                    <h3 class="price"><span class="currency">$</span>19.99<span class="sm-text">for Monthly</span></h3>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <p>Take a trivial example which of us ever undertakes laborious physical exercise On the other hand</p>
                                <ul class="list">
                                    <li class="check">30 Days Trial Features</li>
                                    <li class="check">Synced To Cloud Database</li>
                                    <li class="check">Easy Website Builder</li>
                                    <li class="uncheck">10 Hours Of Support</li>
                                    <li class="uncheck">Social Media Integration</li>
                                    <li class="uncheck">Unlimited Features</li>
                                </ul>
                                <a href="pricing.html" class="main-btn">Choose this pricing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-item mb-40">
                            <div class="pricing-title-price">
                                <div class="pricing-title">
                                    <h3 class="title">Regular Plan</h3>
                                    <span class="discount">25% Save Package</span>
                                </div>
                                <div class="pricing-price">
                                    <h3 class="price"><span class="currency">$</span>39.99<span class="sm-text">for Monthly</span></h3>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <p>Take a trivial example which of us ever undertakes laborious physical exercise On the other hand</p>
                                <ul class="list">
                                    <li class="check">30 Days Trial Features</li>
                                    <li class="check">Synced To Cloud Database</li>
                                    <li class="check">Easy Website Builder</li>
                                    <li class="check">10 Hours Of Support</li>
                                    <li class="check">Social Media Integration</li>
                                    <li class="check">Unlimited Features</li>
                                </ul>
                                <a href="pricing.html" class="main-btn">Choose this pricing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-item mb-40">
                            <div class="pricing-title-price">
                                <div class="pricing-title">
                                    <h3 class="title">Silver Plan</h3>
                                    <span class="discount">25% Save Package</span>
                                </div>
                                <div class="pricing-price">
                                    <h3 class="price"><span class="currency">$</span>99.99<span class="sm-text">for Monthly</span></h3>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <p>Take a trivial example which of us ever undertakes laborious physical exercise On the other hand</p>
                                <ul class="list">
                                    <li class="check">30 Days Trial Features</li>
                                    <li class="check">Synced To Cloud Database</li>
                                    <li class="check">Easy Website Builder</li>
                                    <li class="check">10 Hours Of Support</li>
                                    <li class="check">Social Media Integration</li>
                                    <li class="check">Unlimited Features</li>
                                </ul>
                                <a href="pricing.html" class="main-btn">Choose this pricing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>====== End Pricing Section ======-->
<!--====== Start Blog Section ======
<section class="blog-area blog-style-one pt-120 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="section-title text-center mb-50">
                    <span class="sub-title text-underline red-dark">Latest news & Blog</span>
                    <h2 class="text-uppercase">Get every single update
                        article & tipes</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-post-item mb-40">
                    <div class="post-thumbnail">
                        <img src="{{ url('assets/images/blog/1.jpg') }}" alt="Blog Image">
                    </div>
                    <div class="entry-content">
                        <div class="b-user-admin d-flex justify-content-end">
                            <a href="#" class="d-inline-flex align-items-center">
                                <div class="thumb"><img src="{{ url('assets/images/blog/user-1.jpg') }}" alt="USer Image"></div>
                                <span>Washington</span>
                            </a>
                        </div>
                        <div class="post-meta">
                            <ul>
                                <li><span><i class="far fa-calendar-alt"></i><a href="#">25 November 2021</a></span></li>
                                <li><span><i class="far fa-comments"></i><a href="#">Comments (05)</a></span></li>
                            </ul>
                        </div>
                        <h3 class="title"><a href="blog-details.html" class="text-underline">Build Launch Powerful Responsives 
                            Websites With Editor Perfect</a></h3>
                        <p>Sed ut perspiciatis unde omnsiste natus errors voluptatem accusantium doloremque laudatium totae rem aperiam eaque quae abillo</p>
                        <a href="blog-details.html" class="main-btn filled-btn">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-post-item mb-40">
                    <div class="post-thumbnail">
                        <img src="{{ url('assets/images/blog/2.jpg') }}" alt="Blog Image">
                    </div>
                    <div class="entry-content">
                        <div class="b-user-admin d-flex justify-content-end">
                            <a href="#" class="d-inline-flex align-items-center">
                                <div class="thumb"><img src="{{ url('assets/images/blog/user-2.jpg') }}" alt="USer Image"></div>
                                <span>Washington</span>
                            </a>
                        </div>
                        <div class="post-meta">
                            <ul>
                                <li><span><i class="far fa-calendar-alt"></i><a href="#">25 November 2021</a></span></li>
                                <li><span><i class="far fa-comments"></i><a href="#">Comments (05)</a></span></li>
                            </ul>
                        </div>
                        <h3 class="title"><a href="blog-details.html" class="text-underline">Smashing Podcast Episode 36 With Miriam Suzanne Is Future</a></h3>
                        <p>Sed ut perspiciatis unde omnsiste natus errors voluptatem accusantium doloremque laudatium totae rem aperiam eaque quae abillo</p>
                        <a href="blog-details.html" class="main-btn filled-btn">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-post-item mb-40">
                    <div class="post-thumbnail">
                        <img src="{{ url('assets/images/blog/3.jpg') }}" alt="Blog Image">
                    </div>
                    <div class="entry-content">
                        <div class="b-user-admin d-flex justify-content-end">
                            <a href="#" class="d-inline-flex align-items-center">
                                <div class="thumb"><img src="{{ url('assets/images/blog/user-3.jpg') }}" alt="USer Image"></div>
                                <span>Washington</span>
                            </a>
                        </div>
                        <div class="post-meta">
                            <ul>
                                <li><span><i class="far fa-calendar-alt"></i><a href="#">25 November 2021</a></span></li>
                                <li><span><i class="far fa-comments"></i><a href="#">Comments (05)</a></span></li>
                            </ul>
                        </div>
                        <h3 class="title"><a href="blog-details.html" class="text-underline">Meet Image Optimization New Smhing Book By Addy Osmanie</a></h3>
                        <p>Sed ut perspiciatis unde omnsiste natus errors voluptatem accusantium doloremque laudatium totae rem aperiam eaque quae abillo</p>
                        <a href="blog-details.html" class="main-btn filled-btn">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>====== End Blog Section ======-->
<!--====== Start Newsletter Section ======
<section class="newsletter-area newsletter-style-one">
    <div class="container">
        <div class="newsletter-wrapper bg_cover" style="background-image: url(assets/images/bg/newsletter-bg-1.jpg);">
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
                                <button class="main-btn btn-black">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>====== End Newsletter Section ======-->
@endsection