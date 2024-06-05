<!-- header Navigation -->
<div class="header-navigation">
    <div class="container-fluid">
        <div class="primary-menu">
            <div class="site-branding">
                <a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}" class="brand-logo"><img src="{{ url('assets/images/logo/axion-logo.png') }}" alt="Site Logo"></a>
            </div>
            <div class="nav-menu">
                <!-- Navbar Close -->
                <div class="navbar-close"><i class="far fa-times"></i></div>
                <!-- Nav Search 
                <div class="nav-search">
                    <form>
                        <div class="form_group">
                            <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                            <button class="search-btn"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>-->
                <!-- Main Menu -->
                <nav class="main-menu">
                    <ul>
                        <li class="menu-item">
                            <a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}" class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="menu-item has-children">
                            <a href="{{ (Route::has('corporate')) ? route('corporate') : 'not-found' }}" class="{{ in_array(Route::currentRouteName(), ['corporate', 'corporate#about-us', 'contact']) ? 'active' : '' }}">Corporates</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('corporate#about-us') }}" class="{{ Route::currentRouteName() == 'corporate' ? 'active' : '' }}">About Us</a></li>
                                <li><a href="{{ url('corporate#our-mission') }}" class="{{ Route::currentRouteName() == 'corporate' ? 'active' : '' }}">Our Mission</a></li>
                                <li><a href="{{ url('corporate#clients') }}" class="{{ Route::currentRouteName() == 'corporate' ? 'active' : '' }}">Clients</a></li>

                                <li><a href="{{ (Route::has('contact')) ? route('contact') : 'not-found' }}" class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">Contact</a></li>
                            </ul>
                        </li>
                        <li class="menu-item has-children">
                            <a href="{{ (Route::has('products')) ? route('products') : 'not-found' }}" class="{{ in_array(Route::currentRouteName(), ['products', 'veyes-claim-survey', 'live-streaming', 'valuation']) ? 'active' : '' }}">Products</a>
                            <ul class="sub-menu">
                                <li><a href="{{ (Route::has('veyes-claim-survey')) ? route('veyes-claim-survey') : 'not-found' }}" class="{{ Route::currentRouteName() == 'veyes-claim-survey' ? 'active' : '' }}">Veyes Claim Survey</a></li>
                                <li><a href="{{ (Route::has('live-streaming')) ? route('live-streaming') : 'not-found' }}" class="{{ Route::currentRouteName() == 'live-streaming' ? 'active' : '' }}">Live Streaming</a></li>
                                <!-- <li><a href="{{ (Route::has('valuation')) ? route('valuation') : 'not-found' }}" class="{{ Route::currentRouteName() == 'valuation' ? 'active' : '' }}">Valuation</a></li> -->
                            </ul>
                        </li>
                        <li class="menu-item has-children">
                            <a href="{{ (Route::has('services')) ? route('services') : 'not-found' }}" class="{{ in_array(Route::currentRouteName(), ['services', 'data-analytics', 'image-recognition', 'anomaly-detection']) ? 'active' : '' }}">Services</a>
                            <ul class="sub-menu">
                            <li><a href="{{ url('services#preacceptance-inspection') }}" class="{{ Route::currentRouteName() == 'services' ? 'active' : '' }}">PRE ACCEPTANCE INSPECTION</a></li>
                            <li><a href="{{ url('services#investigation') }}" class="{{ Route::currentRouteName() == 'services' ? 'active' : '' }}">INVESTIGATION</a></li>
                            <li><a href="{{ url('services#veyesclaimsurvey') }}" class="{{ Route::currentRouteName() == 'services' ? 'active' : '' }}">Veyes Claim Survey</a></li>
                            <li><a href="{{ (Route::has('valuation')) ? route('valuation') : 'not-found' }}" class="{{ Route::currentRouteName() == 'valuation' ? 'active' : '' }}">Valuation</a></li>
                                <li><a href="{{ (Route::has('data-analytics')) ? route('data-analytics') : 'not-found' }}" class="{{ Route::currentRouteName() == 'data-analytics' ? 'active' : '' }}">Data Analytics</a></li>
                                <li><a href="{{ (Route::has('image-recognition')) ? route('image-recognition') : 'not-found' }}" class="{{ Route::currentRouteName() == 'image-recognition' ? 'active' : '' }}">Image Recognition</a></li>
                                <li><a href="{{ (Route::has('anomaly-detection')) ? route('anomaly-detection') : 'not-found' }}" class="{{ Route::currentRouteName() == 'anomaly-detection' ? 'active' : '' }}">Anomaly Detection</a></li>
                            </ul>
                        </li>
                        <li class="menu-item has-children">
                            <a href="{{ (Route::has('cp-academy')) ? route('cp-academy') : 'not-found' }}" class="{{ in_array(Route::currentRouteName(), ['cp-academy', 'ai-ml-masterclass-course', 'ai-ml-business-leader']) ? 'active' : '' }}">Axion Academy</a>
                            <ul class="sub-menu">
                                <li><a href="{{ (Route::has('ai-ml-masterclass-course')) ? route('ai-ml-masterclass-course') : 'not-found' }}" class="{{ Route::currentRouteName() == 'ai-ml-masterclass-course' ? 'active' : '' }}">AI & ML Master Class</a></li>
                                <li><a href="{{ (Route::has('ai-ml-business-leader')) ? route('ai-ml-business-leader') : 'not-found' }}" class="{{ Route::currentRouteName() == 'ai-ml-business-leader' ? 'active' : '' }}">AI & ML for Business Leaders</a></li>
                                <li><a href="{{ (Route::has('ai-ml-webinar')) ? route('ai-ml-webinar') : 'not-found' }}" class="{{ Route::currentRouteName() == 'ai-ml-webinar' ? 'active' : '' }}">AI & ML Webinar</a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="{{ (Route::has('news-and-events')) ? route('news-and-events') : 'not-found' }}" class="{{ Route::currentRouteName() == 'news-and-events' ? 'active' : '' }}">News & Events</a>
                        </li>
                        <li class="search-item"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li> 
                    </ul>
                </nav>
            </div>
            <div class="header-right-nav">
                <ul>
                    <li class="lang-dropdown">
                        <select class="nice-select wide">
                            <option value="01">English</option>
                            <!-- <option value="02">Arabic</option> -->
                        </select>
                    </li>
                    <li class="nav-button">
                        <div class="dropdown-toggle cursor-pointer user-sigin-detail hide" data-toggle="dropdown">
                            <i class="fas fa-user-circle text-info px-2"></i> <span class="font-weight-bold mt-1 user-name"></span>
                        </div>
                        <div class="dropdown-menu px-2 py-1">
                            <!-- <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#changePasswordModal" class="dropdown-item nav-link font-weight-bold cursor-pointer text-dark px-0">
                                <i class="fas fa-key"></i> Change Password
                            </a> -->                               
                            <a href="javascript:void(0);" class="dropdown-item nav-link font-weight-bold cursor-pointer text-dark px-0 logout-btn">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    
                        <a href="javascript:void(0);" class="sign-in-btn hide"> <i class="fa fa-sign-in"></i> Sign in</a>     
                    </li>
                    
                    <li class="navbar-toggle-btn">
                        <div class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</header>
<!--====== End Header Section ======-->