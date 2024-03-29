<?php

namespace App\Http\Controllers;

use App\Models\Addition;
use App\Models\Application;
use App\Models\Availabil;
use App\Models\Booking;
use App\Models\Coc;
use App\Models\Customer;
use App\Models\Duration;
use App\Models\Maintenance;
use App\Models\Post;
use App\Models\Price;
use App\Models\Rental;
use App\Models\Reschedule;
use App\Models\Type;
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
        $rentalDepartScarab = Rental::where('activity_item', 'like', '%Scarab%')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
        $rentalDepartPontoon = Rental::where('activity_item', 'like', '%Pontoon%')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
        $rentalDepartSeaDoo = Rental::where('activity_item', 'like', '%SeaDoo%')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get();
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
        $rentalTypeScarab = Rental::where('activity_item', 'like', '%Scarab%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypePontoon = Rental::where('activity_item', 'like', '%Pontoon%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeSeaDoo = Rental::where('activity_item', 'like', '%SeaDoo%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeSup = Rental::where('activity_item', '=', 'Stand Up Paddleboard')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeKayak = Rental::where('activity_item', 'like', '%Kayak%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeSpyder = Rental::where('activity_item', '=', 'Spyder RT-S SE6')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeSegway = Rental::where('activity_item', '=', 'Segway i2')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeSkiDoo = Rental::where('activity_item', '=', 'Renegade BC 600ETec' or 'Summit 154 SP')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeRenegade = Rental::where('activity_item', '=', 'Renegade BC 600ETec')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeSummit = Rental::where('activity_item', '=', 'Summit 154 SP')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $rentalTypeAluminum = Rental::where('activity_item', '=', '14ft. Aluminum Boat')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();


        return view('office.index', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rentalReturn' => $rentalReturn,
            'rentalDepart' => $rentalDepart,
            'posts' => $posts,
            'vehicles' => $vehicles,
            'customers' => Customer::where('attached', '=', '1')->where('attached_date', 'like', '%'.$today.'%')->get(),
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
            'rentalTypeRenegade' => $rentalTypeRenegade,
            'rentalTypeSummit' => $rentalTypeSummit,
            'rentalTypeAluminum' => $rentalTypeAluminum
        ]);



    }
    public function main() {
        $users = User::all();
        $cocs = Coc::all();
        $posts = Post::orderBy('created_at', 'desc')->take(2)->get();
        $vehicles = Vehicle::all();
        $today = Carbon::now('PST')->toDateString();
        $bookings = Booking::where('activity_date_start', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->where('is_active', '=', '1')->orderBy('activity_date_start', 'asc')->get();

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

        $rentalTypeScarab = Booking::where('activity_item', '=', 'scarab')->where('activity_date_start', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->where('is_active', '=', '1')->get()->count();
        $rentalTypePontoon = Booking::where('activity_item', '=', 'pontoon')->select('activity_date_start')->where('activity_date_start', 'like', '%'.$today.'%')->where('is_active', '=', '1')->get()->count();
        $rentalTypeSeaDoo = Booking::where('activity_item', '=', 'seadoo')->select('activity_date_start')->where('activity_date_start', 'like', '%'.$today.'%')->where('is_active', '=', '1')->get()->count();
        $rentalTypeSup = Booking::where('activity_item', '=', 'paddleboard')->select('activity_date_start')->where('activity_date_start', 'like', '%'.$today.'%')->where('is_active', '=', '1')->get()->count();
        $rentalTypeKayak = Booking::where('activity_item', 'like', '%kayak%')->select('activity_date_start')->where('activity_date_start', 'like', '%'.$today.'%')->where('is_active', '=', '1')->get()->count();
        $rentalTypeSpyder = Booking::where('activity_item', '=', 'spyder')->select('activity_date_start')->where('activity_date_start', 'like', '%'.$today.'%')->get()->where('is_active', '=', '1')->count();
        $rentalTypeSegway = Booking::where('activity_item', '=', 'segway')->select('activity_date_start')->where('activity_date_start', 'like', '%'.$today.'%')->get()->where('is_active', '=', '1')->count();
        $rentalTypeSkiDoo = Booking::where('activity_item', '=', 'Renegade BC 600ETec' or 'Summit 154 SP')->select('activity_date_start')->where('activity_date_start', 'like', '%'.$today.'%')->where('is_active', '=', '1')->get()->count();
        $rentalTypeRenegade = Booking::where('activity_item', '=', 'renegade')->select('activity_date_start')->where('activity_date_start', 'like', '%'.$today.'%')->where('is_active', '=', '1')->get()->count();
        $rentalTypeSummit = Booking::where('activity_item', '=', 'summit')->select('activity_date_start')->where('activity_date_start', 'like', '%'.$today.'%')->where('is_active', '=', '1')->get()->count();
        $rentalTypeAluminum = Booking::where('activity_item', '=', 'aluminum')->select('activity_date_start')->where('activity_date_start', 'like', '%'.$today.'%')->where('is_active', '=', '1')->get()->count();


        return view('office.main', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'bookings' => $bookings,
            'rentalReturn' => $rentalReturn,
            'posts' => $posts,
            'vehicles' => $vehicles,
            'customers' => Customer::where('attached', '=', '1')->where('attached_date', 'like', '%'.$today.'%')->get(),
            'durations' => Duration::all(),
            'types' => Type::all(),
            'today' => $today,
            'cocs' => $cocs,
            'users' => $users,
            'rentalTypeScarab' => $rentalTypeScarab,
            'rentalTypePontoon' => $rentalTypePontoon,
            'rentalTypeSeaDoo' => $rentalTypeSeaDoo,
            'rentalTypeSup' => $rentalTypeSup,
            'rentalTypeKayak' => $rentalTypeKayak,
            'rentalTypeSpyder' => $rentalTypeSpyder,
            'rentalTypeSegway' => $rentalTypeSegway,
            'rentalTypeSkiDoo' => $rentalTypeSkiDoo,
            'rentalTypeRenegade' => $rentalTypeRenegade,
            'rentalTypeSummit' => $rentalTypeSummit,
            'rentalTypeAluminum' => $rentalTypeAluminum,

            'rentalReturnScarab' => $rentalReturnScarab,
            'rentalReturnPontoon' => $rentalReturnPontoon,
            'rentalReturnSeaDoo' => $rentalReturnSeaDoo,
            'rentalReturnSup' => $rentalReturnSup,
            'rentalReturnKayak' => $rentalReturnKayak,
            'rentalReturnSpyder' => $rentalReturnSpyder,
            'rentalReturnSegway' => $rentalReturnSegway,
            'rentalReturnSkiDoo' => $rentalReturnSkiDoo,
            'rentalReturnAluminum' => $rentalReturnAluminum
        ]);



    }

    public function update_booking(Booking $booking) {
        $dateNow = Carbon::now('PST')->addHours(1);


        return view('office.update-booking', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'types' => Type::where('id', '=', $booking->type_id)->get(),
            'durations' => Duration::where('id', '=', $booking->duration_id)->get(),
            'booking'=>$booking,
            'prices' => Price::all(),
            'customers' => Customer::all(),
            'additions' => Addition::all(),
            'dateNow' => $dateNow
        ]);
    }

    public function reschedule_booking(Booking $booking) {
        $dateNow = Carbon::now('PST')->addHours(1);


        return view('office.reschedule', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'types' => Type::where('id', '=', $booking->type_id)->get(),
            'durations' => Duration::where('id', '=', $booking->duration_id)->get(),
            'booking'=>$booking,
            'customers' => Customer::all(),
            'additions' => Addition::all(),
            'dateNow' => $dateNow
        ]);
    }

    public function reschedule_booking_duration(Reschedule $reschedule) {
        $dateNow = Carbon::now('PST')->addHours(1);


        return view('office.reschedule-2-duration', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'types' => Type::where('id', '=', $reschedule->type_id)->get(),
            'durations' => Duration::all(),
            'prices' => Price::all(),
            'bookings' => Booking::where('id', '=', $reschedule->booking_id)->get(),
            'reschedule'=>$reschedule,
            'customers' => Customer::all(),
            'additions' => Addition::all(),
            'dateNow' => $dateNow
        ]);
    }

    public function reschedule_booking_time(Reschedule $reschedule) {
        $dateNow = Carbon::now('PST')->addHours(1);


        return view('office.reschedule-3-time', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'types' => Type::where('id', '=', $reschedule->type_id)->get(),
            'durations' => Duration::all(),
            'bookings' => Booking::where('id', '=', $reschedule->booking_id)->get(),
            'availabils' => Availabil::all(),
            'reschedule'=>$reschedule,
            'prices' => Price::all(),
            'customers' => Customer::all(),
            'additions' => Addition::all(),
            'dateNow' => $dateNow
        ]);
    }

    public function reschedule_booking_additions(Reschedule $reschedule) {
        $dateNow = Carbon::now('PST')->addHours(1);


        return view('office.reschedule-4-additions', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'types' => Type::where('id', '=', $reschedule->type_id)->get(),
            'durations' => Duration::all(),
            'bookings' => Booking::where('id', '=', $reschedule->booking_id)->get(),
            'availabils' => Availabil::all(),
            'reschedule'=>$reschedule,
            'prices' => Price::all(),
            'customers' => Customer::all(),
            'additions' => Addition::all(),
            'dateNow' => $dateNow
        ]);
    }

    public function reschedule_booking_confirmation(Reschedule $reschedule) {
        $dateNow = Carbon::now('PST')->addHours(1);


        return view('office.reschedule-5-confirmation', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'types' => Type::where('id', '=', $reschedule->type_id)->get(),
            'durations' => Duration::all(),
            'bookings' => Booking::where('id', '=', $reschedule->booking_id)->get(),
            'availabils' => Availabil::all(),
            'reschedule'=>$reschedule,
            'prices' => Price::all(),
            'customers' => Customer::all(),
            'additions' => Addition::all(),
            'dateNow' => $dateNow
        ]);
    }

    public function checkin_1(Booking $booking) {
        $dateNow =Carbon::now('PST')->addHours(1);


        return view('office.checkin', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'types' => Type::where('id', '=', $booking->type_id)->get(),
            'durations' => Duration::where('id', '=', $booking->duration_id)->get(),
            'booking'=>$booking,
            'customers' => Customer::all(),
            'additions' => Addition::all(),
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

    public function storeNew(Booking $booking) {
        request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone' => ['required'],
            'email' => ['required']
        ]);
        $customer = new Customer();
        $customer->first_name = Str::ucfirst(request('first_name'));
        $customer->last_name = Str::ucfirst(request('last_name'));
        $customer->email = request('email');
        $customer->phone = request('phone');
        $customer->address_1 = request('address_1');
        $customer->city = request('city');
        $customer->state = request('state');
        $customer->zip_code = request('zip_code');
        $customer->driver_license_state = request('driver_license_state');
        $customer->driver_license_number = request('driver_license_number');
        $customer->birth_date = request('birth_date');
        $customer->how_heard = request('how_heard', 'null');
        $customer->license_front = request('license_front');
        $customer->attached = request('attached');
        $customer->attached_date = Carbon::now('PST')->toDateString();
        $customer->save();

//        if(request('license_front')) {
//            $inputs['license_front'] = request('license_front')->store('images');
//        }
        $booking->customers()->attach($customer);

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
            'rentalScarab' => Rental::where('activity_item', 'like', '%Scarab%')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get(),
            'rentalTypeScarab' => Rental::where('activity_item', 'like', '%Scarab%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count(),

            'rentalPontoon' => Rental::where('activity_item', 'like', '%Pontoon%')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get(),
            'rentalTypePontoon' => Rental::where('activity_item', 'like', '%Pontoon%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count(),

            'rentalSeaDoo' => Rental::where('activity_item', 'like', '%SeaDoo%')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get(),
            'rentalTypeSeaDoo' => Rental::where('activity_item', 'like', '%SeaDoo%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count(),

            'rentalSup' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', 'Stand Up Paddleboard')->where('status', '=', '')->orderBy('activity_date', 'asc')->get(),
            'rentalTypeSup' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', 'Stand Up Paddleboard')->where('status', '=', '')->get()->count(),

            'rentalKayak' => Rental::where('activity_item', 'like', '%Kayak%')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get(),
            'rentalTypeKayak' => Rental::where('activity_item', 'like', '%Kayak%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count(),

            'rentalSpyder' => Rental::where('activity_item', 'like', '%Spyder%')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get(),
            'rentalTypeSpyder' => Rental::where('activity_item', 'like', '%Spyder%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count(),

            'rentalSegway' => Rental::where('activity_item', 'like', '%Segway%')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get(),
            'rentalTypeSegway' => Rental::where('activity_item', 'like', '%Segway%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count(),

            'rentalSkiDoo' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', 'Renegade BC 600ETec' or 'Summit 154 SP')->where('status', '=', '')->orderBy('activity_date', 'asc')->get(),
            'rentalTypeSkiDoo' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('activity_item', '=', 'Renegade BC 600ETec' or 'Summit 154 SP')->where('status', '=', '')->get()->count(),
            'rentalTypeRenegade' => Rental::where('activity_item', '=', 'Renegade BC 600ETec')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count(),
            'rentalTypeSummit' => Rental::where('activity_item', '=', 'Summit 154 SP')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count(),

            'rentalAluminum' => Rental::where('activity_item', 'like', '%Aluminum%')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get(),
            'rentalTypeAluminum' => Rental::where('activity_item', 'like', '%Aluminum%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count(),

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
