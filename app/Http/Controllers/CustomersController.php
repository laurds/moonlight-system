<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customers::all();
        return view( "customers.index", compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Customers::create($request->all());
        return redirect('/pt-BR/customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Customers $customer)
    {
        return view('customers.view', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id)
    {
        $customer = Customers::find($id);
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($lang, Request $request, $id)
    {
        $customer = Customers::find($id);
        $customer->name = $request->get('name');
        $customer->address = $request->get('address');
        $customer->email = $request->get('email');
        $customer->phone = $request->get('phone');
        $customer->observation = $request->get('observation');

        $customer->update();
        return redirect('/pt-BR/customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, Customers $customer)
    {
        $customer->delete();
        return redirect('/pt-BR/customers');
    }
}
