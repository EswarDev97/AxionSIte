@extends('layouts.main')

@section('web-content')
<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="breadcrumbs-wrapper bg_cover" style="background-image: url(assets/images/bg/breadcrumbs-bg-1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-text text-center">
                        <h1 class="title">Contact Us</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Hero Section ======-->
<!--====== Start Contact Information Section ======-->
<section class="contact-information-area contact-information-style-one pt-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="brand-logo text-center mb-100">
                    <a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}"><img src="{{ url('assets/images/logo/contact-logo.png') }}" alt="contact logo"></a>
                    <h2 class="pt-10"> Axion Technical services  </h2>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-12">
                <div class="information-wrapper mb-50">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="information-item mb-60">
                                <div class="icon">
                                    <i class="flaticon-map"></i>
                                </div>
                                <div class="text">
                                    <h5>chennai</h5>
                                    <p>806, 48th Cross St, Valmiki Nagar, Thiruvalluvar Nagar, Thiruvanmiyur, Chennai, Tamil Nadu 600041</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="information-item mb-60">
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="text">
                                    <h5>Email Address</h5>
                                    <p><a href="mailto:arul.ramdoss@axionpcs.in">arul.ramdoss@axionpcs.in</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="information-item mb-60">
                                <div class="icon">
                                    <i class="flaticon-phone"></i>
                                </div>
                                <div class="text">
                                    <h5>Our Hotlines</h5>
                                    <!-- <p><span>Phone :</span><a href="tel:+04 576 4488">+04 576 4488</a></p> -->
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Contact Information Section ======-->
<!--====== Start Map section ======-->
<section class="contact-page-map">
    <div class="map-box">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.9177289810827!2d80.2579606738104!3d12.977113714759913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525d449ac80581%3A0x8d8f6d9b5afa7689!2sAxion%20Technical%20Services%20Private%20Limited!5e0!3m2!1sen!2sin!4v1717503543850!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section><!--====== End Map section ======-->
<!--====== Start Contact Section ======-->
<section class="contact-area contact-style-two" id="contact-form-area">
    <div class="contact-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-55">
                        <h2>Send Us Message</h2>
                        <h5>Don’t Hesited To Contact With Us! Feel Free To Message Us</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <button class="close" data-dismiss="alert">&times;</button>
                                <div class="text">{{ session('success') }}</div>
                            </div>
                        @elseif (session('failure'))
                            <div class="alert alert-danger alert-dismissible fade show">
                                <button class="close" data-dismiss="alert">&times;</button>
                                <div class="text">{{ session('failure') }}</div>
                            </div>
                        @endif
                        <form method="post" action="{{ url('contact/send-email') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form_group">
                                        <input type="text" class="form_control" placeholder="First Name" name="fname" value="{{ old('fname') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form_group">
                                        <input type="text" class="form_control" placeholder="Last Name" name="lname" value="{{ old('lname') }}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form_group">
                                        <input type="text" class="form_control" placeholder="Phone Number" name="phone" value="{{ old('phone') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form_group">
                                        <textarea name="message" placeholder="Message" class="form_control" value="{{ old('message') }}" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form_group text-center">
                                        <button class="main-btn btn-purple w-100">send message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Contact Section ======-->
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