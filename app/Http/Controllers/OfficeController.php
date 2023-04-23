<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Coc;
use App\Models\Customer;
use App\Models\Maintenance;
use App\Models\Post;
use App\Models\Rental;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Website;
use Carbon\Carbon;
use App\Models\RentalHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OfficeController extends Controller
{
    //



    public function index(Rental $rental) {
        $users = User::all();
        $cocs = Coc::all();
        $posts = Post::orderBy('created_at', 'desc')->take(2)->get();
        $vehicles = Vehicle::all();
        $today = Carbon::now('PST')->toDateString();
        $rentalDepart = Rental::where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
        $rentalDepartScarab = Rental::where('activity_item', '=', 'Scarab 215')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
        $rentalDepartPontoon = Rental::where('activity_item', '=', '23ft. Pontoon Boat')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
        $rentalDepartSeaDoo = Rental::where('activity_item', '=', 'SeaDoo')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
        $rentalDepartSup = Rental::where('activity_item', '=', 'Stand Up Paddleboard')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
        $rentalDepartKayak = Rental::where('activity_item', 'like', '%Kayak%')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
        $rentalDepartSpyder = Rental::where('activity_item', '=', 'Spyder RT-S SE6')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
        $rentalDepartSegway = Rental::where('activity_item', '=', 'Segway i2')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
        $rentalDepartSkiDoo = Rental::where('activity_item', '=', ['Renegade BC 600ETec', 'Summit 154 SP'])->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
        $rentalDepartRenegade = Rental::where('activity_item', '=', 'Renegade BC 600ETec')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
        $rentalDepartSummit = Rental::where('activity_item', '=', 'Summit 154 SP')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
        $rentalDepartAluminum = Rental::where('activity_item', '=', '14ft. Aluminum Boat')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
        $rentalReturn = Rental::where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'COC', 'Clear', 'On Water')")->orderBy('updated_at', 'desc')->get();
        $rentalReturnScarab = Rental::where('activity_item', '=', 'Scarab 215')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'COC', 'Clear', 'On Water')")->orderBy('updated_at', 'desc')->get();
        $rentalReturnPontoon = Rental::where('activity_item', '=', '23ft. Pontoon Boat')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'COC', 'Clear', 'On Water')")->orderBy('updated_at', 'desc')->get();
        $rentalReturnSeaDoo = Rental::where('activity_item', '=', 'SeaDoo')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'COC', 'Clear', 'On Water')")->orderBy('updated_at', 'desc')->get();
        $rentalReturnSup = Rental::where('activity_item', '=', 'Stand Up Paddleboard')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'COC', 'Clear', 'On Water')")->orderBy('updated_at', 'desc')->get();
        $rentalReturnKayak = Rental::where('activity_item', '=', ['activity_item', 'like', '%Kayak%'])->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'COC', 'Clear', 'On Water')")->orderBy('updated_at', 'desc')->get();
        $rentalReturnSpyder = Rental::where('activity_item', '=', 'Spyder RT-S SE6')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'COC', 'Clear', 'On Water')")->orderBy('updated_at', 'desc')->get();
        $rentalReturnSegway = Rental::where('activity_item', '=', 'Segway i2')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'COC', 'Clear', 'On Water')")->orderBy('updated_at', 'desc')->get();
        $rentalReturnSkiDoo = Rental::where('activity_item', '=', ['Renegade BC 600ETec', 'Summit 154 SP'])->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'COC', 'Clear', 'On Water')")->orderBy('updated_at', 'desc')->get();
        $rentalReturnAluminum = Rental::where('activity_item', '=', '14ft. Aluminum Boat')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'COC', 'Clear', 'On Water')")->orderBy('updated_at', 'desc')->get();
        $rentalTypeScarab = Rental::where('activity_item', '=', 'Scarab 215')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypePontoon = Rental::where('activity_item', '=', '23ft. Pontoon Boat')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeSeaDoo = Rental::where('activity_item', '=', 'SeaDoo')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeSup = Rental::where('activity_item', '=', 'Stand Up Paddleboard')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeKayak = Rental::where('activity_item', 'like', '%Kayak%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeSpyder = Rental::where('activity_item', '=', 'Spyder RT-S SE6')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeSegway = Rental::where('activity_item', '=', 'Segway i2')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeSkiDoo = Rental::where('activity_item', '=', 'Renegade BC 600ETec' or 'Summit 154 SP')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeAluminum = Rental::where('activity_item', '=', '14ft. Aluminum Boat')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();


        return view('office.index', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rentalReturn' => $rentalReturn,
            'rentalDepart' => $rentalDepart,
            'posts' => $posts,
            'vehicles' => $vehicles,
            'customers' => Customer::all(),
            'today' => $today,
            'cocs' => $cocs,
            'users' => $users,
            'rentalDepartScarab' => $rentalDepartScarab,
            'rentalDepartPontoon' => $rentalDepartPontoon,
            'rentalDepartSeaDoo' => $rentalDepartSeaDoo,
            'rentalDepartSup' => $rentalDepartSup,
            'rentalDepartKayak' => $rentalDepartKayak,
            'rentalDepartSpyder' => $rentalDepartSpyder,
            'rentalDepartSegway' => $rentalDepartSegway,
            'rentalDepartSkiDoo' => $rentalDepartSkiDoo,
            'rentalDepartRenegade' => $rentalDepartRenegade,
            'rentalDepartSummit' => $rentalDepartSummit,
            'rentalDepartAluminum' => $rentalDepartAluminum,
            'rentalReturnScarab' => $rentalReturnScarab,
            'rentalReturnPontoon' => $rentalReturnPontoon,
            'rentalReturnSeaDoo' => $rentalReturnSeaDoo,
            'rentalReturnSup' => $rentalReturnSup,
            'rentalReturnKayak' => $rentalReturnKayak,
            'rentalReturnSpyder' => $rentalReturnSpyder,
            'rentalReturnSegway' => $rentalReturnSegway,
            'rentalReturnSkiDoo' => $rentalReturnSkiDoo,
            'rentalReturnAluminum' => $rentalReturnAluminum,
            'rentalTypeScarab' => $rentalTypeScarab,
            'rentalTypePontoon' => $rentalTypePontoon,
            'rentalTypeSeaDoo' => $rentalTypeSeaDoo,
            'rentalTypeSup' => $rentalTypeSup,
            'rentalTypeKayak' => $rentalTypeKayak,
            'rentalTypeSpyder' => $rentalTypeSpyder,
            'rentalTypeSegway' => $rentalTypeSegway,
            'rentalTypeSkiDoo' => $rentalTypeSkiDoo,
            'rentalTypeAluminum' => $rentalTypeAluminum
        ]);



    }

    public function show(Rental $rental) {
        $dateNow =Carbon::now('PST')->addHours(1);


        return view('office.checkin', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rental'=>$rental,
            'customers' => Customer::all(),
            'dateNow' => $dateNow

        ]);
    }

    public function update(Customer $customer) {
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
            'license_front' => ['file']
        ]);
        if(request('license_front')) {
            $inputs['license_front'] = request('license_front')->store('images');
        }
        $customer->update($inputs);
        return back();
    }
