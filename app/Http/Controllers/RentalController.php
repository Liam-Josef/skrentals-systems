<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Coc;
use App\Models\Customer;
use App\Models\Maintenance;
use App\Models\Rental;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\RentalHistory;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class RentalController extends Controller
{

    public function index() {
        $rentals = Rental::all();

        return view('admin.rentals.index', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rentals' => $rentals
        ]);
    }

    public function show(Rental $rental) {
        $maintenances = Maintenance::where('service_type', 'COC')->get();
        return view('admin.rentals.show', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rental' => $rental,
            'maintenances' => $maintenances,
            'users' => User::all(),
            'vehicles' => Vehicle::all()
        ]);
    }

    public function rentalToday() {
        $rentals = Rental::all();
        $today = Carbon::now('PST')->toDateString();
        return view('admin.rentals.rentals-today', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rentals' => $rentals,
            'today' => $today
        ]);
    }

    public function rentalHistory() {
//        Rental::query()
//            ->where('updated_at','<', now()->subDays(1))
//            ->each(function ($oldRental) {
//                $newRental = $oldRental->replicate();
//                $newRental ->setTable('rental_histories');
//                $newRental ->save();
//
//                $oldRental->delete();
//            });
//
//        $rentals = RentalHistory::all();

        $rentals = Rental::orderBy('updated_at', 'desc')->get();
        return view('admin.rentals.rental-history', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rentals' => $rentals
        ]);
    }

    public function addRental() {
        Rental::create([
            'booking_id' => request('booking_id'),
            'purchase_type' => request('purchase_type'),
            'purchase_date' => request('purchase_date'),
            'activity_date' => request('activity_date'),
            'activity_item' => request('activity_item'),
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'zip_code' => request('zip_code'),
            'payment_type' => request('payment_type'),
            'payment_status' => request('payment_status'),
            'ticket_list' => request('ticket_list'),
            'email' => request('email'),
            'phone' => request('phone'),
            'source' => request('source'),
            'customer_notes' => request('customer_notes'),
            'list_price' => request('list_price'),
            'total_discount_amount' => request('total_discount_amount'),
            'customer_fees' => request('customer_fees'),
            'total_charge' => request('total_charge'),
            'status' => request('status'),
            'precheck_by' => request('precheck_by', '0'),
        ]);
        return back();
    }


    public function store() {
        Rental::create([
            'booking_id' => request('booking_id'),
            'purchase_date' => request('purchase_date'),
            'activity_date' => request('activity_date'),
            'activity_item' => request('activity_item'),
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'zip_code' => request('zip_code'),
            'payment_status' => request('payment_status'),
            'ticket_list' => request('ticket_list'),
            'email' => request('email'),
            'phone' => request('phone'),
            'source' => request('source'),
            'purchase_type' => request('purchase_type'),
            'payment_type' => request('payment_type'),
            'list_price' => request('list_price'),
            'total_discount_amount' => request('total_discount_amount'),
            'customer_fees' => request('customer_fees'),
            'total_charge' => request('total_charge'),
        ]);
        return back();
    }



    public function attachCustomer(Rental $rental) {
        $rental->customers()->attach(request('customer'));
        $rental->customers()->update(['attached' => '1']);
        $rental->customers()->update(['attached_date' => Carbon::now('PST')->toDateString()]);
        return back();
    }

    public function detachCustomer(Rental $rental) {
        $rental->customers()->detach(request('customer'));
        $rental->customers()->update(['attached' => '0']);
        return back();
    }

    // May Possible Delete
//    public function attachNewCustomer(Rental $rental) {
//        request()->validate([
//            'first_name' => ['required'],
//            'last_name' => ['required'],
//            'phone' => ['required'],
//            'email' => ['required'],
//            'address_1' => ['required'],
//            'city' => ['required'],
//            'state' => ['required'],
//            'zip_code' => ['required'],
//            'driver_license_state' => ['required'],
//            'driver_license_number' => ['required'],
//            'birth_date' => ['required']
//        ]);
//        Customer::create([
//            'first_name' => Str::ucfirst(request('first_name')),
//            'last_name' => Str::ucfirst(request('last_name')),
//            'email' => request('email'),
//            'phone' => request('phone'),
//            'address_1' => request('address_1'),
//            'city' => Str::ucfirst(request('city')),
//            'state' => request('state'),
//            'zip_code' => request('zip_code'),
//            'driver_license_state' => request('driver_license_state'),
//            'driver_license_number' => request('driver_license_number'),
//            'birth_date' => request('birth_date'),
//            'how_heard' => request('how_heard', 'null'),
//            'license_front' => request('license_front', 'null')
//        ]);
//        $rental->customers()->attach(request('customer'));
//        return back();
//    }

