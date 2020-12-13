@extends('layouts.master')

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Home</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Customer</a>
                                    </li>x`
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Card Advance -->
                <div class="row match-height">
                    <!-- Congratulations Card -->
                    <div class="col-12 col-md-6 col-lg-7">
                        <div class="card card-congratulations">
                            <div class="card-body text-center">
                                <img src="images/elements/decore-left.png" class="congratulations-img-left" alt="card-img-left" />
                                <img src="images/elements/decore-right.png" class="congratulations-img-right" alt="card-img-right" />
                                <div class="avatar avatar-xl bg-primary shadow">
                                    <div class="avatar-content">
                                        <i data-feather="award" class="font-large-1"></i>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h1 class="mb-1 text-white">Welcome {{Auth::user()->name}},</h1>
                                    <p class="card-text m-auto w-75">
                                        You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Congratulations Card -->
                </div>

                <!--/ Card Advance -->

            </div>
        </div>
    </div>
@endsection
