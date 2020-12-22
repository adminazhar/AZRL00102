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
                        <div class="card-datatable table-responsive ">
                            <table id="customertable" class="table">
                                <thead class="thead">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                    <th>DOB</th>
                                    <th>Status</th>
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
                                        <td>
                                            @if($customer->active == 1)
                                                <span class="badge badge-pill  badge-light-success">Active</span>
                                            @else
                                                <span class="badge badge-pill  badge-light-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="/customers/{{$customer->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="/customers/{{$customer->id}}/edit" class="btn btn-primary btn-sm"><i data-feather="edit"></i></a>
                                                    &nbsp;

                                                <button class="btn btn-danger btn-sm"><i data-feather="trash"></i></button>
                                            </form>
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
