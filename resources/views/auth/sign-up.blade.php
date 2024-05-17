@extends('layouts.main')

@section('web-content')
<section class="bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3 pt-90 pb-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body py-5">
              <h3 class="sign-up-header text-uppercase text-center mb-4">Create an account</h3>

              <form method="post" class="sign-up-form" novalidate>
                @csrf
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
                          <input type="text" class="form-control" placeholder="Last Name" id="lname" name="lname" pattern="^([a-zA-Z\.\-\s]{2,})+$">
                          <div class="invalid-feedback">          
                              * Please enter a valid name
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="form_group">
                          <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" pattern="^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$" required>
                          <div class="invalid-feedback">
                              * Please enter a valid email
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form_group">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" pattern="^([a-zA-Z0-9\/\\\-\.,\s]{6,})+$" required>
                        <div class="invalid-feedback">
                            * Password must be greater than 6 letters
                        </div>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form_group">
                      <select class="form-control" name="country" id="country" autocomplete="billing country">
                        <option value="">-- Select Country --</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form_group">
                        <label class="form-check-label">
                            <input type="checkbox" class="form_check_input" id="accept-terms" value="terms" name="accept-terms" required> I have read and agree the <a href="{{ url('terms') }}" class="actual-link" target="_blank">terms and conditions.</a>                                                
                            <div class="invalid-feedback">
                                * Please accept the Terms and Conditions.
                            </div>
                        </label>
                    </div>
                  </div>
                </div>
                
                <div class="form-error mb-1"></div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="javascript:void(0);"
                    class="fw-bold sign-in-text" data-toggle="modal" data-target="#signin-modal">Sign In</a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection