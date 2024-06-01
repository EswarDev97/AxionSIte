@extends('layouts.main')

@section('web-content')
<section class="cta-area cta-style-one bg_cover checkout-top-bg pt-30 pb-10">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="cta-content mb-20">
                    @if (session('success'))
                        <h3 class="text">{{ session('success') }}</h3>
                    @elseif (session('failure'))
                        <h3 class="text">{{ session('failure') }}</h3>
                    @else
                        <h3 class="text">{{ 'Enquiry' }}</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="checkout-area pt-70 mb-90">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title mb-0 pt-3 pb-3 pl-3">
                    <h3> <i class="fa fa-link pr-2"></i> Useful Links</h3>
                </div>
            </div>
            
            <div class="card-body text-center">
                <ul class="enquiry-page-links">
                    <li>
                        <a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}" class="text-uppercase">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('corporate#about-us') }}" class="text-uppercase">About Us</a>
                    </li>
                    <li>
                        <a href="{{ (Route::has('products')) ? route('products') : 'not-found' }}" class="text-uppercase">Products</a>
                    </li>
                    <li>
                        <a href="{{ (Route::has('services')) ? route('services') : 'not-found' }}" class="text-uppercase">Services</a>
                    </li>
                    <li>
                        <a href="{{ (Route::has('cp-academy')) ? route('cp-academy') : 'not-found' }}" class="text-uppercase">CP Academy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection