<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Post;
use App\Models\Rental;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Website;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DockController extends Controller
{
    //

    protected $guarded = [];





    public function index() {
        $users = User::whereHas(
            'roles', function($q){
            $q->where('name', 'Dock');
        }
        )->where('id', '!=', '2')->where('id', '!=', '3')->get();

        $today = Carbon::now('PST')->toDateString();
        $dateNow =Carbon::now('PST')->addHours(1);

        $officePrecheck = Rental::where('status', '=', 'Pre-Check')->get();
        $officePrecheckCount = Rental::where('status', '=', 'Pre-Check')->get()->count();

        $returnRental = Rental::where('status', '=', 'On Water')->select('launched_time')->get();
        $duration = Rental::select('ticket_list')->get();
        $returnDuration = function($returnRental) {
            if(strpos(1, '1 hour') !== false) {
                Carbon::parse($returnRental)->addHours(1)->format('h:i A');
            }
        };
//        $returnRentals = Vehicle::where('launched', '=', '1')->get();

        return view('dock.index', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rentalReturn' => Rental::where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'On Water', 'COC', 'Clear')")->orderBy('updated_at', 'asc')->get(),
            'rentalDepart' => Rental::where('activity_date', 'like', '%'.$today.'%')->orderBy('updated_at', 'asc')->get(),
            'posts' => Post::orderBy('created_at', 'desc')->take(1)->get(),
            'vehicles' => Vehicle::all(),
            'users' => $users,
            'vehicleScarab' => Vehicle::where('vehicle_type','=', 'Scarab')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleSeaDoo' => Vehicle::where('vehicle_type','=', 'SeaDoo')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehiclePontoon' => Vehicle::where('vehicle_type','=', 'Pontoon')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleAluminum' => Vehicle::where('vehicle_type','=', 'Aluminum')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleSpyder' => Vehicle::where('vehicle_type','=', 'Spyder')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleSkiDoo' => Vehicle::where('vehicle_type','=', 'SkiDoo')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleSegway' => Vehicle::where('vehicle_type','=', 'Segway')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleStand' => Vehicle::where('vehicle_type','=', 'SUP')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleKayak' => Vehicle::where('vehicle_type','=', 'Kayak')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'today' => $today,
            'dateNow' => $dateNow,
            'officePrecheck' => $officePrecheck,
            'officePrecheckCount' => $officePrecheckCount,
            'returnDuration' => $returnDuration
        ]);
    }


    public function hourCounts() {
        $officePrecheck = Rental::where('status', '=', 'Pre-Check')->get();
        $officePrecheckCount = Rental::where('status', '=', 'Pre-Check')->get()->count();

        $today = Carbon::now('PST')->toDateString();
        $dateNow =Carbon::now('PST')->addHours(1);
        return view('dock.hour-counts', [
           'applications' => Website::where('id', '=', '1')->get(),
            'officePrecheck' => $officePrecheck,
            'officePrecheckCount' => $officePrecheckCount,
            'vehicleScarab' => Vehicle::where('vehicle_type','=', 'Scarab')->where('location', '!=', 'Service')->get(),
            'vehiclePontoon' => Vehicle::where('vehicle_type','=', 'Pontoon')->where('location', '!=', 'Service')->get(),
            'vehicleSeaDoo' => Vehicle::where('vehicle_type','=', 'SeaDoo')->where('location', '!=', 'Service')->get(),
            'vehicleSkiDoo' => Vehicle::where('vehicle_type','=', 'SkiDoo')->where('location', '!=', 'Service')->get(),
            'dateNow' => $dateNow,
            'today' => $today,
        ]);
    }

    public function updateHours() {

    }
