<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Customer;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = \App\Models\Customer::all();

        return view('pages.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = request()->validate([
            'name' => 'required',
            'email' => '',
            'mobilenumber' => '',
            'dob' => '',
            'address_param1' => '',
            'address_param2' => '',
            'address_param3' => '',
            'address_param4' => '',

        ]);

        $customer = \App\Models\Customer::create($request);
        return redirect('/customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customerId
     * @return \Illuminate\Http\Response
     */
    public function show($customerId)
    {
        $customer = \App\Models\Customer::findorFail($customerId);

        return view('pages.customer.show', compact('customer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($customerId)
    {
        //edit the customer
        $customer = \App\Models\Customer::where('id', $customerId)->first();
        return view('pages.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //UPDATE THE CUSTOMER FORM TO DATABASE
        $customer->update($request->all());

        return redirect('/customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Models\Customer $customer)
    {
        //DELETE THE CUSTOMER
        $customer->delete();

        return redirect('/customers');
    }
}
