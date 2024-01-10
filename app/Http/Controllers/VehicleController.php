<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Maintenance;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Website;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VehicleController extends Controller
{
    //


    private $types;

    public function index() {
        $vehicles = Vehicle::all();
        return view('admin.vehicles.index', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'vehicles' => $vehicles
        ]);
    }

    public function create() {
        return view('admin.vehicles.create', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function service() {
        return view('admin.vehicles.to-service', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'vehicles' => Vehicle::all(),
            'vehicleScarab' => Vehicle::where('vehicle_type','=', 'Scarab')->where('location', '!=', 'On Rental')->get(),
            'vehiclePontoon' => Vehicle::where('vehicle_type','=', 'Pontoon')->where('location', '!=', 'On Rental')->get(),
            'vehicleSeaDoo' => Vehicle::where('vehicle_type','=', 'SeaDoo')->where('location', '!=', 'On Rental')->get(),
            'today' => Carbon::now('PST')->toDateString(),
            'dateNow' => Carbon::now('PST')->addHours(1)
        ]);
    }

    public function store()
    {
        request()->validate([
            'internal_vehicle_id' => ['required', 'min:1', 'max:2'],
            'vehicle_type' => ['required'],
            'year' => ['required', 'min:4', 'integer'],
            'model' => ['required'],
            'vin' => ['required'],
            'location' => ['required']
        ]);
        Vehicle::create([
            'internal_vehicle_id' => request('internal_vehicle_id'),
            'vehicle_type' => request('vehicle_type'),
            'location' => request('location'),
            'year' => request('year'),
            'model' => request('model'),
            'vin' => request('vin'),

            'or_number' => request('or_number', 'OR ... ...'),
            'hours_updated' => request('hours_updated', '00-00-0000'),
            'current_hours' => request('current_hours', '0'),
            'expected_hours' => request('expected_hours', '50'),
            'remaining_hours' => request('remaining_hours', '50'),
            'previous_hours' => request('previous_hours', '0'),
            'last_serviced' => request('last_serviced', '0000-00-00'),
            'launched' => request('launched', '0'),
            'status' => request('status', 'Incoming'),
            'is_active' => request('is_active', '1')
        ]);

        return redirect()->route('vehicle.index');


    }

    public function view(Vehicle $vehicle) {

        $vehicleRentals = $vehicle->rentals()->get()->count();
        $vehicleCoc = $vehicle->rentals()->where('status', '=', 'COC')->get()->count();
        $vehicleService = $vehicle->maintenances()->get()->count();
        return view('admin.vehicles.profile', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'vehicle' => $vehicle,
            'vehicles' => Vehicle::all(),
            'users' => User::all(),
            'vehicleRentals' => $vehicleRentals,
            'vehicleCoc' => $vehicleCoc,
            'vehicleService' => $vehicleService,
            'maintenances' => Maintenance::all(),
            'dateNow' => Carbon::now('PST')->addHours(1)
        ]);
    }

    public function edit(Vehicle $vehicle) {
        return view('admin.vehicles.edit', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'vehicle' => $vehicle
        ]);
    }

    public function updateHours(Vehicle $vehicle) {
        $inputs = request()->validate([
            'current_hours' => ['required'],
            'hours_updated' => ['required']
        ]);

        // TODO Updated expected_hours when updating hour counts
//        $hoursExp = $vehicle->where('id', '=', request('id'))->select('expected_hours')->get();
//        $currentHour = $vehicle->where('id', '=', request('id'))->select('current_hours')->get();
//        $remainHour = $hoursExp + $currentHour;

        $vehicle->update($inputs);
        return back();
    }
    public function updateLocation(Vehicle $vehicle) {
        $inputs = request()->validate([
            'location' => ['required'],
            'location_timestamp' => ['required']
        ]);

        // TODO Updated expected_hours when updating hour counts
//        $hoursExp = $vehicle->where('id', '=', request('id'))->select('expected_hours')->get();
//        $currentHour = $vehicle->where('id', '=', request('id'))->select('current_hours')->get();
//        $remainHour = $hoursExp + $currentHour;

//        $rental->update(['precheck_time' => request('precheck_time')]);
        if(request('hours_updated')) {
            $vehicle->update(['hours_updated' => request('hours_updated')]);
        }
        if(request('current_hours')) {
            $vehicle->update(['current_hours' => request('current_hours')]);
        }

        $vehicle->update($inputs);
        return back();
    }
    public function update(Vehicle $vehicle) {
        $inputs = request()->validate([
            'internal_vehicle_id' => ['min:1', 'string', 'max:2'],
        ]);
        if(request('location')) {
            $inputs['location'] = request('location');
        }
        if(request('status')) {
            $inputs['status'] = request('status');
        }
        if(request('or_number')) {
            $inputs['or_number'] = request('or_number');
        }
        if(request('current_hours')) {
            $inputs['current_hours'] = request('current_hours');
        }
        if(request('$expected_hours')) {
            $inputs['$expected_hours'] = request('$expected_hours');
        }
        if(request('previous_hours')) {
            $inputs['previous_hours'] = request('previous_hours');
        }
        if(request('hours_updated')) {
            $inputs['hours_updated'] = request('hours_updated');
        }
        if(request('last_serviced')) {
            $inputs['last_serviced'] = request('last_serviced');
        }
        if(request('notes')) {
            $inputs['notes'] = request('notes');
        }

        $curhours = request('current_hours');
        $expHours = request('expected_hours');
        $remaining_hours = [trim($expHours - $curhours)];
//        $remaining_hours = preg_replace('/\([^)]*\)|[()]/', '', $option_title);
        $vehicle->update(['remaining_hours' => $remaining_hours]);
        $vehicle->update($inputs);

        return redirect()->route('vehicle.index');
    }

    public function delete(Vehicle $vehicle) {
        $vehicle->delete();
        session()->flash('vehicle-deleted', 'Vehicle has been deleted...');
        return back();
    }
    public function printProducts()
    {
        $skips = ["[","]","\""];
        return str_replace($skips, ' ',$this->types->pluck('name'));
    }



}
