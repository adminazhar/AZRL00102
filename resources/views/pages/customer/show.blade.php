@extends('layouts.master')
@section('title', 'Create Customer')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{$customer->name}}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Customer</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <a href="/customers" class="btn btn-primary">Back to Customer</a>
                </div>
            </div>
            <div class="content-body">
                <section id="page-account-settings">
                    <div class="row">
                        <!-- left menu section -->
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column nav-left">
                                <!-- general -->
                                <li class="nav-item">
                                    <a class="nav-link active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-3 mr-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="font-weight-bold">General</span>
                                    </a>
                                </li>
                                <!-- information -->
                                <li class="nav-item">
                                    <a class="nav-link" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                        <i data-feather="map"  class="font-medium-3 mr-1"></i> <span class="font-weight-bold">Address</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!--/ left menu section -->

                        <!-- right content section -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <!-- general tab -->
                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Name</h5>
                                                    <p>{{$customer->name}}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5>Email</h5>
                                                    <p>{{$customer->email}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Mobile</h5>
                                                    <p>{{$customer->mobilenumber}}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5>Date of Birth</h5>
                                                    <p>{{$customer->dob}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ general tab -->


                                        <!-- information -->
                                        <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Address Param1</h5>
                                                    <p>{{$customer->address_param1}}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5>Address Param2</h5>
                                                    <p>{{$customer->address_param2}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Address Param3</h5>
                                                    <p>{{$customer->address_param3}}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5>Address Param4</h5>
                                                    <p>{{$customer->address_param4}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ information -->


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ right content section -->
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