// Possible Delete
//    public function rentalStatus(Rental $rental) {
//        auth()->user();
//        $inputs = request()->validate([
//            'status' => ['required']
//        ]);
//
//
//        $rental->update($inputs);
//        return redirect()->route('office.index', ['rental' => $rental] );
//
//    }

    public function rentalStatusPreCheck(Rental $rental) {
        auth()->user();
        $rental->update(['precheck_time' => request('precheck_time')]);
        $rental->update(['precheck_by' => request('precheck_by')]);

        $inputs = request()->validate([
            'status' => ['required']
        ]);


        $rental->update($inputs);
        return redirect()->route('office.precheckin', ['rental' => $rental] );

    }

    public function rentalStatusDock(Rental $rental) {
        auth()->user();
        $inputs = request()->validate([
            'status' => ['required']
        ]);


        $rental->update($inputs);
        return back();

    }



    // Controller 1 - Possible Delete
//    public function attachVehicle(Rental $rental) {
//        $rental->vehicles()->attach(request('vehicle'));
//        $rental->vehicles()->update(['location' => 'On Water']);
//        $rental->save();
//        return back();
//    }
//
//    public function detachVehicle(Rental $rental) {
//
//        $rental->vehicles()->update(['location' => 'Dock']);
//        $rental->vehicles()->detach(request('vehicle'));
//        $rental->save();
//        return back();
//    }

    // Controller 2
    public function cancelRental(Rental $rental) {
        auth()->user();
        $inputs = request()->validate([
            'status' => ['required']
        ]);

        $rental->update(['status' => 'Cancelled']);
        $rental->update(['check_in_by' => request('check_in_by')]);
        $rental->update(['check_in_time' => request('check_in_time')]);
        $rental->customers()->update(['attached' => '0']);

        $rental->update($inputs);

        return redirect()->route('office.index', ['rental' => $rental] );

    }

    public function checkInRental(Rental $rental) {

        $rental->update(['status' => 'Checked In']);
        $rental->update(['security_deposit' => request('security_deposit')]);
        $rental->update(['security_deposit_type' => request('security_deposit_type')]);
        if(request('security_deposit_2')) {
            $rental->update(['security_deposit_2' => request('security_deposit_2')]);
            $rental->update(['security_deposit_type_2' => request('security_deposit_type_2')]);
        }
        if(request('security_deposit_3')) {
            $rental->update(['security_deposit_3' => request('security_deposit_3')]);
            $rental->update(['security_deposit_type_3' => request('security_deposit_type_3')]);
        }
        if(request('fuel_count')) {
            $rental->update(['fuel_count' => request('fuel_count')]);
        }
        if(request('fuel_deposit')) {
            $rental->update(['fuel_deposit' => request('fuel_deposit')]);
            $rental->update(['fuel_deposit_type' => request('fuel_deposit_type')]);
        }
        if(request('second_fuel_deposit')) {
            $rental->update(['second_fuel_deposit' => request('second_fuel_deposit')]);
            $rental->update(['second_fuel_deposit_type' => request('second_fuel_deposit_type')]);
        }
        if(request('toy_fee')) {
            $rental->update(['toy_fee' => request('toy_fee')]);
            $rental->update(['toy_fee_type' => request('fuel_deposit_type')]);
        }
        if(request('second_toy_fee')) {
            $rental->update(['second_toy_fee' => request('second_toy_fee')]);
            $rental->update(['second_toy_fee_type' => request('second_toy_fee_type')]);
        }
        if(request('trailer_fee')) {
            $rental->update(['trailer_fee' => request('trailer_fee')]);
            $rental->update(['trailer_fee_type' => request('fuel_deposit_type')]);
        }

        $rental->update(['check_in_by' => request('check_in_by')]);
        $rental->update(['check_in_time' => request('check_in_time')]);

        return redirect()->route('office.index');
    }

    public function launchRental(Rental $rental) {

        if(request('vehicle')) {
            $rental->vehicles()->attach(request('vehicle'));
            $rental->vehicles()->update(['launched' => '1']);
        }
        if(request('vehicle1')) {
            $rental->vehicles()->attach(request('vehicle1'));
            $rental->vehicles()->update(['launched' => '1']);
        }
        if(request('vehicle2')) {
            $rental->vehicles()->attach(request('vehicle2'));
            $rental->vehicles()->update(['launched' => '1']);
        }
        if(request('vehicle3')) {
            $rental->vehicles()->attach(request('vehicle3'));
            $rental->vehicles()->update(['launched' => '1']);
        }
        if(request('vehicle4')) {
            $rental->vehicles()->attach(request('vehicle4'));
            $rental->vehicles()->update(['launched' => '1']);
        }
        if(request('vehicle5')) {
            $rental->vehicles()->attach(request('vehicle5'));
            $rental->vehicles()->update(['launched' => '1']);
        }
        if(request('vehicle6')) {
            $rental->vehicles()->attach(request('vehicle6'));
            $rental->vehicles()->update(['launched' => '1']);
        }
        if(request('vehicle7')) {
            $rental->vehicles()->attach(request('vehicle7'));
            $rental->vehicles()->update(['launched' => '1']);
        }
        if(request('vehicle8')) {
            $rental->vehicles()->attach(request('vehicle8'));
            $rental->vehicles()->update(['launched' => '1']);
        }
        if(request('vehicle9')) {
            $rental->vehicles()->attach(request('vehicle9'));
            $rental->vehicles()->update(['launched' => '1']);
        }
        if(request('customer_notes')) {
            $rental->update(['customer_notes' => request('customer_notes')]);
        }
        $rental->users()->attach(request('launched_by'));
        $rental->update(['launched_by' => request('launched_by')]);
        $rental->update(['launched_time' => request('launched_time')]);
        $rental->update(['status' => 'On Water']);
        $rental->vehicles()->update(['location' => 'On Water']);


        return back();
    }

    public function changeVehicle(Rental $rental) {

        $rental->vehicles()->attach(request('vehicle'));
        $rental->vehicles()->update(['launched' => '1']);
        $rental->update(['status' => 'On Water']);
        $rental->vehicles()->update(['location' => 'On Water']);

        return back();
    }

    public function detachVehicleChange(Rental $rental) {
        $rental->vehicles()->where('id', '=', request('vehicle'))->update(['launched' => '0']);
        $rental->vehicles()->where('id', '=', request('vehicle'))->update(['location' => 'Dock']);
        $rental->vehicles()->detach(request('vehicle'));

        return back();
    }

    public function vehicleOnDock(Rental $rental) {
        $rental->update(['status' => 'On Dock']);
        $rental->vehicles()->update(['location' => 'Dock']);

        return back();
    }

    public function vehicleClear(Rental $rental) {
        $rental->update(['status' => 'Clear']);
        $rental->vehicles()->update(['location' => 'Dock']);
        $rental->vehicles()->update(['launched' => '0']);
        $rental->update(['customer_notes' => request('customer_notes')]);
        $rental->update(['cleared_by' => request('cleared_by')]);
        $rental->update(['cleared_time' => request('cleared_time')]);

        return back();
    }

    public function vehicleClearMulti(Rental $rental) {
        $rental->update(['status' => 'Clear']);
        $rental->vehicles()->update(['location' => 'Dock']);
        $rental->vehicles()->update(['launched' => '0']);
        $rental->update(['customer_notes' => request('customer_notes')]);
        $rental->update(['cleared_by' => request('cleared_by')]);
        $rental->update(['cleared_time' => request('cleared_time')]);

        return back();
    }

    public function detachVehicleOne(Vehicle $vehicle) {
        $vehicle->where('id', '=', request('vehicle'))->update(['launched' => '0']);
        return back();
    }
    public function detachVehicleCoc(Vehicle $vehicle) {
        $vehicle->where('id', '=', request('vehicle'))->update(['launched' => '0']);
        $vehicle->rentals()->where('id', '=', request('rental'))->update(['coc_vehicle' => request('vehicle')]);
        return back();
    }

    public function vehicleCOC(Rental $rental) {

        $rental->update(['status' => request('status')]);
        $rental->update(['coc_status' => request('coc_status')]);
        $rental->update(['last_four' => request('last_four')]);
        $rental->update(['cleared_by' => request('cleared_by')]);
        $rental->update(['cleared_time' => request('cleared_time')]);
        $rental->update(['incident' => request('incident')]);
        $rental->update(['coc_vehicle' => request('coc_vehicle')]);
        $rental->update(['image_1' => request('image_1')]);
        $rental->update(['coc_hours' => request('coc_hours')]);
        $inputs = request()->validate([
            'image_1' => ['file'],
        ]);
        if(request('image_1')) {
            $inputs['image_1'] = request('image_1')->store('coc-images');
        }
        $rental->update($inputs);
        $rental->vehicles()->update(['location' => 'Dock']);
        $rental->vehicles()->update(['launched' => '0']);
        $rental->vehicles()->update(['current_hours' => request('coc_hours')]);
        $rental->vehicles()->update(['hours_updated' => request('hours_updated')]);

        return back();
    }

    public function rentalCocUpdate(Rental $rental) {
        $rental->update(['incident' => request('incident')]);
        $inputs = request()->validate([
            'image_1' => ['file'],
        ]);
        if(request('image_1')) {
            $inputs['image_1'] = request('image_1')->store('coc-images');
        }
        $rental->update($inputs);
        return back();
    }


    public function cocUpdate(Rental $rental) {

        $rental->update(['coc_status' => request('coc_status')]);
        $rental->update(['last_four' => request('last_four')]);
        $rental->update(['incident' => request('incident')]);

        return back();
    }

    public function updateRental(Rental $rental) {
        $rental->update(['no_wake_fee' => request('no_wake_fee')]);
        $rental->update(['no_wake_fee_type' => request('no_wake_fee_type')]);
        $rental->update(['cleaning_fee' => request('cleaning_fee')]);
        $rental->update(['cleaning_fee_type' => request('cleaning_fee_type')]);
        $rental->update(['late_fee' => request('late_fee')]);
        $rental->update(['late_fee_type' => request('late_fee_type')]);
        $rental->update(['sar_fee' => request('sar_fee')]);
        $rental->update(['sar_fee_type' => request('sar_fee_type')]);

        return back();
    }

}
