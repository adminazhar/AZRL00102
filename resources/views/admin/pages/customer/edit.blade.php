@extends('admin.layouts.master')
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
                            <h2 class="content-header-title float-left mb-0">Edit Customer</h2>
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
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{$customer->name}}</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" method="post" action="/customers/{{$customer->id}}" >
                                        @method('PATCH')
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="name-column">Name <span class="text-danger">*</span> </label>
                                                    <input type="text" id="name-column" class="form-control" placeholder="Enter your full name" name="name" autocomplete="off" value="{{$customer->name}}">
                                                    @error('name')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-column">Email</label>
                                                    <input type="text" id="email-column" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value="{{$customer->email}}">
                                                    @error('email')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="phonenumber-column">Phone Number</label>
                                                    <input type="text" id="phonenumber-column" class="form-control" placeholder="Enter your phone number" name="mobilenumber" autocomplete="off" value="{{$customer->mobilenumber}}">
                                                    @error('mobilenumber')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="dob-column">Date Of Birth</label>
                                                    <input type="date" id="dob-column" class="form-control" name="dob" placeholder="Enter your date of birth" autocomplete="off" value="{{$customer->dob}}">
                                                    @error('dob')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="addressparam1-column">Address Param 1</label>
                                                    <input type="text" id="addressparam1-column" class="form-control" name="address_param1" placeholder="Enter address param" autocomplete="off" value="{{$customer->address_param1}}">
                                                    @error('address_param1')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="addressparam2-column">Address Param 2</label>
                                                    <input type="text" id="addressparam2-column" class="form-control" name="address_param2" placeholder="Enter address param" autocomplete="off" value="{{$customer->address_param2}}">
                                                    @error('address_param2')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="addressparam3-column">Address Param 3</label>
                                                    <input type="text" id="addressparam3-column" class="form-control" name="address_param3" placeholder="Enter address param" autocomplete="off" value="{{$customer->address_param3}}">
                                                    @error('address_param3')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="addressparam4-column">Address Param 4</label>
                                                    <input type="text" id="addressparam4-column" class="form-control" name="address_param4" placeholder="Enter address param" autocomplete="off" value="{{$customer->address_param4}}">
                                                    @error('address_param4')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light"><i data-feather="edit"></i> Update</button>
                                            </div>
                                        </div>
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
