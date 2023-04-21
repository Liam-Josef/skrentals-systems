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

class AdminsController extends Controller
{
    //

    public function index() {
        $dateNow =Carbon::now('PST')->addHours(1);
        $today = Carbon::now('PST')->toDateString();
        $vehicles = Vehicle::all();
        $maintenances = Maintenance::all();
        $rentals = Rental::where('coc_status', '!=', 'Completed')->get();
        $users = User::all();
        $vehicleSeaDoo = Vehicle::where('vehicle_type', '=', 'SeaDoo')->get();
        $vehiclePontoon = Vehicle::where('vehicle_type', '=', 'Pontoon')->get();
        $vehicleScarab = Vehicle::where('vehicle_type', '=', 'Scarab')->get();
//        $serviceReq = Maintenance::where('is_active', '=', '1')->where('status', '=', 'Invoice Submitted')->orderBy('updated_at', 'asc')->get();
//        $serviceReqCount = Maintenance::where('is_active', '=', '1')->orderByRaw("FIELD(status , 'Invoice Submitted')")->orderBy('updated_at', 'asc')->get()->count();

        $serviceReqAccept = Maintenance::where('is_active', '=', '0')->where('status', '=', 'Created')->orderBy('updated_at', 'asc')->get();
        $serviceReqAcceptCount = Maintenance::where('is_active', '=', '0')->where('status', '=', 'Created')->orderBy('updated_at', 'asc')->get()->count();
        $serviceReqInvoice = Maintenance::where('is_active', '=', '1')->where('status', '=', 'Invoice Submitted')->orderBy('updated_at', 'asc')->get();
        $serviceReqInvoiceCount = Maintenance::where('is_active', '=', '1')->where('status', '=', 'Invoice Submitted')->orderBy('updated_at', 'asc')->get()->count();
        $serviceReqRejected = Maintenance::where('is_active', '=', '1')->where('status', '=', 'Rejected')->orderby('updated_at', 'asc')->get();
        $serviceReqRejectedCount = Maintenance::where('is_active', '=', '1')->where('status', '=', 'Rejected')->orderby('updated_at', 'asc')->get()->count();

        $serviceReqCocNew = Rental::where('status', '=', 'COC')->where('coc_status', 'New')->orderby('updated_at', 'asc')->get();
        $serviceReqCocNewCount = Rental::where('status', '=', 'COC')->where('coc_status', 'New')->orderby('updated_at', 'asc')->get()->count();
        $serviceReqCocBilling = Rental::where('status', '=', 'COC')->where('coc_status', 'Billing')->orderby('updated_at', 'asc')->get();
        $serviceReqCocBillingCount = Rental::where('status', '=', 'COC')->where('coc_status', 'Billing')->orderby('updated_at', 'asc')->get()->count();

//        $servRentalCount = Rental::where('status', '=', 'COC')->where('status', '!=', 'Service')->where('status', '=', 'Invoice Submitted')->orderByRaw("FIELD(coc_status , 'New', 'Billing')")->get()->count();
//        $serviceReqCoc = Rental::where('status', '=', 'COC')->where('coc_status', '!=', 'Service')->where('status', '=', 'Invoice Submitted')->orderByRaw("FIELD(coc_status , 'New', 'Billing')")->get();
//        $serviceReqCocCount = Rental::where('status', '=', 'COC')->where('coc_status', '!=', 'Service')->where('status', '=', 'Invoice Submitted')->orderByRaw("FIELD(coc_status , 'New', 'Billing')")->get()->count();
        $serviceReqCocServ = Rental::where('status', '=', 'COC')->where('coc_status', '=', 'Service')->orderby('updated_at', 'asc')->get();
        $serviceReqCocServCount = Rental::where('status', '=', 'COC')->where('coc_status', '=', 'Service')->get()->count();
//        $fullCount = $servRentalCount + $serviceReqCocServCount;



        $activeEmp = User::where('is_active', '=', '1')->where('id', '!=', '2')->where('id', '!=', '3')->where('id', '!=', '15')->get()->count();
        $activeCoc = Rental::where('status', '=', 'COC')->where('coc_status', '!=', 'Complete')->get()->count();
        $activeService = Maintenance::where('is_active', '=', '1')->get()->count();
        $activeRentals = Rental::where('activity_date', 'like', '%'.$today.'%')->get()->count();
        return view('admin.index', [
            'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'rentals' => $rentals,
            'vehicleSeaDoo' => $vehicleSeaDoo,
            'vehiclePontoon' => $vehiclePontoon,
            'vehicleScarab' => $vehicleScarab,
            'dateNow' => $dateNow,
            'maintenances' => $maintenances,
            'vehicles' => $vehicles,
            'users' => $users,

//            'serviceReq' => $serviceReq,
//            'serviceReqCount' => $serviceReqCount,
//            'fullCount' => $fullCount,
//            'servRentalCount' => $servRentalCount,
//            'serviceReqCoc' => $serviceReqCoc,
//            'serviceReqCocCount' => $serviceReqCocCount,
            'serviceReqInvoice' => $serviceReqInvoice,
            'serviceReqInvoiceCount' => $serviceReqInvoiceCount,
            'serviceReqAccept' => $serviceReqAccept,
            'serviceReqAcceptCount' => $serviceReqAcceptCount,
            'serviceReqCocNew' => $serviceReqCocNew,
            'serviceReqCocNewCount' => $serviceReqCocNewCount,
            'serviceReqCocServ' => $serviceReqCocServ,
            'serviceReqCocServCount' => $serviceReqCocServCount,
            'serviceReqCocBilling' => $serviceReqCocBilling,
            'serviceReqCocBillingCount' => $serviceReqCocBillingCount,
            'serviceReqRejected' => $serviceReqRejected,
            'serviceReqRejectedCount' => $serviceReqRejectedCount,
            'activeEmp' => $activeEmp,
            'activeCoc' => $activeCoc,
            'activeService' => $activeService,
            'activeRentals' => $activeRentals
        ]);

    }

    public function siteInfo() {
        $websites = Website::where('id', '=', '1')->get();
        return view('admin.dev.site-info', [
            'websites' => $websites
        ]);
    }




}
