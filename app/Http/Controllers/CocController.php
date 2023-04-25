<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Coc;
use App\Models\Maintenance;
use App\Models\Rental;
use App\Models\RentalHistory;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Website;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CocController extends Controller
{
    //

    public function index() {
        return view('admin.coc.index', [
           'applications' => Website::where('id', '=', '1')->get(),
        'serviceTotalCount' => Rental::where('status', '=', 'COC')->where('coc_status', '!=', 'Complete')->get()->count(),
        'serviceNewCount' => Rental::where('status', '=', 'COC')->where('coc_status', '=', 'New')->get()->count(),
        'serviceInCount' => Rental::where('status', '=', 'COC')->where('coc_status', '=', 'Service')->get()->count(),
        'serviceInvAprCount' => Rental::where('status', '=', 'COC')->where('coc_status', '=', 'Invoice Submitted')->get()->count(),
        'serviceBillCount' => Rental::where('status', '=', 'COC')->where('coc_status', '=', 'Billing')->get()->count(),
        'serviceNew' => Rental::where('status', '=', 'COC')->where('coc_status', '=', 'New')->get(),
        'serviceService' => Rental::where('status', '=', 'COC')->where('coc_status', '=', 'Service')->get(),
        'serviceInvApr' => Rental::where('status', '=', 'COC')->where('coc_status', '=', 'Invoice Submitted')->get(),
        'serviceBill' => Rental::where('status', '=', 'COC')->where('coc_status', '=', 'Billing')->get(),
         'vehicles' => Vehicle::all(),
        ]);
    }

    public function current() {
        $dateNow =Carbon::now('PST')->addHours(1);
        $users = User::all();
        $rentals = Rental::where('status', 'COC')->orderBy('updated_at', 'asc')->get();
        $rentalNew = Rental::where('status', 'COC')->where('coc_status', 'New')->orderBy('updated_at', 'asc')->get();
        $rentalService = Rental::where('status', 'COC')->where('coc_status', 'Service')->orderBy('updated_at', 'asc')->get();
        $rentalInvoice = Rental::where('status', 'COC')->where('coc_status', 'Invoice Submitted')->orderBy('updated_at', 'asc')->get();
        $rentalBilling = Rental::where('status', 'COC')->where('coc_status', 'Billing')->orderBy('updated_at', 'asc')->get();
        $rentalHistory = RentalHistory::where('status', 'COC')->orderBy('created_at', 'asc')->get();
        return view('admin.coc.current', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'maintenances' => Maintenance::all(),
            'vehicles' => Vehicle::all(),
            'dateNow' => $dateNow,
            'rentals' => $rentals,
            'rentalNew' => $rentalNew,
            'rentalService' => $rentalService,
            'rentalInvoice' => $rentalInvoice,
            'rentalBilling' => $rentalBilling,
            'users' => $users,
            'rentalHistory' => $rentalHistory
        ]);
    }

    public function history() {

        $rentals = Rental::where('status', 'COC')->where('coc_status', 'Complete')->orderBy('updated_at', 'asc')->get();
        $rentalComplete = Rental::where('status', 'COC')->where('coc_status', 'Complete')->orderBy('updated_at', 'asc')->get();
        return view('admin.coc.history', [
            'websites' => Website::where('id', '=', '1')->get(),
           'applications' => Website::where('id', '=', '1')->get(),
            'rentals' => $rentals,
            'rentalComplete' => $rentalComplete
        ]);
    }

    public function create() {
        return view('admin.coc.create', [
            'websites' => Website::where('id', '=', '1')->get(),
           'applications' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function customers() {
        return view('admin.coc.customers', [
            'websites' => Website::where('id', '=', '1')->get(),
           'applications' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function vehicleCOC(Rental $rental) {
        request()->validate([
            'incident' => ['required'],
            'status' => ['required'],
            'image_1' => ['required'],
            'image_2' => ['required'],
            'last_4' => ['']
        ]);
        Coc::create([
            'incident' => request('incident'),
            'status' => Str::ucfirst(request('status')),
            'image_1' => request('image_1'),
            'image_2' => request('image_2'),
            'last_4' => request('last_4'),
        ]);


        $rental->update(['status' => 'COC']);
        $rental->update(['image_1' => request('image_1')]);
        $rental->vehicles()->update(['location' => 'Dock']);
        $rental->vehicles()->update(['current_Hours' => request('coc_hours')]);
        $rental->vehicles()->update(['hours_updated' =>  Carbon::now('PST')->toDateString());
        $rental->update(['cleared_by' => request('cleared_by')]);
        $rental->update(['cleared_time' => request('cleared_time')]);
//        Coc::rentals()->attach(request('rental'));

        return back();
    }

    public function intakeCoc(Rental $rental) {

        $rental->update(['coc_status' => 'Service']);
        $rental->update(['incident' => request('description')]);
        $rental->update(['last_four' => request('last_four')]);
        $inputs = request()->validate([
            'image' => [''],
        ]);
        if(request('image_1')) {
            $inputs['image'] = request('image_1')->store('coc-images');
        }
        $rental->update($inputs);

        Maintenance::create([
            'vehicle_type' => request('vehicle_type'),
            'vehicle_id' => request('vehicle_id'),
            'internal_vehicle_id' => request('internal_vehicle_id'),
            'rental_invoice' => request('rental_invoice'),
            'status' => request('status', 'Created'),
            'date_submitted' => request('date_submitted'),
            'submitted_by' => request('submitted_by'),
            'description' => request('description'),
            'is_active' => request('maint_active'),
            'service_type' => request('service_type'),
            'service_hours' => request('coc_hours'),
            'image' => request('image_1')
        ]);

        return back();
    }

    public function attachRental(Rental $rental) {
        $rental->maintenances()->attach(request('maintenance'));
        $rental->maintenances()->update(['service_hours' => request('coc_hours')]);
        $rental->maintenances()->update(['image' => request('image')]);
        return back();
    }

    public function acceptInvoice(Rental $rental) {
        $rental->maintenances()->update(['approved_by' => request('approved_by')]);
        $rental->maintenances()->update(['date_approved' => request('date_approved')]);
        $rental->maintenances()->update(['status' => 'Completed']);
        $rental->update(['coc_status' => 'Billing']);

        return back();
    }

    public function cocComplete(Rental $rental) {
        $rental->update(['coc_status' => 'Complete']);
        $rental->maintenances()->update(['completed_by' => request('completed_by')]);
        $rental->maintenances()->update(['date_completed' => request('date_completed')]);
        $rental->maintenances()->update(['is_active' => '0']);
        return back();
    }


}
