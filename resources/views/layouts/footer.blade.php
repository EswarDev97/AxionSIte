<!--====== Search From ======-->
<div class="modal fade" id="signin-modal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body pt-0 pb-0">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="sign-in-header pt-4">Sign In</h2>
                        <div class="col-md-12">
                            <form method="post" class="sign-in-form" novalidate>
                                <div class="col-md-12">
                                    <div class="form-error mb-2"></div>
                                    <div class="form_group">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username / Email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form_group">
                                        <input type="password" class="form-control" name="sign-in-password" id="sign-in-password" placeholder="Password" required>
                                    </div>
                                </div>
                    
                                <div class="col-md-12">
                                    <div class="form_group">
                                        <button type="submit" class="sign-in-btn form-control">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 no-account-container">
                        <h3> Don't you have an account?</h3>
                        <a href="{{ (Route::has('sign-up')) ? route('sign-up') : 'not-found' }}" class="text-center w-100 sign-up-text">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--====== Search From ======-->


<!--====== Start Footer ======-->
<footer class="footer-area footer-default black-bg footer-map">
    <div class="container">
        <div class="footer-widget pt-65 pb-15">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget about-widget mb-40">
                        <div class="logo mb-15 text-center">
                            <a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}"><img src="{{ url('assets/images/logo/logo-2.png') }}" alt="Theme Logo"></a>
                        </div>
                        <div class="about-content">
                            <p>Connection Point Technology is a foreseeing technical software design company; working towards a successful inhabitation of the latest AI & ML techniques in the Banking and Insurance Sector.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget footer-nav-widget mb-40">
                        <h4 class="widget-title text-underline">Our Services</h4>
                        <ul class="footer-nav list-style-dot">
                            <li><a href="{{ (Route::has('data-analytics')) ? route('data-analytics') : 'not-found' }}">Data Analytics</a></li>
                            <li><a href="{{ (Route::has('image-recognition')) ? route('image-recognition') : 'not-found' }}">Image Recognition</a></li>
                            <li><a href="{{ (Route::has('anomaly-detection')) ? route('anomaly-detection') : 'not-found' }}">Anomaly Detection</a></li>
                        </ul>

                        <h4 class="widget-title text-underline mt-3">Our Products</h4>
                        <ul class="footer-nav list-style-dot">
                            <li><a href="{{ (Route::has('veyes-claim-survey')) ? route('veyes-claim-survey') : 'not-found' }}">Veyes Claim Survey</a></li>
                            <li><a href="{{ (Route::has('live-streaming')) ? route('live-streaming') : 'not-found' }}">Live Streaming</a></li>
                            <li><a href="{{ (Route::has('valuation')) ? route('valuation') : 'not-found' }}">Valuation</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget footer-nav-widget mb-40">
                        <h4 class="widget-title text-underline">Useful Links</h4>
                        <ul class="footer-nav list-style-dot">
                            <li><a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}">Home</a></li>
                            <li><a href="{{ (Route::has('corporate')) ? route('corporate') : 'not-found' }}">Corporate</a></li>
                            <li><a href="{{ (Route::has('products')) ? route('products') : 'not-found' }}">Products</a></li>
                            <li><a href="{{ (Route::has('services')) ? route('services') : 'not-found' }}">Services</a></li>
                            <li><a href="{{ (Route::has('cp-academy')) ? route('cp-academy') : 'not-found' }}">CP Academy</a></li>
                            <!-- <li><a href="{{ (Route::has('news-and-events')) ? route('news-and-events') : 'not-found' }}">News & Events</a></li> -->
                            <li><a href="{{ (Route::has('privacy')) ? route('privacy') : 'not-found' }}">Privacy</a></li>
                            <li><a href="{{ (Route::has('terms')) ? route('terms') : 'not-found' }}">Terms</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget footer-nav-widget mb-40">
                        <h4 class="widget-title text-underline">Contact Details</h4>
                        <ul class="footer-nav list-style-dot list-style-none">
                            <li class="text-nowrap"><i class="far fa-envelope"></i><span><a href="mailto:support@cp.technology.com">support@cp.technology</a></span></li>
                            <li><i class="far fa-phone"></i><span><a href="tel:+04 576 4488">04 576 4488</a></span></li>
                            <li class="position-relative"><i class="far fa-map-marker-alt"></i><span class="footer-address">1015, Churchill Tower, Business Bay, Dubai, UAE</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>We accept: 
                        <img src="{{ url('assets/images/payment/mc_logo.svg') }}" class="payment-mc-logo" alt="master-card">
                        <img src="{{ url('assets/images/payment/visa_logo.svg') }}" class="payment-visa-logo" alt="visa">
                        <img src="{{ url('assets/images/payment/up_logo.svg') }}" class="payment-up-logo" alt="unionpay">
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <p>Copyright &copy; {{ date('Y') }} CP Technology. All Right Reserved</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- <ul class="social-link float-md-right float-sm-none">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</footer><!--====== End Footer ======-->

<script>
    var host = '{{ env('APP_URL') }}';
</script>

<!--====== back-to-top ======-->
<a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
<!--====== Jquery js ======-->
<script src="{{ url('assets/vendor/jquery.min.js') }}"></script>
<!--====== Bootstrap js ======-->
<script src="{{ url('assets/vendor/popper/popper.min.js') }}"></script>
<!--====== Bootstrap js ======-->
<script src="{{ url('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--====== Slick js ======-->
<script src="{{ url('assets/vendor/slick/slick.min.js') }}"></script>
<!--====== Magnific js ======-->
<script src="{{ url('assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
<!--====== Isotope js ======-->
<script src="{{ url('assets/vendor/isotope.min.js') }}"></script>
<!--====== Imagesloaded js ======-->
<script src="{{ url('assets/vendor/imagesloaded.min.js') }}"></script>
<!--====== Counterup js ======-->
<script src="{{ url('assets/vendor/jquery.counterup.min.js') }}"></script>
<!--====== Waypoints js ======-->
<script src="{{ url('assets/vendor/jquery.waypoints.js') }}"></script>
<!--====== Number js ======-->
<script src="{{ url('assets/vendor/jquery.nice-number.min.js') }}"></script>
<!--====== Nice-select js ======-->
<script src="{{ url('assets/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
<!--====== jquery UI js ======-->
<script src="{{ url('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
<!--====== Donutty js ======-->
<script src="{{ url('assets/vendor/donutty-jquery.min.js') }}"></script>
<!--====== Main js ======-->
<script src="{{ url('assets/js/theme.js') }}"></script>
<script src="{{ url('assets/js/script.js') }}"></script>
<!--====== Plugin js ======-->
<script src="{{ url('assets/js/jquery.payfield.js') }}"></script>
<script src="{{ url('assets/js/jquery.inputmask.min.js') }}"></script>
</body>
</html>