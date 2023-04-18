<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Maintenance;
use App\Models\Rental;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Website;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    //


    public function index() {
        $maintenances = Maintenance::all();
        $activeMaintenance = Maintenance::where('is_active', '=', '1')->get();
        $activeMaintenanceWeek = Maintenance::where('is_active', '=', '1')->whereDate('created_at', '>', Carbon::now()->subDays(7))->get();
        $activeMaintenance7days = Maintenance::where('is_active', '=', '1')->whereDate('created_at', '<', Carbon::now()->subDays(7))->whereDate('created_at', '>', Carbon::now()->subDays(14))->get();
        $activeMaintenance14days = Maintenance::where('is_active', '=', '1')->whereDate('created_at', '<', Carbon::now()->subDays(14))->get();
        $createdCount = Maintenance::where('status', '=', 'Created')->get()->count();
        $serviceCount = Maintenance::where('status', '=', 'In Service')->get()->count();
        $invoiceCount = Maintenance::where('status', '=', 'Invoice Submitted')->get()->count();
        $completedCount = Maintenance::where('status', '=', 'Completed')->get()->count();
        $dateNow =Carbon::now('PST');
        $vehicleSeaDoo = Vehicle::where('vehicle_type', '=', 'SeaDoo')->get();
        $vehiclePontoon = Vehicle::where('vehicle_type', '=', 'Pontoon')->get();
        $vehicleScarab = Vehicle::where('vehicle_type', '=', 'Scarab')->get();
        return view('admin.maintenance.index', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'users' => User::all(),
            'vehicles' => Vehicle::all(),
            'createdCount' => $createdCount,
            'serviceCount' => $serviceCount,
            'invoiceCount' => $invoiceCount,
            'completedCount' => $completedCount,
            'activeMaintenance' => $activeMaintenance,
            'activeMaintenanceWeek' => $activeMaintenanceWeek,
            'activeMaintenance7days' => $activeMaintenance7days,
            'activeMaintenance14days' => $activeMaintenance14days,
            'vehicleSeaDoo' => $vehicleSeaDoo,
            'vehiclePontoon' => $vehiclePontoon,
            'vehicleScarab' => $vehicleScarab,
            'maintenances' => $maintenances,
            'dateNow' => $dateNow
        ]);
    }

    public function chart(Vehicle $vehicle) {
        $dateNow =Carbon::now('PST');
        $vehicles = Vehicle::all();
        $vehicleSeaDoo = Vehicle::where('vehicle_type', '=', 'SeaDoo')->get();
        $vehiclePontoon = Vehicle::where('vehicle_type', '=', 'Pontoon')->get();
        $vehicleScarab = Vehicle::where('vehicle_type', '=', 'Scarab')->get();
        $vehicleSpyder = Vehicle::where('vehicle_type', '=', 'Spyder')->get();
        $vehicleSkiDoo = Vehicle::where('vehicle_type', '=', 'SkiDoo')->get();
        $vehicleRentals = $vehicle->rentals()->get()->count();
        $maintenances = Maintenance::all();
        return view('admin.maintenance.maintenance-chart', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'users' => User::all(),
            'vehicles' => $vehicles,
            'vehicleSeaDoo' => $vehicleSeaDoo,
            'vehiclePontoon' => $vehiclePontoon,
            'vehicleScarab' => $vehicleScarab,
            'vehicleSpyder' => $vehicleSpyder,
            'vehicleSkiDoo' => $vehicleSkiDoo,
            'vehicleRentals' => $vehicleRentals,
            'dateNow' => $dateNow,
            'maintenances' => $maintenances
        ]);
    }

    public function service() {
        $rentals = Rental::where('status', 'COC')->orderBy('updated_at', 'desc')->get();
        $maintenances = Maintenance::orderByRaw("FIELD(status , 'New', 'In Service', 'Invoice Submitted', 'Completed', 'Rejected')")->orderBy('status', 'desc')->get();
//        $maintenances = Maintenance::all();
        $activeMaintenance = Maintenance::where('is_active', '=', '1')->get();
        $createdCount = Maintenance::where('status', '=', 'Created')->get()->count();
        $serviceCount = Maintenance::where('status', '=', 'In Service')->get()->count();
        $invoiceCount = Maintenance::where('status', '=', 'Invoice Submitted')->get()->count();
        $completedCount = Maintenance::where('status', '=', 'Completed')->get()->count();
        $rejectedCount = Maintenance::where('status', '=', 'Rejected')->get()->count();
        $dateNow =Carbon::now('PST');
        return view('admin.maintenance.service', data: [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'users' => User::all(),
            'vehicles' => Vehicle::all(),
            'rentals' => $rentals,
            'createdCount' => $createdCount,
            'serviceCount' => $serviceCount,
            'invoiceCount' => $invoiceCount,
            'completedCount' => $completedCount,
            'rejectedCount' => $rejectedCount,
            'activeMaintenance' => $activeMaintenance,
            'maintenances' => $maintenances,
            'dateNow' => $dateNow
        ]);
    }

    public function show(Maintenance $maintenance) {
        $rentals = Rental::all();
        return view('admin.maintenance.profile', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'maintenance' => $maintenance,
            'rentals' => $rentals
        ]);
    }

    public function profileAdmin(Maintenance $maintenance) {
        return view('admin.maintenance.profile', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'maintenance' => $maintenance
        ]);
    }

    public function hours() {
        return view('admin.maintenance.hour-counts', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'vehicleScarab' => Vehicle::where('vehicle_type','=', 'Scarab')->where('location', '!=', 'Service')->get(),
            'vehiclePontoon' => Vehicle::where('vehicle_type','=', 'Pontoon')->where('location', '!=', 'Service')->get(),
            'vehicleSeaDoo' => Vehicle::where('vehicle_type','=', 'SeaDoo')->where('location', '!=', 'Service')->get(),
            'today' => Carbon::now('PST')->toDateString(),
            'dateNow' => Carbon::now('PST')->addHours(1)
        ]);
    }

    public function acceptMaintReqCoc(Maintenance $maintenance) {
        $maintenance->update(['status' => 'In Service']);
        $maintenance->update(['service_notes' => request('service_notes')]);
        return back();
    }

    public function req_deny(Maintenance $maintenance) {
        $maintenance->update(['status' => request('status')]);
        $maintenance->update(['denied_by' => request('denied_by')]);
        $maintenance->update(['serv_deny_reason' => request('serv_deny_reason')]);
        $maintenance->update(['deny_date' => request('deny_date')]);
        return back();
    }

    public function acceptMaintInvoice(Maintenance $maintenance) {
        $maintenance->update(['approved_by' => request('approved_by')]);
        $maintenance->update(['date_approved' => request('date_approved')]);
        $maintenance->update(['status' => 'Completed']);
        $maintenance->update(['is_active' => '0']);

        return back();
    }

    public function attachInvoice(Maintenance $maintenance) {

        $inputs = request()->validate([
            'invoice' => ['file'],
        ]);
        if(request('invoice')) {
            $inputs['invoice'] = request('invoice')->store('invoices');
            $maintenance->rentals()->update(['coc_status' => 'Invoice Submitted']);
            $maintenance->update(['date_invoiced' => request('date_invoiced')]);
            $maintenance->update(['invoiced_by' => request('invoiced_by')]);
            $maintenance->update(['service_invoice' => request('service_invoice')]);
            $maintenance->update(['status' => 'Invoice Submitted']);
        }
        $maintenance->update($inputs);


        $maintenance->update(['service_notes' => request('service_notes')]);

        return back();
    }

    public function updateInvoice(Maintenance $maintenance) {

        $inputs = request()->validate([
            'invoice' => ['file'],
        ]);
        if(request('invoice')) {
            $inputs['invoice'] = request('invoice')->store('invoices');
            $maintenance->rentals()->update(['coc_status' => 'Invoice Submitted']);
            $maintenance->update(['date_invoiced' => request('date_invoiced')]);
            $maintenance->update(['invoiced_by' => request('invoiced_by')]);
            $maintenance->update(['service_invoice' => request('service_invoice')]);
            $maintenance->update(['status' => 'Invoice Submitted']);
        }
        $maintenance->update($inputs);
        $maintenance->update(['service_notes' => request('service_notes')]);

        return back();
    }

    public function serviceFront() {
        $users = User::all();
        $rentals = Rental::where('status', 'COC')->orderBy('updated_at', 'desc')->get();
        $maintenances = Maintenance::orderByRaw("FIELD(status , 'New', 'In Service', 'Invoice Submitted', 'Completed')")->orderBy('status', 'desc')->get();
        return view('service.index', data: [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'maintenances' => $maintenances,
            'vehicles' => Vehicle::all(),
            'dateNow' => Carbon::now('PST'),
            'rentals' => $rentals,
            'users' => $users
        ]);
    }

    public function submitMaintReqOffice() {
        $inputs = request()->validate([
            'vehicle_id' => ['required'],
            'status' => ['required'],
            'date_submitted' => ['required'],
            'submitted_by' => ['required'],
            'description' => ['required'],
            'is_active' => ['required'],
            'vehicle_type' => ['required'],
            'internal_vehicle_id' => ['min: 1'],
            'service_type' => ['required'],
            'image' => ['mimetypes:image/jpg,image/jpeg,image/png']
        ]);

        if(request('image')) {
            $inputs['image'] = request('image')->store('service');
        }
        Maintenance::create($inputs);

        return back();
    }

    public function submitMaintReqDock() {
        $inputs = request()->validate([
            'vehicle_id' => ['required'],
            'status' => ['required'],
            'date_submitted' => ['required'],
            'submitted_by' => ['required'],
            'description' => ['required'],
            'is_active' => ['required'],
            'vehicle_type' => ['required'],
            'internal_vehicle_id' => ['min: 1'],
            'service_type' => ['required'],
            'image' => ['mimetypes:image/jpg,image/jpeg,image/png']
        ]);

        if(request('image')) {
            $inputs['image'] = request('image')->store('service');
        }
        Maintenance::create($inputs);

        return back();
    }

    public function submitMaintReqAdmin() {
        $inputs = request()->validate([
            'vehicle_id' => ['required'],
            'status' => ['required'],
            'date_submitted' => ['required'],
            'submitted_by' => ['required'],
            'description' => ['required'],
            'is_active' => ['required'],
            'vehicle_type' => ['required'],
            'internal_vehicle_id' => ['min: 1'],
            'service_type' => ['required'],
            'image' => ['mimetypes:image/jpg,image/jpeg,image/png']
        ]);

        if(request('image')) {
            $inputs['image'] = request('image')->store('service');
        }
        Maintenance::create($inputs);

        return redirect()->route('admin.index');
    }


    public function submitServiceReqAdmin(Maintenance $maintenance) {
        $maintenance->vehicle()->attach(request('vehicle_id'));
        $maintenance->update(['submitted_by' => request('submitted_by')]);
        $maintenance->update(['date_submitted' => request('date_submitted')]);
        $maintenance->update(['internal_vehicle_id' => request('internal_vehicle_id')]);

        $maintenance->update(['is_active' => request('is_active', '1')]);

        return back();
    }

    public function acceptMaintReqAdmin(Maintenance $maintenance) {
        $maintenance->update(['status' => 'In Service']);
        $maintenance->update(['service_notes' => request('service_notes')]);
        return back();
    }

    public function acceptMaintInvoiceAdmin(Maintenance $maintenance) {
        $maintenance->update(['approved_by' => request('approved_by')]);
        $maintenance->update(['date_approved' => request('date_approved')]);
        $maintenance->update(['status' => 'Completed']);

        return back();
    }

    public function attachInvoiceAdmin(Maintenance $maintenance) {

        $inputs = request()->validate([
            'invoice' => ['file'],
        ]);
        if(request('invoice')) {
            $inputs['invoice'] = request('invoice')->store('invoices');
            $maintenance->rentals()->update(['coc_status' => 'Invoice Submitted']);
            $maintenance->update(['date_invoiced' => request('date_invoiced')]);
            $maintenance->update(['invoiced_by' => request('invoiced_by')]);
            $maintenance->update(['service_invoice' => request('service_invoice')]);
            $maintenance->update(['status' => 'Invoice Submitted']);
        }
        $maintenance->update($inputs);


        $maintenance->update(['service_notes' => request('service_notes')]);

        return back();
    }

    public function updateInvoiceAdmin(Maintenance $maintenance) {

        $inputs = request()->validate([
            'invoice' => ['file'],
        ]);
        if(request('invoice')) {
            $inputs['invoice'] = request('invoice')->store('invoices');
            $maintenance->rentals()->update(['coc_status' => 'Invoice Submitted']);
            $maintenance->update(['date_invoiced' => request('date_invoiced')]);
            $maintenance->update(['invoiced_by' => request('invoiced_by')]);
            $maintenance->update(['service_invoice' => request('service_invoice')]);
            $maintenance->update(['status' => 'Invoice Submitted']);
        }
        $maintenance->update($inputs);
        $maintenance->update(['service_notes' => request('service_notes')]);

        return back();
    }

    public function acceptInvoice(Maintenance $maintenance) {
        $maintenance->update(['approved_by' => request('approved_by')]);
        $maintenance->update(['date_approved' => request('date_approved')]);
        $maintenance->update(['status' => 'Completed']);
        $maintenance->rentals()->update(['coc_status' => 'Billing']);

        return back();
    }

}
