<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Email </title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .outter-container {
                width: 100%;
                background: #f7f7f7;
                padding: 50px 0;
            }

            .inner-container {
                width: 700px;
                max-width: 100%;
                margin: 0 auto;
                background: #ffffff;
                border: 1px solid #cccaaa;
            }
            
            .header {
                margin-bottom: 20px;
                margin-top: 15px;
                min-height: 100px;
            }

            .float-left {
                float: left !important;
            }

            .clearfix::after {
                content: "";
                clear: both;
                display: table;
            }

            .mail-content {
                padding: 15px 15px;
            }

            .user-info {
                padding: 5px 15px;
            }

            .bg-blue {
                background-color: rgb(2, 91, 133);
            }

            .text-white {
                color: #ffffff;
            }

            .mail-end {
                margin-top: 25px;
            }

            .margin-0 {
                margin: 0;
            }

            h2 {
                font-size: 42px;
                line-height: 50px;
            }

            h3 {
                font-size: 24px;
                line-height: 32px;
            }

            dt {
                font-weight: 700;
                padding-bottom: 5px;
            }

            dd {
                margin-bottom: 10px;
                margin-left: 0;
            }

            /* Bootstrap CSS */
            .card {
                position: relative;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 1px solid rgba(0,0,0,.125);
                border-radius: 0.25rem;
            }

            .card-header {
                padding: 0.75rem 1.25rem;
                margin-bottom: 0;
                background-color: rgba(0,0,0,.03);
                border-bottom: 1px solid rgba(0,0,0,.125);
            }

            .card-header:first-child {
                border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
            }

            .card-body {
                min-height: 100px;
                padding: 1.25rem;
            }

            .row {
                margin-right: -15px;
                margin-left: -15px;
                clear: both;
                display: table;
            }

            .row::after {
                content: "";
                clear: both;
                display: table;
            }

            .col-lg-6 {
                float: left;
                width: 315px;
                max-width: 100%;
            }

            .col-lg-6 {
                position: relative;
                padding-right: 15px;
                padding-left: 15px;
            }

            .border-top {
                border-top: 1px solid #dee2e6 !important;
            }

            .border-bottom {
                border-bottom: 1px solid #dee2e6 !important;
            }

            .mt-4, .my-4 {
                margin-top: 1.5rem !important;
            }

            .mb-4, .my-4 {
                margin-bottom: 1.5rem !important;
            }

            .pl-25 {
                padding-left: 25px;
            }

            .mb-90 {
                margin-bottom: 90px;
            }

            .pb-2, .py-2 {
                padding-bottom: 0.5rem !important;
            }

            .pt-20 {
                padding-top: 20px;
            }

            .pb-20 {
                padding-bottom: 20px;
            }

            .pt-4, .py-4 {
                padding-top: 1.5rem !important;
            }

            .mb-2, .my-2 {
                margin-bottom: 0.5rem !important;
            }

            .mt-10 {
                margin-top: 10px;
            }

            .mt-25 {
                margin-top: 25px;
            }

            .pt-2 {
                padding-top: 0.75rem !important;
            }

            .pl-3, .px-3 {
                padding-left: 1rem !important;
            }

            .red-dark {
                color: #fd4a18;
            }

            .text-info {
                color: #5c93ee;
            }

            .text-white {
                color: #ffffff;
            }

            .text-center {
                text-align: center;
            }

            .table-responsive {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table {
                width: 100%;
                margin-bottom: 1rem;
                color: #212529;
            }

            .table-borderless tbody+tbody, .table-borderless td, .table-borderless th {
                border: 0;
            }

            .table td, .table th {
                padding: 0.75rem;
                vertical-align: top;
                border-top: 1px solid #dee2e6;
                text-align: left;
            }

        </style>
    </head>

    <body>
        <div class="outter-container">
            <div class="inner-container">
                <div class="header clearfix">
                    <div class="float-left">
                        <img src="{{ url('assets/images/logo/logo-sm.png') }}" alt="logo">
                    </div>
                </div>
            