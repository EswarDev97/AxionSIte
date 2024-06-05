@extends('layouts.main')

@section('web-content')
<!--====== Start Newsletter Section ======-->
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
<!--====== End Newsletter Section ======-->
<!--====== Start Blog Section ======-->
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
        <!-- <div class="row">
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
        </div> -->
    </div>
</section>
<!--====== End Blog Section ======-->




@endsection