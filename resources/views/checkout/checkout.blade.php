@extends('layouts.main')

@section('web-content')
<section class="cta-area cta-style-one bg_cover checkout-top-bg pt-30 pb-10">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="cta-content mb-20">
                    <h3>Enrollment</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="checkout-area pt-70 mb-90">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title mb-0">
                    <h3> <i class="fa fa-lock-alt pr-2"></i> Secure Checkout</h3>
                </div>
            </div>
            
            <div class="card-body">
                <form class="checkout-form" method="post" action="{{ route('processCheckout') }}" novalidate>
                    @csrf
                    <div class="row pr-20">
                        <div class="col-lg-6 pl-10">
                            <h4 class="text-dark border-bottom pt-20 pb-2 mb-4">Billing Details</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <input type="text" class="form-control" placeholder="First Name" id="fname" name="fname" pattern="^([a-zA-Z\.\-\s]{2,})+$" required>
                                        <div class="invalid-feedback">
                                            * Please enter a valid name
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <input type="text" class="form-control" placeholder="Last Name" name="lname" pattern="^([a-zA-Z\.\-\s]{2,})+$">
                                        <div class="invalid-feedback">          
                                            * Please enter a valid name
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" pattern="^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$" required>
                                        <div class="invalid-feedback">
                                            * Please enter a valid email
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <input type="text" class="form-control" placeholder="Phone Number" id="phone" name="phone" pattern="^([\d]{8,12})+$" required>
                                        <div class="invalid-feedback">
                                            * Please enter a valid phone number
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <input type="text" class="form-control" placeholder="Company Name" id="company" name="company" pattern="^([a-zA-Z0-9\/\\\-\.,\s]{2,})+$" required>
                                        <div class="invalid-feedback">
                                            * Please enter a company name
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <input type="text" class="form-control" placeholder="House No / Apartment" id="apartment" name="apartment" pattern="^([a-zA-Z0-9\/\\\-\.,\s])+$" required>
                                        <div class="invalid-feedback">
                                            * Please enter a house no / apartment
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <input type="text" class="form-control" placeholder="Street / Area" id="street" name="street" pattern="^([a-zA-Z0-9\/\\\-\.,\s]{2,})+$" required>
                                        <div class="invalid-feedback">
                                            * Please enter a street / area
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <input type="text" class="form-control" placeholder="City" id="city" name="city" pattern="^([a-zA-Z\s]{2,})+$" required>
                                        <div class="invalid-feedback">
                                            * Please enter a valid city
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_group">
                                        <input type="text" class="form-control" placeholder="State / Province" id="state" name="state" pattern="^([a-zA-Z\s]{2,})+$" required>
                                        <div class="invalid-feedback">
                                            * Please enter a valid state / province
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <input type="text" class="form-control" placeholder="Zip Code" id="zipCode" name="zipCode" pattern="^([\d]{5,})+$" required>
                                        <div class="invalid-feedback">
                                            * Please enter a valid zip code
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_group">
                                        <select class="form-control" name="country" id="country" autocomplete="billing country">
                                            <option value="">-- Select Country --</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->country_code }}">{{ $country->country_name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            * Please enter a valid country
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <div class="col-lg-6">
                            <div class="payment-details-area pt-20 pb-20 pl-25 pr-20 blue-lighter-bg">
                                <input type="hidden" name="course_name" id="course_name">
                                <input type="hidden" name="tax" id="tax">
                                <input type="hidden" name="price" id="price">

                                <h4 class="text-dark border-bottom pb-2">Payment Details</h4>

                                <div class="table-responsive mt-10">
                                    <table class="table table-borderless cart-details">
                                        
                                    </table>
                                </div>
                                <div class="border-top pt-20">
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <label class="form-check-label" id="payment-label">
                                                <input type="radio" class="form_check_input" name="payment" checked required> Pay with a Credit / Debit Card 
                                            </label>
                                        </div>

                                        <div class="blue-lighter-two-bg mt-15 pt-15 pb-15 pl-3 pr-3">
                                            <p class="payment-instructions mb-15">Your payment details will be processed by Telr over a secure SSL connection and PCI DSS certified systems.</p>
                                            
                                            <!-- <div class="form_group">
                                                <label class="form-label"> Credit or debit card </label>
                                                <input type="text" class="form-control credit-card-input" name="card_no" placeholder="1234 5678 9012 3456" required>
                                                <div class="invalid-feedback invalid-card-details">
                                                    * Please enter a valid card details
                                                </div>
                                            </div>
                                            
                                            <div class="form_group">
                                                <label class="form-label"> Cardholder's name </label>
                                                <input type="text" class="form-control" id="card_name" name="card_name" pattern="^([a-zA-Z\.\-\s]{2,})+$" required>
                                                <div class="invalid-feedback">
                                                    * Please enter a valid cardholder's name
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 mt-35">
                                        <div class="form_group">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form_check_input" id="accept-terms" name="accept-terms" required> I have read and agree the <a href="{{ url('terms') }}" class="actual-link" target="_blank">terms and conditions.</a>                                                
                                                <div class="invalid-feedback">
                                                    * Please accept the Terms and Conditions.
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-35 text-center">
                                        <div class="form_group">
                                            <div class="col-lg-12">
                                                <button type="submit" class="main-btn btn-red">Complete Checkout</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection