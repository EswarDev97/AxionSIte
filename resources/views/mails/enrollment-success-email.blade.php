@extends('mails.layouts.main')
@section('mail-body')
    <section class="cta-area cta-style-one bg-blue pt-20 pb-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="cta-content mb-20">
                    <h3 class="text-white pl-25"> Thank you for your enrollment! </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="checkout-area mb-90">
        <div class="container">
            <div class="card">
                <!-- <div class="card-header">
                    <div class="card-title mb-0 pt-3 pb-3 pl-3">
                        <h3> <i class="fa fa-folder pr-2"></i> Enrollment Details </h3>
                    </div>
                </div> -->
                
                <div class="card-body">
                    <p class="pt-2 pb-2 mb-4"> This email confirms your enrollment in the below course, and your payment has now cleared.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ url('assets/images/checkout/success.png') }}" width="300" height="300" alt="success">
                        </div>
                        <div class="col-lg-6">
                            <div class="pb-2 mt-2 mb-2 text-center">
                                <h3> Your Order Id Is</h3>
                                <h2 class="red-dark">{{ @$data['order']['order_ref_no'] }}</h2>
                            </div>
                            <div class="table-responsive mt-10">
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="pb-0">{{ @$data['order']['course_name'] }}</td>
                                        <td class="pb-0">{{ @$data['order']['price'] }} <b class="text-sm">{{ @$data['order']['currency'] }}</b></td>
                                    </tr>
                                    <tr>
                                        <td class="pt-0">VAT</td>
                                        <td class="pt-0">{{ @$data['order']['tax'] }} <b class="text-sm">{{ @$data['order']['currency'] }}</b></td>
                                    </tr>
                                    <tr class="border-top">
                                        <th class="pt-1">TOTAL</th>
                                        <th class="pt-1">{{ @$data['order']['total_price'] }} <b class="text-sm">{{ @$data['order']['currency'] }}</b></th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="red-dark mt-25 pb-2 border-bottom"> Billing Details </h3>
                            <div class="row">
                                <div class="col-lg-6 pt-4">
                                    <dt>Name:</dt>
                                    <dd>{{ @$data['customer']['name'] }}</dd>
                                    <dt>Email:</dt>
                                    <dd>{{ @$data['customer']['email'] }}</dd>
                                    <dt>Phone:</dt>
                                    <dd>{{ @$data['customer']['phone'] }}</dd>
                                </div>
                                <div class="col-lg-6">
                                    <dt>Company Name:</dt>
                                    <dd>{{ @$data['customer']['company'] }}</dd>
                                    <dt>Address:</dt>
                                    <dd>{{ @$data['customer']['address'] }}</dd>
                                    <dt>Country:</dt>
                                    <dd>{{ @$data['customer']['country'] }}</dd>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="red-dark mt-25 pb-2 border-bottom"> Payment Details </h3>
                            <div class="row">
                                <div class="col-lg-6 pt-4">
                                    <dt>Card No (Last 4 Digits):</dt>
                                    <dd>{{ @$data['payment']['card_no'] }}</dd>
                                </div>
                                <div class="col-lg-6">
                                    <dt>Expiry Date:</dt>
                                    <dd>{{ @$data['payment']['expiry_month'].' / '.@$data['payment']['expiry_year'] }}</dd>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pl-25 mb-4 mt-4">
                        <p>
                            <b>Thank You,</b>
                        </p>
                        <p>
                            <b>Connection Point Technology</b>
                        </p>
                    </div>      
                </div>
            </div>
        </div>
    </section>
@endsection