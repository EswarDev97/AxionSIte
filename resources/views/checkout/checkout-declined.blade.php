@extends('layouts.main')

@section('web-content')

<section class="checkout-area pt-70 mb-90">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title mb-0 pt-3 pb-3 pl-3">
                    <h3> <i class="fa fa-times-circle pr-2"></i> Payment Declined </h3>
                </div>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ url('assets/images/checkout/declined.jpg') }}" alt="success">
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <h2 class="pb-2 mt-75 mb-2 text-center"> Oh no! your payment declined </h2>
                            <p>Please, check the given card details and make sure the card has sufficient amount to continue the payment.</p>

                            <div class="mt-25 text-center">
                                <a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}" class="btn btn-info"><i class="fa fa-home"></i> Go Home</a>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection