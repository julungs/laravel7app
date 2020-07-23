<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::table('contacts')->get();
        // $data = Customer::all();
        $data = Customer::paginate(6);
        // $d = response()->json($data);
        // dump($data);
        $tabName = 'Customers';
        return view('customers/index', [
            'title' => $tabName,
            'customersData' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tabName = 'Form Add Customer';
        return view('customers/create', [
            'title' => $tabName
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'phone' => ['required', 'min:12', 'max:14'],
            'email' => ['required', 'email:rfc,dns,spoof'],
            'address' => ['required']
        ]);
        $request->slug = Str::slug($request->name, '-');
        $customer = Customer::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address
        ]);
        return redirect('/customers' . '/' . $customer->id)->with('status', 'added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $data = $customer;
        $tabName = 'Customer Detail';
        return view('customers/show', [
            'title' => $tabName,
            'customerData' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $data = $customer;
        $tabName = 'Form Edit Customer';
        return view('customers/edit', [
            'title' => $tabName,
            'customerData' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => ['required'],
            'phone' => ['required', 'min:12', 'max:14'],
            'email' => ['required', 'email:rfc,dns,spoof'],
            'address' => ['required']
        ]);
        $request->slug = Str::slug($request->name, '-');
        Customer::where('id', $customer->id)->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address
        ]);
        return redirect('/customers' . '/' . $customer->id)->with('status', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        Customer::destroy($customer->id);
        return redirect('/customers')->with('status', 'deleted');
    }
}
