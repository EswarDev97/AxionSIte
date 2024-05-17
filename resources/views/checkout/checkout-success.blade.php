@extends('layouts.main')

@section('web-content')
<section class="cta-area cta-style-one bg_cover checkout-top-bg pt-30 pb-10">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="cta-content mb-20">
                    <h3 class="text"> Thank you for your enrollment! </h3>
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
                    <h3> <i class="fa fa-folder pr-2"></i> Enrollment Details </h3>
                </div>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ url('assets/images/checkout/success.png') }}" alt="success">
                    </div>
                    <div class="col-lg-7">
                        <div class="border-bottom pb-2 mt-2 mb-2 text-center">
                            <h3> Your Order Id Is</h3>
                            <h2 class="red-dark">{{ @$order->order_ref_no }}</h2>
                        </div>
                        <div class="table-responsive mt-10">
                            <table class="table table-borderless">
                                <tr>
                                    <td class="pb-0">{{ @$courseName }}</td>
                                    <td class="pb-0">{{ @$order->sub_total_price }} <b class="text-sm">{{ @$telrResponse['order']['currency'] }}</b></td>
                                </tr>
                                <tr>
                                    <td class="pt-0">VAT</td>
                                    <td class="pt-0">{{ @$order->tax }} <b class="text-sm">{{ @$telrResponse['order']['currency'] }}</b></td>
                                </tr>
                                <tr class="border-top">
                                    <th class="pt-1">TOTAL</th>
                                    <th class="pt-1">{{ @$telrResponse['order']['amount'] }} <b class="text-sm">{{ @$telrResponse['order']['currency'] }}</b></th>
                                </tr>
                            </table>
                        </div>            
                        <p class="border-top pt-1 pb-2 mb-4"> * You will receive an email confirmation shortly at <span class="text-info">{{ @$order->customer->email }}</span> </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="red-dark mt-4 pb-2 border-bottom"> Billing Details </h3>
                        <div class="row">
                            <div class="col-lg-6 pt-4">
                                <dt>Name:</dt>
                                <dd>{{ (@$telrResponse['order']['customer']['name']['forenames']) ? @$telrResponse['order']['customer']['name']['forenames'].' '.@$telrResponse['order']['customer']['name']['surname']: @$telrResponse['order']['customer']['name']['forenames'] }}</dd>
                                <dt>Email:</dt>
                                <dd>{{ @$telrResponse['order']['customer']['email'] }}</dd>
                                <dt>Phone:</dt>
                                <dd>{{ @$telrResponse['order']['customer']['address']['mobile'] }}</dd>
                            </div>
                            <div class="col-lg-6 pt-sm-4">
                                <dt>Company Name:</dt>
                                <dd>{{ @$order->address->company }}</dd>
                                <dt>Address:</dt>
                                <dd>{{ @$customer_address }}</dd>
                                <dt>Country:</dt>
                                <dd>{{ @$order->address->country }}</dd>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h3 class="red-dark mt-4 pb-2 border-bottom"> Payment Details </h3>
                        <div class="row">
                            <div class="col-lg-6 pt-4">
                                <dt>Card No (Last 4 Digits):</dt>
                                <dd>{{ @$telrResponse['order']['card']['last4'] }}</dd>
                            </div>
                            <div class="col-lg-6 pt-sm-4">
                                <dt>Expiry Date:</dt>
                                <dd>{{ @$telrResponse['order']['card']['expiry']['month'].' / '.@$telrResponse['order']['card']['expiry']['year'] }}</dd>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-25 text-center">
                    <a href="{{ (Route::has('home')) ? route('home') : 'not-found' }}" class="btn btn-info"><i class="fa fa-home"></i> Go Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection