<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Maintenance;
use App\Models\Post;
use App\Models\Rental;
use App\Models\User;
use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // DELETE TO MAKE HOME PAGE - LOGIN REQUIRED
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::latest()->get();
        $today = Carbon::now('PST')->toDateString();
        $maintenances = Maintenance::orderByRaw("FIELD(status , 'New', 'In Service', 'Invoice Submitted', 'Completed')")->orderBy('status', 'desc')->get();

        $applications = Application::where('id', '=', '1')->get();
        // TODO - Query to move rentals to history after day has passed
//        Rental::query()
//            ->where('updated_at','<', now()->subDays(1))
//            ->each(function ($oldRental) {
//                $newRental = $oldRental->replicate();
//                $newRental ->setTable('rental_histories');
//                $newRental ->save();
//
//                $oldRental->delete();
//            });

        $rentals = Rental::all();

        $rentalCounts = Rental::select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $scarabCount = Rental::where('activity_item', '=', 'Scarab 215')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $pontoonCount = Rental::where('activity_item', '=', '23ft. Pontoon Boat')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $seadooCount = Rental::where('activity_item', '=', 'SeaDoo')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $supCount = Rental::where('activity_item', '=', 'Stand Up Paddleboard')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $kayakCount = Rental::where('activity_item', '=', 'Kayak Single, Double Kayak')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $spyderCount = Rental::where('activity_item', '=', 'Spyder RT-S SE6')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $segwayCount = Rental::where('activity_item', '=', 'Segway i2')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $backcountryCount = Rental::where('activity_item', '=', 'Renegade BC 600ETec')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $summitCount = Rental::where('activity_item', '=', 'Summit 154 SP')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $alumCount = Rental::where('activity_item', '=', '14ft. Aluminum Boat')->select('activity_date')->where('activity_date', 'like', '%'.$today.'%')->get()->count();

        $serviceTotalCount = Maintenance::where('status', '!=', 'Completed')->get()->count();
        $serviceAppCount = Maintenance::where('status', '=', 'Completed')->get()->count();
        $serviceNewCount = Maintenance::where('status', '=', 'Created')->get()->count();
        $serviceInvoiceCount = Maintenance::where('status', '=', 'In Service')->get()->count();
        $serviceInvReq = Maintenance::where('status', '=', 'Created')->get();

        $cocRental = Rental::where('status', '=', 'COC')->where('activity_date', 'like', '%'.$today.'%')->get();
        $cocRentalCount = Rental::where('status', '=', 'COC')->where('activity_date', 'like', '%'.$today.'%')->get()->count();
        $vehicleSeaDoo = Vehicle::where('vehicle_type', '=', 'SeaDoo')->get();
        $vehiclePontoon = Vehicle::where('vehicle_type', '=', 'Pontoon')->get();
        $vehicleScarab = Vehicle::where('vehicle_type', '=', 'Scarab')->get();

        return view('team.index', [
            'users' => User::where('is_active', '=', '1')->where('is_rg', '=', '0')->get(),
            'userCount' => User::where('is_active', '=', '1')->where('is_rg', '=', '0')->get()->count(),
            'posts'=>$posts,
            'applications' => $applications,
            'rentals'=>$rentals,
            'rentalCounts' => $rentalCounts,
            'scarabCount' => $scarabCount,
            'pontoonCount' => $pontoonCount,
            'seadooCount' => $seadooCount,
            'supCount' => $supCount,
            'kayakCount' => $kayakCount,
            'spyderCount' => $spyderCount,
            'segwayCount' => $segwayCount,
            'backcountryCount' => $backcountryCount,
            'summitCount' => $summitCount,
            'alumCount' => $alumCount,
            'cocRental' => $cocRental,
            'cocRentalCount' => $cocRentalCount,
            'maintenances' => $maintenances,
            'vehicles' => Vehicle::all(),
            'dateNow' => Carbon::now('PST')->addHours(1),
            'serviceTotalCount' => $serviceTotalCount,
            'serviceNewCount' => $serviceNewCount,
            'serviceInvoiceCount' => $serviceInvoiceCount,
            'serviceAppCount' => $serviceAppCount,
            'serviceInvReq' => $serviceInvReq,
            'vehicleSeaDoo' => $vehicleSeaDoo,
            'vehiclePontoon' => $vehiclePontoon,
            'vehicleScarab' => $vehicleScarab
        ]);


    }


//    public function ticketType () {
//        $activityItem = Rental::find('activity_item')->get();
//        $rentalType = array([
//            $activityItem => 'Pontoon 1'
//        ]);
//
//        return $rentalType;
//    }





}
