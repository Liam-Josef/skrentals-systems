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
    public function index()
    {
        return Client::all()->toArray();
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
