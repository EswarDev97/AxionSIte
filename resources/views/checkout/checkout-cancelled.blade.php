@extends('layouts.main')

@section('web-content')


<section class="checkout-area pt-70 mb-90">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title mb-0 pt-3 pb-3 pl-3">
                    <h3> <i class="fa fa-times-circle pr-2"></i> Payment Cancelled </h3>
                </div>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ url('assets/images/checkout/cancelled.jpg') }}" alt="success">
                    </div>
                    <div class="col-lg-7">
                        <div>
                            <h3 class="pb-2 mt-75 mb-2 text-center"> The payment cancelled by you. Please, make a payment to enroll the course.</h3>
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