//TODO - Fix Return times to be accurate in due by - Possibly not needed
    public function returning() {
        $users = User::whereHas(
            'roles', function($q){
            $q->where('name', 'Dock');
        }
        )->where('id', '!=', '2')->where('id', '!=', '3')->get();

        $today = Carbon::now('PST')->toDateString();
        $dateNow =Carbon::now('PST')->addHours(1);

        $officePrecheck = Rental::where('status', '=', 'Pre-Check')->get();
        $officePrecheckCount = Rental::where('status', '=', 'Pre-Check')->get()->count();

        $returnRental = Rental::where('status', '=', 'On Water')->select('launched_time')->get();
        $duration = Rental::select('ticket_list')->get();
        $returnDuration = function($returnRental) {
            if(strpos(1, '1 hour') !== false) {
                Carbon::parse($returnRental)->addHours(1)->format('h:i A');
            }
        };
        return view('dock.returning', [
           'applications' => Website::where('id', '=', '1')->get(),
            'rentalReturn' => Rental::where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'On Water', 'COC', 'Clear')")->orderBy('updated_at', 'asc')->get(),
            'rentalReturnScarab' => Rental::where('activity_item', '=', 'Scarab 215')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'On Water', 'COC', 'Clear')")->orderBy('updated_at', 'asc')->get(),
            'rentalReturnPontoon' => Rental::where('activity_item', '=', '23ft. Pontoon Boat')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'On Water', 'COC', 'Clear')")->orderBy('updated_at', 'asc')->get(),
            'rentalReturnSeaDoo' => Rental::where('activity_item', '=', 'SeaDoo')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'On Water', 'COC', 'Clear')")->orderBy('updated_at', 'asc')->get(),
            'rentalReturnSup' => Rental::where('activity_item', '=', 'Stand Up Paddleboard')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'On Water', 'COC', 'Clear')")->orderBy('updated_at', 'asc')->get(),
            'rentalReturnKayak' => Rental::where('activity_item', 'like', '%Kayak%')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'On Water', 'COC', 'Clear')")->orderBy('updated_at', 'asc')->get(),
            'rentalReturnSpyder' => Rental::where('activity_item', '=', 'Spyder RT-S SE6')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'On Water', 'COC', 'Clear')")->orderBy('updated_at', 'asc')->get(),
            'rentalReturnSegway' => Rental::where('activity_item', '=', 'Segway i2')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'On Water', 'COC', 'Clear')")->orderBy('updated_at', 'asc')->get(),
            'rentalReturnSkiDoo' => Rental::where('activity_item', '=', ['Renegade BC 600ETec', 'Summit 154 SP'])->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'On Water', 'COC', 'Clear')")->orderBy('updated_at', 'asc')->get(),
            'rentalReturnAluminum' => Rental::where('activity_item', '=', '14ft. Aluminum Boat')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'On Water', 'COC', 'Clear')")->orderBy('updated_at', 'asc')->get(),
            'rentalTypeScarab' => Rental::where('activity_item', '=', 'Scarab 215')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'On Dock', 'On Water', 'COC', 'Clear')")->get()->count(),
            'rentalTypePontoon' => Rental::where('activity_item', '=', '23ft. Pontoon Boat')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', ['On Water', 'On Dock', 'COC', 'Clear'])->get()->count(),
            'rentalTypeSeaDoo' => Rental::where('activity_item', '=', 'SeaDoo')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', ['On Water', 'On Dock', 'COC', 'Clear'])->get()->count(),
            'rentalTypeSup' => Rental::where('activity_item', '=', 'Stand Up Paddleboard')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', ['On Water', 'On Dock', 'COC', 'Clear'])->get()->count(),
            'rentalTypeKayak' => Rental::where('activity_item', 'like', '%Kayak%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', ['On Water', 'On Dock', 'COC', 'Clear'])->get()->count(),
            'rentalTypeSpyder' => Rental::where('activity_item', 'like', '%Spyder%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', ['On Water', 'On Dock', 'COC', 'Clear'])->get()->count(),
            'rentalTypeSegway' => Rental::where('activity_item', 'like', '%Segway%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', ['On Water', 'On Dock', 'COC', 'Clear'])->get()->count(),
            'rentalTypeSkiDoo' => Rental::where('activity_item', '=', ['Renegade BC 600ETec', 'Summit 154 SP'])->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', ['On Water', 'On Dock', 'COC', 'Clear'])->get()->count(),
            'rentalTypeRenegade' => Rental::where('activity_item', 'like', '%Renegade%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', ['On Water', 'On Dock', 'COC', 'Clear'])->get()->count(),
            'rentalTypeSummit' => Rental::where('activity_item', 'like', '%Summit%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', ['On Water', 'On Dock', 'COC', 'Clear'])->get()->count(),
            'rentalTypeAluminum' => Rental::where('activity_item', '=', '14ft. Aluminum Boat')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', ['On Water', 'On Dock', 'COC', 'Clear'])->get()->count(),
            'posts' => Post::orderBy('created_at', 'desc')->take(1)->get(),
            'vehicles' => Vehicle::all(),
            'users' => $users,
            'vehicleScarab' => Vehicle::where('vehicle_type','=', 'Scarab')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleSeaDoo' => Vehicle::where('vehicle_type','=', 'SeaDoo')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehiclePontoon' => Vehicle::where('vehicle_type','=', 'Pontoon')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleAluminum' => Vehicle::where('vehicle_type','=', 'Aluminum')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleSpyder' => Vehicle::where('vehicle_type','=', 'Spyder')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleSkiDoo' => Vehicle::where('vehicle_type','=', 'SkiDoo')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleSegway' => Vehicle::where('vehicle_type','=', 'Segway')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleStand' => Vehicle::where('vehicle_type','=', 'SUP')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleKayak' => Vehicle::where('vehicle_type','=', 'Kayak')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'today' => $today,
            'dateNow' => $dateNow,
            'officePrecheck' => $officePrecheck,
            'officePrecheckCount' => $officePrecheckCount,
            'returnDuration' => $returnDuration
        ]);
    }

    public function departing() {
        $users = User::whereHas(
            'roles', function($q){
            $q->where('name', 'Dock');
        }
        )->where('id', '!=', '2')->where('id', '!=', '3')->get();

        $today = Carbon::now('PST')->toDateString();
        $dateNow =Carbon::now('PST')->addHours(1);

        $officePrecheck = Rental::where('status', '=', 'Pre-Check')->get();
        $officePrecheckCount = Rental::where('status', '=', 'Pre-Check')->get()->count();

        $returnRental = Rental::where('status', '=', 'On Water')->select('launched_time')->get();
        $duration = Rental::select('ticket_list')->get();
        $returnDuration = function($returnRental) {
            if(strpos(1, '1 hour') !== false) {
                Carbon::parse($returnRental)->addHours(1)->format('h:i A');
            }
        };
        return view('dock.departing', [
           'applications' => Website::where('id', '=', '1')->get(),
            'rentalDepart' => Rental::where('activity_date', 'like', '%'.$today.'%')->orderBy('updated_at', 'asc')->get(),
            'rentalDepartScarab' => Rental::where('activity_item', 'like', '%Scarab%')->where('activity_date', 'like', '%'.$today.'%')->orderBy('updated_at', 'asc')->get(),
            'rentalDepartPontoon' => Rental::where('activity_item', 'like', '%Pontoon%')->where('activity_date', 'like', '%'.$today.'%')->orderBy('updated_at', 'asc')->get(),
            'rentalDepartSeaDoo' => Rental::where('activity_item', 'like', '%SeaDoo%')->where('activity_date', 'like', '%'.$today.'%')->orderBy('updated_at', 'asc')->get(),
            'rentalDepartSup' => Rental::where('activity_item', '=', 'Stand Up Paddleboard')->where('activity_date', 'like', '%'.$today.'%')->orderBy('updated_at', 'asc')->get(),
            'rentalDepartKayak' => Rental::where('activity_item', 'like', '%Kayak%')->where('activity_date', 'like', '%'.$today.'%')->orderBy('updated_at', 'asc')->get(),
            'rentalDepartSpyder' => Rental::where('activity_item', 'like', '%Spyder%')->where('activity_date', 'like', '%'.$today.'%')->orderBy('updated_at', 'asc')->get(),
            'rentalDepartSegway' => Rental::where('activity_item', 'like', '%Segway%')->where('activity_date', 'like', '%'.$today.'%')->orderBy('updated_at', 'asc')->get(),
            'rentalDepartSkiDoo' => Rental::where('activity_item', '=', ['Renegade BC 600ETec', 'Summit 154 SP'])->where('activity_date', 'like', '%'.$today.'%')->orderByRaw("FIELD(status , 'Pre-Check', '')")->orderBy('activity_date', 'asc')->get(),
            'rentalDepartRenegade' => Rental::where('activity_item', 'like', '%Renegade%')->where('activity_date', 'like', '%'.$today.'%')->orderBy('updated_at', 'asc')->get(),
            'rentalDepartSummit' => Rental::where('activity_item', 'like', '%Summit%')->where('activity_date', 'like', '%'.$today.'%')->orderBy('updated_at', 'asc')->get(),
            'rentalDepartAluminum' => Rental::where('activity_item', 'like', '%Aluminum%')->where('activity_date', 'like', '%'.$today.'%')->orderBy('updated_at', 'asc')->get(),
            'rentalType' => Rental::where('activity_date', 'like', '%'.$today.'%')->where('status', '=', 'Checked In')->get(),
            'rentalTypeScarab' => Rental::where('activity_item', 'like', '%Scarab%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', 'Checked In')->get()->count(),
            'rentalTypePontoon' => Rental::where('activity_item', 'like', '%Pontoon%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', 'Checked In')->get()->count(),
            'rentalTypeSeaDoo' => Rental::where('activity_item', 'like', '%SeaDoo%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', 'Checked In')->get()->count(),
            'rentalTypeSup' => Rental::where('activity_item', '=', 'Stand Up Paddleboard')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', 'Checked In')->get()->count(),
            'rentalTypeKayak' => Rental::where('activity_item', 'like', '%Kayak%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', 'Checked In')->get()->count(),
            'rentalTypeSpyder' => Rental::where('activity_item', 'like', '%Spyder%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', 'Checked In')->get()->count(),
            'rentalTypeSegway' => Rental::where('activity_item', 'like', '%Segway%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', 'Checked In')->get()->count(),
            'rentalTypeSkiDoo' => Rental::where('activity_item', '=', 'Renegade BC 600ETec' or 'Summit 154 SP')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', 'Checked In')->get()->count(),
            'rentalTypeRenegade' => Rental::where('activity_item', 'like', '%Renegade%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', 'Checked In')->get()->count(),
            'rentalTypeSummit' => Rental::where('activity_item', 'like', '%Summit%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', 'Checked In')->get()->count(),
            'rentalTypeAluminum' => Rental::where('activity_item', 'like', '%Aluminum%')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->where('status', '=', 'Checked In')->get()->count(),
            'posts' => Post::orderBy('created_at', 'desc')->take(1)->get(),
            'vehicles' => Vehicle::all(),
            'users' => $users,
            'vehicleScarab' => Vehicle::where('vehicle_type','=', 'Scarab')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleSeaDoo' => Vehicle::where('vehicle_type','=', 'SeaDoo')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehiclePontoon' => Vehicle::where('vehicle_type','=', 'Pontoon')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleAluminum' => Vehicle::where('vehicle_type','=', 'Aluminum')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleSpyder' => Vehicle::where('vehicle_type','=', 'Spyder')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleSkiDoo' => Vehicle::where('vehicle_type','=', 'SkiDoo')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleSegway' => Vehicle::where('vehicle_type','=', 'Segway')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleStand' => Vehicle::where('vehicle_type','=', 'SUP')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'vehicleKayak' => Vehicle::where('vehicle_type','=', 'Kayak')->where('location', '=', 'Dock')->where('launched', '=', '0')->get(),
            'today' => $today,
            'dateNow' => $dateNow,
            'officePrecheck' => $officePrecheck,
            'officePrecheckCount' => $officePrecheckCount,
            'returnDuration' => $returnDuration
        ]);
    }


}





