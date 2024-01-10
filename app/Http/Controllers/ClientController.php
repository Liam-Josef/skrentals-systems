<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Client::query()

            ->when($request->has('first_name'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('first_name')}%"))
            ->when($request->has('last_name'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('last_name')}%"))
            ->when($request->has('booking_id'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('booking_id')}%"))
            ->when($request->has('email'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('email')}%"))
            ->when($request->has('phone'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('phone')}%"))
            ->when($request->has('zip_code'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('zip_code')}%"))
            ->when($request->has('activity_date'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('activity_date')}%"))
            ->when($request->has('purchase_date'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('purchase_date')}%"))
            ->when($request->has('activity_item'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('activity_item')}%"))
            ->when($request->has('total_charge'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('total_charge')}%"))
            ->when($request->has('payment_status'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('payment_status')}%"))
            ->when($request->has('ticket_list'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('ticket_list')}%"))
            ->when($request->has('source'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('source')}%"))
            ->when($request->has('purchase_type'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('purchase_type')}%"))
            ->when($request->has('list_price'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('list_price')}%"))
            ->when($request->has('total_discount_amount'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('total_discount_amount')}%"))
            ->when($request->has('customer_fees'), fn ($query) => $query->where('first_name', 'like', "%{$request->input('customer_fees')}%"))

            ->get()

            ->toArray();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Client::create($request->validate([
            'booking_id' => 'nullable|string',
            'first_name' => 'nullable|string',
            'last_name' =>  'nullable|string',
            'email' =>  'nullable|string',
            'phone' =>  'nullable|string',
            'zip_code' =>  'nullable|string',
            'activity_item' => 'nullable|string',
            'purchase_date' => 'nullable|string',
            'activity_date' => 'nullable|string',
            'total_charge' =>  'nullable|string',
            'payment_status' =>  'nullable|string',
            'ticket_list' =>  'nullable|string',
            'source' =>  'nullable|string',
            'purchase_type' =>  'nullable|string',
            'payment_type' =>  'nullable|string',
            'list_price' =>  'nullable|string',
            'total_discount_amount' =>  'nullable|string',
            'customer_fees' =>  'nullable|string'
        ]))->toArray();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
