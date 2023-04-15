<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Customer;
use App\Models\Rental;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    //

    public function index() {

        return view('admin.customers.index', [
            'applications' => Application::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get()
        ]);
    }

    public function create() {
        return view('admin.customers.create', [
            'applications' => Application::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get()
        ]);
    }

    public function store() {
        request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone' => ['required'],
            'email' => ['required']
        ]);
        Customer::create([
            'first_name' => Str::ucfirst(request('first_name')),
            'last_name' => Str::ucfirst(request('last_name')),
            'email' => request('email'),
            'phone' => request('phone'),
            'address_1' => request('address_1'),
            'city' => Str::ucfirst(request('city')),
            'state' => request('state'),
            'zip_code' => request('zip_code'),
            'driver_license_state' => request('driver_license_state'),
            'driver_license_number' => request('driver_license_number'),
            'birth_date' => request('birth_date'),
            'how_heard' => request('how_heard', 'null'),
            'license_front' => request('license_front')
        ]);
//        if(request('license_front')) {
//            $inputs['license_front'] = request('license_front')->store('images');
//        }

        return back();
    }

    public function show() {

        return view('admin.customers.customers', [
            'applications' => Application::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'customers'=>Customer::all()
        ]);
    }

    public function profile() {
        return view('customers.profile.view', [
            'applications' => Application::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }
    public function profileUpdate(Customer $customer) {
       return view('admin.customers.profile-update', [
           'applications' => Application::where('id', '=', '1')->get(),
           'websites' => Website::where('id', '=', '1')->get(),
           'customer' => $customer
       ]);
    }
    public function update(Customer $customer) {
        $inputs = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone' => ['required'],
            'email' => ['required']
        ]);
        if(request('license_front')) {
            $inputs['license_front'] = request('license_front')->store('images');
        }
        $customer->update($inputs);
        return redirect()->route('customers.profile.view', ['customer' => $customer] );
    }

    public function view(Customer $customer) {
        $rentals = $customer->rentals()->get();

        return view('admin.customers.profile', [
            'applications' => Application::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'customer'=> $customer,
            'rentals' => $rentals
        ]);
    }

    public function coc() {
        return view('admin.office.coc', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function delete(Customer $customer) {
        $customer->delete();
        session()->flash('customer-deleted', 'Customer has been deleted...');
        return back();
    }
    public function updateCustomer(Customer $customer) {
        $inputs = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
            'address_1' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'zip_code' => ['required'],
            'driver_license_state' => ['required'],
            'driver_license_number' => ['required'],
            'birth_date' => ['required'],
            'license_front' => ['file'],
        ]);
        if(request('license_front')) {
            $inputs['license_front'] = request('license_front')->store('images');
        }
        $customer->update($inputs);
        return back();
    }

}
