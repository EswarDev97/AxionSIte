@extends('mails.layouts.main')
@section('mail-body')
    <div class="bg-blue text-white user-info">
        <p>Hi Axion Technical services , </p>
    </div>  

    <div class="bg-white mail-content">
        <p>
            We have a message from <a href="{{ url('contact#contact-form-area') }}">contact</a> page. The contacted person details are given below.
        </p>
        <div>
            <dt>Name : </dt>
            <dd>{{ ($data['lname']) ? $data['fname'] . ' ' . $data['lname'] : $data['fname'] }}</dd>
        </div>
        <div>
            <dt>Phone : </dt>
            <dd>{{ $data['phone'] }}</dd>
        </div>
        <div>
            <dt>Email : </dt>
            <dd>{{ $data['email'] }}</dd>
        </div>
        <div>
            <dt>Message : </dt>
            <dd>{{ $data['message'] }}</dd>
        </div>
        <p class="mail-end margin-0">Regards, </p>
        <p class="margin-0">Axion Technical services Pvt Ltd .</p>
    </div>
@endsection