//TODO - Image bug
    public function store() {
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
            'how_heard' => [''],
            'license_front' => ['file']
        ]);
        if(request('license_front')) {
            $inputs['license_front'] = request('license_front')->store('images');
        }

        Customer::create($inputs);
//        $rental->customers()->attach(request('customer'));

        return back();
    }

    public function storeNew() {
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
            'how_heard' => [''],
            'license_front' => ['']
        ]);
        if(request('license_front')) {
            $inputs['license_front'] = request('license_front');
        }
        Customer::create($inputs);


//        $rental->customers()->attach(request('customer'));

        return back();
    }

//    Maybe Delete
//    public function office() {
//        $rentals = Rental::all();
//        return view('team.office.index', ['rentals' => $rentals]);
//    }

    public function precheckin() {
        $rentals = Rental::all();
        $rentalPrecheck = Rental::orderBy('activity_date', 'asc')->get();
        $rentalPreCheckShow = Rental::where('status', '=', 'Pre-Check')->orderBy('updated_at', 'desc')->get();
        $rentalPreCheckShowCount = Rental::where('status', '=', 'Pre-Check')->orderBy('updated_at', 'desc')->get()->count();
        $today = Carbon::now('PST')->toDateString();
        $dateNow =Carbon::now('PST')->addHours(1);

        return view('office.precheckin', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rentals' => $rentals,
            'dateNow' => $dateNow,
            'rentalPrecheck' => $rentalPrecheck,
            'rentalPreCheckShow' => $rentalPreCheckShow,
            'rentalPreCheckShowCount' => $rentalPreCheckShowCount,
            'today' => $today,
            'rentalScarab' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', 'Scarab 215')->where('status', '=', '')->orderBy('activity_date', 'asc')->get(),
            'rentalTypeScarab' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', 'Scarab 215')->where('status', '=', '')->get()->count(),

            'rentalPontoon' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', '23ft. Pontoon Boat')->where('status', '=', '')->orderBy('activity_date', 'asc')->get(),
            'rentalTypePontoon' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', '23ft. Pontoon Boat')->where('status', '=', '')->get()->count(),

            'rentalSeaDoo' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', 'SeaDoo')->where('status', '=', '')->orderBy('activity_date', 'asc')->get(),
            'rentalTypeSeaDoo' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', 'SeaDoo')->where('status', '=', '')->get()->count(),

            'rentalSup' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', 'Stand Up Paddleboard')->where('status', '=', '')->orderBy('activity_date', 'asc')->get(),
            'rentalTypeSup' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', 'Stand Up Paddleboard')->where('status', '=', '')->get()->count(),

            'rentalKayak' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', ['Kayak Single', 'Double Kayak'])->where('status', '=', '')->orderBy('activity_date', 'asc')->get(),
            'rentalTypeKayak' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', ['Kayak Single', 'Double Kayak'])->where('status', '=', '')->get()->count(),

            'rentalSpyder' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', 'Spyder RT-S SE6')->where('status', '=', '')->orderBy('activity_date', 'asc')->get(),
            'rentalTypeSpyder' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', 'Spyder RT-S SE6')->where('status', '=', '')->get()->count(),

            'rentalSegway' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', 'Segway i2')->where('status', '=', '')->orderBy('activity_date', 'asc')->get(),
            'rentalTypeSegway' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', 'Segway i2')->where('status', '=', '')->get()->count(),

            'rentalSkiDoo' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', ['Renegade BC 600ETec', 'Summit 154 SP'])->where('status', '=', '')->orderBy('activity_date', 'asc')->get(),
            'rentalTypeSkiDoo' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', ['Renegade BC 600ETec', 'Summit 154 SP'])->where('status', '=', '')->get()->count(),

            'rentalAluminum' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', '14ft. Aluminum Boat')->where('status', '=', '')->orderBy('activity_date', 'asc')->get(),
            'rentalTypeAluminum' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', '14ft. Aluminum Boat')->where('status', '=', '')->get()->count(),

        ]);

    }

    public function precheckShow(Rental $rental) {
        $dateNow =Carbon::now('PST')->addHours(1);
        $rentalPreCheckShow = Rental::where('status', '=', 'Pre-Check')->orderBy('updated_at', 'desc')->get();
        $rentalPreCheckShowCount = Rental::where('status', '=', 'Pre-Check')->orderBy('updated_at', 'desc')->get()->count();
        return view('office.precheck.show', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rental' => $rental,
            'dateNow' => $dateNow,
            'rentalPreCheckShow' => $rentalPreCheckShow,
            'rentalPreCheckShowCount' => $rentalPreCheckShowCount,
            'customers' => Customer::all()
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

        $posts = Post::orderBy('created_at', 'desc')->take(2)->get();
        return view('office.rental-history', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rentals' => $rentals,
            'posts' => $posts,
        ]);
    }



    public function rentalProfile(Rental $rental) {
        $maintenances = Maintenance::where('service_type', 'COC')->get();
        return view('office.rental-profile', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rental' => $rental,
            'customer' => Customer::all(),
            'maintenances' => $maintenances,
            'users' => User::all(),
            'vehicles' => Vehicle::all(),
            'posts' => Post::orderBy('created_at', 'desc')->take(2)->get()
        ]);
    }

    public function customers(Customer $customer) {
        $customers = Customer::all();
        $customerRentals = $customer->rentals()->get()->count();
//        $customerRental = Rentals::where('')
        $posts = Post::orderBy('created_at', 'desc')->take(2)->get();
        return view('office.customers', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'posts' => $posts,
            'customers' => $customers,
            'customerRentals'=>$customerRentals
        ]);
    }

    public function customerProfile(Customer $customer) {
        $posts = Post::orderBy('created_at', 'desc')->take(2)->get();
        $rentals = $customer->rentals()->get();
        return view('office.customer-profile', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'customer' => $customer,
            'rentals' => $rentals,
            'posts' => $posts
        ]);
    }

    public function coc() {
        $rentals = Rental::where('status', 'COC')->orderBy('updated_at', 'desc')->get();
        $rentalHistory = RentalHistory::where('status', 'COC')->orderBy('created_at', 'asc')->get();
        $posts = Post::orderBy('created_at', 'desc')->take(2)->get();
        $clearedBy = User::get('id');
        $users = User::all();
        return view('office.coc', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rentals' => $rentals,
            'rentalHistory' => $rentalHistory,
            'posts' => $posts,
            'users' => $users,
            'clearedBy' => $clearedBy
        ]);
    }

//    public function attachCustomer(Customer $customer) {
//        dd($customer);
//    }


//    // AJAX Modal (office.index)
//    public function rental_checkin($id) {
//        return Rental::findOrFail($id);
//    }
}
