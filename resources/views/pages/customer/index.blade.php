@extends('layouts.master')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="invoice-list-wrapper">
                    <div class="card">
                        <div class="card-header border-bottom p-1">
                            <div class="head-label">
                                <h3 class="mb-0">Customer</h3></div>
                            <div class="dt-action-buttons text-right">
                                <div class="dt-buttons d-inline-flex">
                                    <a href="/customers/create" class="dt-button create-new btn btn-primary" tabindex="0"
                                            aria-controls="DataTables_Table_0" ><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                      width="24" height="24"
                                                                                      viewBox="0 0 24 24" fill="none"
                                                                                      stroke="currentColor"
                                                                                      stroke-width="2"
                                                                                      stroke-linecap="round"
                                                                                      stroke-linejoin="round"
                                                                                      class="feather feather-plus mr-50 font-small-4"><line
                                                    x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19"
                                                                                                y2="12"></line></svg>Add New Customer</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-datatable table-responsive p-1">
                            <table id="customertable" class="dataTables_wrapper dt-bootstrap4 no-footer table table-bordered table-striped table-hover" >
                                <thead class="thead-dark">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                    <th>DOB</th>
                                    <th>Address Param1</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($customers as $customer)
                                    <tr>
                                        <td><a href="/customers/{{$customer->id}}"><i data-feather="user" class="mr-50 mb-50"></i>{{$customer->name}}</a> </td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->mobilenumber}}</td>
                                        <td>{{$customer->dob}}</td>
                                        <td>{{$customer->address_param1}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="/customers/{{$customer->id}}/edit">
                                                        <i data-feather="edit-2" class="mr-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="/customers/{{$customer->id}}">
                                                        <i data-feather="trash" class="mr-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    No Customer Found
                                @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->



@endsection
