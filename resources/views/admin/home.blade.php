@extends('admin.layouts.master')

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
                                    <li class="breadcrumb-item"><a href="#">Card</a>
                                    </li>
                                    <li class="breadcrumb-item active">Advance Card
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
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
                                <img src="{{ URL::asset('images/elements/decore-left.png')}}" class="congratulations-img-left" alt="card-img-left" />
                                <img src="{{ URL::asset('images/elements/decore-right.png')}}" class="congratulations-img-right" alt="card-img-right" />
                                <div class="avatar avatar-xl bg-primary shadow">
                                    <div class="avatar-content">
                                        <i data-feather="award" class="font-large-1"></i>
                                    </div>
                                </div>
                                <div class="text-center">
                                        <h1 class="mb-1 text-white">Welcome ADMIN  {{Auth::user()->name}},</h1>
                                    <p class="card-text m-auto w-75">
                                        You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Congratulations Card -->

                    <!-- Medal Card -->
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="card card-congratulation-medal">
                            <div class="card-body">
                                <h5>Congratulations 🎉 John!</h5>
                                <p class="card-text font-small-3">You have won gold medal</p>
                                <h3 class="mb-75 mt-4">
                                    <a href="javascript:void(0);">$48.9k</a>
                                </h3>
                                <button type="button" class="btn btn-primary">View Sales</button>
                                <img src="{{ URL::asset('images/illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" />
                            </div>
                        </div>
                    </div>
                    <!--/ Medal Card -->
                </div>

                <div class="row match-height">
                    <!-- Employee Task Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-employee-task">
                            <div class="card-header">
                                <h4 class="card-title">Employee Task</h4>
                                <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i>
                            </div>
                            <div class="card-body">
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="media">
                                        <div class="avatar mr-75">
                                            <img src="{{ URL::asset('images/portrait/small/avatar-s-9.jpg')}}" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="media-body my-auto">
                                            <h6 class="mb-0">Ryan Harrington</h6>
                                            <small>iOS Developer</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted mr-75">9hr 20m</small>
                                        <div class="employee-task-chart-primary-1"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="media">
                                        <div class="avatar mr-75">
                                            <img src="{{ URL::asset('images/portrait/small/avatar-s-20.jpg')}}" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="media-body my-auto">
                                            <h6 class="mb-0">Louisa Norton</h6>
                                            <small>UI Designer</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted mr-75">4hr 17m</small>
                                        <div class="employee-task-chart-danger"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="media">
                                        <div class="avatar mr-75">
                                            <img src="{{ URL::asset('images/portrait/small/avatar-s-1.jpg')}}" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="media-body my-auto">
                                            <h6 class="mb-0">Jayden Duncan</h6>
                                            <small>Java Developer</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted mr-75">12hr 8m</small>
                                        <div class="employee-task-chart-success"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="media">
                                        <div class="avatar mr-75">
                                            <img src="{{ URL::asset('images/portrait/small/avatar-s-20.jpg')}}" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="media-body my-auto">
                                            <h6 class="mb-0">Cynthia Howell</h6>
                                            <small>Anguler Developer</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted mr-75">3hr 19m</small>
                                        <div class="employee-task-chart-secondary"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="media">
                                        <div class="avatar mr-75">
                                            <img src="{{ URL::asset('images/portrait/small/avatar-s-16.jpg')}}" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="media-body my-auto">
                                            <h6 class="mb-0">Helena Payne</h6>
                                            <small>Marketing</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted mr-75">9hr 50m</small>
                                        <div class="employee-task-chart-warning"></div>
                                    </div>
                                </div>
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="media">
                                        <div class="avatar mr-75">
                                            <img src="{{ URL::asset('images/portrait/small/avatar-s-13.jpg')}}" class="rounded" width="42" height="42" alt="Avatar" />
                                        </div>
                                        <div class="media-body my-auto">
                                            <h6 class="mb-0">Troy Jensen</h6>
                                            <small>iOS Developer</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted mr-75">4hr 48m</small>
                                        <div class="employee-task-chart-primary-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Employee Task Card -->

                    <!-- Developer Meetup Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-developer-meetup">
                            <div class="meetup-img-wrapper rounded-top text-center">
                                <img src="{{ URL::asset('images/illustration/email.svg')}}" alt="Meeting Pic" height="170" />
                            </div>
                            <div class="card-body">
                                <div class="meetup-header d-flex align-items-center">
                                    <div class="meetup-day">
                                        <h6 class="mb-0">THU</h6>
                                        <h3 class="mb-0">24</h3>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="card-title mb-25">Developer Meetup</h4>
                                        <p class="card-text mb-0">Meet world popular developers</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0">Sat, May 25, 2020</h6>
                                        <small>10:AM to 6:PM</small>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="avatar bg-light-primary rounded mr-1">
                                        <div class="avatar-content">
                                            <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0">Central Park</h6>
                                        <small>Manhattan, New york City</small>
                                    </div>
                                </div>
                                <div class="avatar-group">
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Billy Hopkins" class="avatar pull-up">
                                        <img src="{{ URL::asset('images/portrait/small/avatar-s-9.jpg')}}" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Amy Carson" class="avatar pull-up">
                                        <img src="{{ URL::asset('images/portrait/small/avatar-s-6.jpg')}}" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Brandon Miles" class="avatar pull-up">
                                        <img src="{{ URL::asset('images/portrait/small/avatar-s-8.jpg')}}" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Daisy Weber" class="avatar pull-up">
                                        <img src="{{ URL::asset('images/portrait/small/avatar-s-20.jpg')}}" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Jenny Looper" class="avatar pull-up">
                                        <img src="{{ URL::asset('images/portrait/small/avatar-s-20.jpg')}}" alt="Avatar" width="33" height="33" />
                                    </div>
                                    <h6 class="align-self-center cursor-pointer ml-50 mb-0">+42</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Developer Meetup Card -->

                    <!-- Transaction card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-transaction">
                            <div class="card-header">
                                <h4 class="card-title">Transactions</h4>
                                <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i>
                            </div>
                            <div class="card-body">
                                <div class="transaction-item">
                                    <div class="media">
                                        <div class="avatar bg-light-primary rounded">
                                            <div class="avatar-content">
                                                <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="transaction-title">Wallet</h6>
                                            <small>Starbucks</small>
                                        </div>
                                    </div>
                                    <div class="font-weight-bolder text-danger">- $74</div>
                                </div>
                                <div class="transaction-item">
                                    <div class="media">
                                        <div class="avatar bg-light-success rounded">
                                            <div class="avatar-content">
                                                <i data-feather="check" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="transaction-title">Bank Transfer</h6>
                                            <small>Add Money</small>
                                        </div>
                                    </div>
                                    <div class="font-weight-bolder text-success">+ $480</div>
                                </div>
                                <div class="transaction-item">
                                    <div class="media">
                                        <div class="avatar bg-light-danger rounded">
                                            <div class="avatar-content">
                                                <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="transaction-title">Paypal</h6>
                                            <small>Add Money</small>
                                        </div>
                                    </div>
                                    <div class="font-weight-bolder text-success">+ $590</div>
                                </div>
                                <div class="transaction-item">
                                    <div class="media">
                                        <div class="avatar bg-light-warning rounded">
                                            <div class="avatar-content">
                                                <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="transaction-title">Mastercard</h6>
                                            <small>Ordered Food</small>
                                        </div>
                                    </div>
                                    <div class="font-weight-bolder text-danger">- $23</div>
                                </div>
                                <div class="transaction-item">
                                    <div class="media">
                                        <div class="avatar bg-light-info rounded">
                                            <div class="avatar-content">
                                                <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="transaction-title">Transfer</h6>
                                            <small>Refund</small>
                                        </div>
                                    </div>
                                    <div class="font-weight-bolder text-success">+ $98</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Transaction card -->

                </div>

                <!--/ Card Advance -->

            </div>
        </div>
    </div>
@endsection
