@extends('layouts.main')

@section('web-content')
<!--====== Start Hero Section ======-->
<section class="hero-area">
    <div class="breadcrumbs-wrapper bg_cover anomaly-detection-banner-img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-text text-center">
                        <h1 class="title">Anomaly Detection</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}">Home</a></li>
                            <li><a href="{{ (Route::has('services')) ? route('services') : 'not-found' }}">Services</a></li>
                            <li class="active">Anomaly Detection</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Hero Section ======-->
<!--====== Start Product Details Section ======-->
<section class="product-details-section pt-30 pb-60">
    <div class="container">
        <div class="product-details-wrapper pb-20">
            <div class="discription-area mt-30">
                <div class="content-box">
                    <h3 class="text-uppercase pb-20">Anomaly Detection</h3>
                    <div class="row">
                        <ul class="check-list list-circle-bg mb-20">
                            <li class="mb-10 pl-5">Employ supervised algorithms, whose performances highly depend on attack-free training data.</li>

                            <li class="mb-10 pl-5">Unsupervised anomaly detection techniques, however, the system can be trained with unlabeled data and is capable of detecting previously unseen attacks.</li>

                            <li class="mb-10 pl-5">Categorized the existing ANIDSs based on its type, class, nature of detection/ processing, level of security, etc. We also enlist some proximity measures for intrusion data analysis and detection.</li>

                            <li class="mb-10 pl-5">The intrusion detection is one of the important components of infrastructure protection mechanism.</li>
                        </ul>
                    </div>
                </div>                
            </div>
        </div>

    </div>
</section>
<!--====== End Product Details Section ======-->

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