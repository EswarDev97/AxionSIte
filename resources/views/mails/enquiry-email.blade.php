@extends('mails.layouts.main')
@section('mail-body')
    <div class="bg-blue text-white user-info">
        <p>Hi Connection Point Technology, </p>
    </div>  

    <div class="bg-white mail-content">
        <p class="mb-4">
            We have a new enquiry from <a href="{{ @$data['enquiry_from'] }}">{{ @$data['course'] }}</a> page. The enquiry details are given below.
        </p>
        <div>
            <dt>Name : </dt>
            <dd>{{ @$data['name'] }}</dd>
        </div>
        <div>
            <dt>Phone : </dt>
            <dd>{{ @$data['phone'] }}</dd>
        </div>
        <div class="mb-2">
            <dt>Email : </dt>
            <dd>{{ @$data['email'] }}</dd>
        </div>
        <p class="mail-end margin-0">Regards, </p>
        <p class="margin-0">Connection Point Technology.</p>
    </div>
@endsection
