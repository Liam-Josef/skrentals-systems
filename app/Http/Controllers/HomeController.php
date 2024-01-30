<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Availabil;
use App\Models\Booking;
use App\Models\Bucket;
use App\Models\Duration;
use App\Models\Post;
use App\Models\Price;
use App\Models\Rental;
use App\Models\Type;
use App\Models\Website;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // DELETE TO MAKE HOME PAGE - LOGIN REQUIRED
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
        $posts = Post::latest()->get();
        $applications = Website::where('id', '=', '1')->get();

        return view('home.index', [
            'websites' => Website::where('id', '=', '1')->get(),
            'posts'=>$posts,
            'applications' => $applications
            ]);
    }

    public function book_now() {
        $posts = Post::latest()->get();
        return view('home.book-now', [
            'posts'=>$posts,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function our_rentals() {
        $posts = Post::latest()->get();
        return view('home.our-fleet', [
            'posts'=>$posts,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function about_us() {
        $posts = Post::latest()->get();
        return view('home.about-us', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'posts' => $posts
        ]);
    }

    public function contact() {
        $posts = Post::latest()->get();
        return view('home.contact', [
            'posts'=>$posts,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function book_rental(Type $type) {
        $posts = Post::latest()->get();
        $buffer = Type::where('id' , '=', $type)->value('booking_buffer_hr');
        $quantity = Type::where('id' , '=', $type)->value('quantity');
        $hdQty = 2 * pow($quantity, 1);
        $fdQty = pow($quantity, 1);
        $buckets =  Bucket::where('type_id', '=', $type)->get();
        $durations = Duration::all();
        $bucketHD = Bucket::where('type_id', '=', $type)->where('duration_name', '=', 'half-day')->get();
        $bucketFD = Bucket::where('type_id', '=', $type)->where('duration_name', '=', 'full-day')->get();
        return view('home.book-rental', [
            'type'=>$type,
            'posts'=>$posts,
            'durations'=>$durations,
            'buffer'=>$buffer,
            'quantity'=>$quantity,
//            'seadooHr'=>$seadooHr,
            'hdQty'=>$hdQty,
            'fdQty'=>$fdQty,
            'buckets'=>$buckets,
            'bucketHD'=>$bucketHD,
            'bucketFD'=>$bucketFD,
            'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get()
        ]);
    }

    public function book_rental_duration(Bucket $bucket) {
        $posts = Post::latest()->get();
        $type = Type::where('id', '=', $bucket->type_id)->get();
        $buffer = Type::where('id' , '=', $bucket->type_id)->value('booking_buffer_hr');

        $quantity = Type::where('id' , '=', $bucket->type_id)->value('quantity');
        $hrQty = 8 * pow($quantity, 1);
        $hdQty = 2 * pow($quantity, 1);
        $fdQty = pow($quantity, 1);
        $durations = Duration::all();
        $availabils  = Availabil::all();
        $currentBucketHR = Bucket::where('rental_date', '=', $bucket->rental_date)->where('duration_name', '=', 'hourly')->where('duration_id', '!=', '0')->get()->count();
        $currentBucketHD = Bucket::where('rental_date', '=', $bucket->rental_date)->where('duration_name', '=', 'half-day')->where('duration_id', '!=', '0')->get()->count();
        $amCurrentBucketHD = Bucket::where('rental_date', '=', $bucket->rental_date)->where('duration_name', '=', 'half-day')->where('duration_id', '!=', '0')->where('rental_time', '<=', '14:00:00')->get()->count();
        $pmCurrentBucketHD = Bucket::where('rental_date', '=', $bucket->rental_date)->where('duration_name', '=', 'half-day')->where('duration_id', '!=', '0')->where('rental_time', '>=', '14:00:00')->get()->count();
        $currentBucketFD = Bucket::where('rental_date', '=', $bucket->rental_date)->where('duration_name', '=', 'full-day')->where('duration_id', '!=', '0')->get()->count();
        $availableBucketHR =   pow($hrQty, 1) - pow($currentBucketHR, 1);
        $availableBucketHD =   pow($hdQty, 1) - pow($currentBucketHD, 1);
        $availableBucketFD =   pow($fdQty, 1) - pow($currentBucketFD, 1);

        $day = 8;
        $hr = Duration::where('slug', '=', 'hourly')->value('hour');
        $fd = Duration::where('slug', '=', 'full-day')->value('hour');
        $hd = Duration::where('slug', '=', 'half-day')->value('hour');
        $availableDay = $day * $quantity;
        $usedHR = $currentBucketHR * $hr;
        $usedHD = $currentBucketHD * $hd;
        $amUsedHD = $amCurrentBucketHD * $hd;
        $pmUsedHD = $pmCurrentBucketHD * $hd;
        $usedFD = $currentBucketFD * $fd;

        $usedSlots = $usedHD + $usedFD + $usedHR;
        $amUsedSlots = $amUsedHD + $usedFD + $usedHR;
        $pmUsedSlots = $pmUsedHD + $usedFD + $usedHR;

        $availableSlots = $availableDay - $usedSlots;
        $amAvailableSlots = $availableDay - $amUsedSlots;
        $pmAvailableSlots = $availableDay - $pmUsedSlots;

        $availableHR = $availableSlots / $hr;
        $availableHD = floor($availableSlots / $hd);
        $amAvailableHD = floor($amAvailableSlots / $hd);
        $pmAvailableHD = floor($pmAvailableSlots / $hd);
        $availableFD = floor($availableSlots / $fd);
        $amBucketHD = $hdQty / 2;
        $pmBucketHD = $hdQty / 2;



        $amAvailHDivide = $amUsedHD / 4;
        $pmAvailHDivide = $pmUsedHD / 4;
        $amAvailHD = $amBucketHD - $amAvailHDivide;
        $pmAvailHD = $pmBucketHD - $pmAvailHDivide;

         return view('home.book-rental-2', [
            'type'=>$type,
            'bucket'=>$bucket,
            'posts'=>$posts,
            'durations'=>$durations,
            'buffer'=>$buffer,
            'quantity'=>$quantity,
            'availabils'=>$availabils,
            'hrQty'=>$hrQty,
            'hdQty'=>$hdQty,
            'fdQty'=>$fdQty,
            'currentBucketHR'=>$currentBucketHR,
            'currentBucketHD'=>$currentBucketHD,
            'currentBucketFD'=>$currentBucketFD,
            'availableBucketHR'=>$availableBucketHR,
            'availableBucketHD'=>$availableBucketHD,
            'availableBucketFD'=>$availableBucketFD,
            'availableSlots'=>$availableSlots,
            'availableHR'=>$availableHR,
            'availableHD'=>$availableHD,
            'availableFD'=>$availableFD,
            'amAvailableHD'=>$amAvailableHD,
            'pmAvailableHD'=>$pmAvailableHD,
            'amAvailHD'=>$amAvailHD,
            'pmAvailHD'=>$pmAvailHD,
            'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get()
        ]);
    }

    public function book_rental_time(Bucket $bucket) {
        $posts = Post::latest()->get();
        $type = Type::where('id', '=', $bucket->type_id)->get();
        $buffer = Type::where('id' , '=', $bucket->type_id)->value('booking_buffer_hr');
        $quantity = Type::where('id' , '=', $bucket->type_id)->value('quantity');
        $hrQty = 8 * pow($quantity, 1);
        $hdQty = 2 * pow($quantity, 1);
        $fdQty = pow($quantity, 1);
        $durations = Duration::where('id', '=', $bucket->duration_id)->get();
        $fullDurations = Duration::where('id', '=', $bucket->duration_id)->get();
        $availabils  = Availabil::all();


        $rentalBucket = Bucket::where('reserved', '=', '1')->where('rental_date', '=', $bucket->rental_date)->where('type_id', '=', $bucket->type_id)->get();


            $rentalBucket = Bucket::where('reserved', '=', '1')->where('rental_date', '=', $bucket->rental_date)->where('type_id', '=', $bucket->type_id)->get();
//            foreach ($rentalBucket as $booking) {
//                $reqTimeStart = '11.00';
//                $reqTimeEnd = '15.00';
//                $startTime = Carbon::parse($booking->activity_date_start)->format('h.i');
//                $endTime = Carbon::parse($booking->activity_date_end)->format('h.i');
//
//                if ($reqTimeStart > $startTime) {
//                    echo $quantity - 1;
//                } else {
//                    echo "False";
//                };
//
//                echo "&nbsp;";
//                if ($reqTimeEnd <= $endTime) {
//
//                    echo "False";
//                } else {
//                    echo $quantity + 1;
//                };
//
//
//                echo "<br><br>";
//            }


        $bookings = [];
        $bucketBooking = Bucket::where('reserved', '=', '1')->get();
        foreach ($bucketBooking as $buckets) {
            $bookings[] = [
//                'title' => $bucket->duration->name . ' ('.$bucket->type->name.')',
                'name' => $buckets->duration_name,
                'start' => $buckets->activity_date_start,
                'end' => $buckets->activity_date_end,
            ];
        }






        $fdRentalBucket = Bucket::where('reserved', '=', '1')->where('rental_date', '=', $bucket->rental_date)->where('type_id', '=', $bucket->type_id)->where('duration_id', '=', $bucket->duration_id)->get()->count();
        $amRentalBucket = Bucket::where('reserved', '=', '1')->where('rental_date', '=', $bucket->rental_date)->where('type_id', '=', $bucket->type_id)->where('duration_id', '=', $bucket->duration_id)->where('rental_time', '<=', '13:59:00')->get()->count();
        $pmRentalBucket = Bucket::where('reserved', '=', '1')->where('rental_date', '=', $bucket->rental_date)->where('type_id', '=', $bucket->type_id)->where('duration_id', '=', $bucket->duration_id)->where('rental_time', '>=', '14:00:00')->get()->count();


        $availMinIncrem  = Availabil::value('start_min_increm');
        $availStartTime  = Availabil::value('start_time');
        $availEndTime  = Availabil::value('end_time');
        $availTime = Carbon::parse($availStartTime)->format('h:i:s');
        $availStartP = Carbon::parse($availStartTime)->format('h:i:s');
        $availEndP = Carbon::parse($availEndTime)->format('h:i:s');
        $availStartIncrem = Carbon::parse($availEndP)->diffInMinutes($availStartP);;
        $diffMinDiv = $availStartIncrem / $availMinIncrem + 1;



//        $availabil  = Availabil::with('durations')->find($duration)->value('id');
//        $usedBucketHR = function($bucket) {
//            foreach ($bucket->durations as $duration) {
//                echo $duration->id;
//            }
//        };

//        $bucketDurations = $durations->buckets->container($bucket)->get();



        $currentBucketHR = Bucket::where('rental_date', '=', $bucket->rental_date)->where('duration_name', '=', 'hourly')->where('duration_id', '!=', '0')->where('reserved', '=', '0')->get()->count();
        $currentBucketHD = Bucket::where('rental_date', '=', $bucket->rental_date)->where('duration_name', '=', 'half-day')->where('duration_id', '!=', '0')->where('reserved', '=', '0')->get()->count();
        $amCurrentBucketHD = Bucket::where('rental_date', '=', $bucket->rental_date)->where('duration_name', '=', 'half-day')->where('duration_id', '!=', '0')->where('reserved', '=', '0')->where('rental_time', '<=', '14:00:00')->get()->count();
        $pmCurrentBucketHD = Bucket::where('rental_date', '=', $bucket->rental_date)->where('duration_name', '=', 'half-day')->where('duration_id', '!=', '0')->where('reserved', '=', '0')->where('rental_time', '>=', '14:00:00')->get()->count();
        $currentBucketFD = Bucket::where('rental_date', '=', $bucket->rental_date)->where('duration_name', '=', 'full-day')->where('duration_id', '!=', '0')->where('reserved', '=', '0')->get()->count();
        $availableBucketHR =   pow($hrQty, 1) - pow($currentBucketHR, 1);
        $availableBucketHD =   pow($hdQty, 1) - pow($currentBucketHD, 1);
        $availableBucketFD =   pow($fdQty, 1) - pow($currentBucketFD, 1);

        $day = 8;
        $hr = Duration::where('slug', '=', 'hourly')->value('hour');
        $fd = Duration::where('slug', '=', 'full-day')->value('hour');
        $hd = Duration::where('slug', '=', 'half-day')->value('hour');
        $availableDay = $day * $quantity;
        $usedHR = $currentBucketHR * $hr;
        $usedHD = $currentBucketHD * $hd;
        $amUsedHD = $amCurrentBucketHD * $hd;
        $pmUsedHD = $pmCurrentBucketHD * $hd;
        $usedFD = $currentBucketFD * $fd;

        $usedSlots = $usedHD + $usedFD + $usedHR;
        $amUsedSlots = $amUsedHD + $usedFD + $usedHR;
        $pmUsedSlots = $pmUsedHD + $usedFD + $usedHR;

        $availableSlots = $availableDay - $usedSlots;
        $amAvailableSlots = $availableDay - $amUsedSlots;
        $pmAvailableSlots = $availableDay - $pmUsedSlots;

        $availableHR = $availableSlots / $hr;
        $availableHD = floor($availableSlots / $hd);
        $amAvailableHD = floor($amAvailableSlots / $hd);
        $pmAvailableHD = floor($pmAvailableSlots / $hd);
        $availableFD = floor($availableSlots / $fd);
        $amBucketHD = $hdQty / 2;
        $pmBucketHD = $hdQty / 2;



        $amAvailHDivide = $amUsedHD / 4;
        $pmAvailHDivide = $pmUsedHD / 4;
        $amAvailHD = $amBucketHD - $amAvailHDivide;
        $pmAvailHD = $pmBucketHD - $pmAvailHDivide;

         return view('home.book-rental-3', [
            'type'=>$type,
            'bucket'=>$bucket,
            'posts'=>$posts,
            'durations'=>$durations,
            'fullDurations'=>$fullDurations,
            'buffer'=>$buffer,
            'quantity'=>$quantity,
            'availabils'=>$availabils,
            'bookings'=>$bookings,

            'rentalBucket'=>$rentalBucket,
//            'newQ'=>$newQ,

            'availMinIncrem'=>$availMinIncrem,
            'availStartTime' => $availStartTime,
            'availEndTime' => $availEndTime,
            'availStartP' => $availStartP,
            'availEndP' => $availEndP,
            'availTime' => $availTime,
            'availStartIncrem' => $availStartIncrem,
            'diffMinDiv' => $diffMinDiv,


            'hrQty'=>$hrQty,
            'hdQty'=>$hdQty,
            'fdQty'=>$fdQty,
            'currentBucketHR'=>$currentBucketHR,
            'currentBucketHD'=>$currentBucketHD,
            'currentBucketFD'=>$currentBucketFD,
            'availableBucketHR'=>$availableBucketHR,
            'availableBucketHD'=>$availableBucketHD,
            'availableBucketFD'=>$availableBucketFD,
            'availableSlots'=>$availableSlots,
            'availableHR'=>$availableHR,
            'availableHD'=>$availableHD,
            'availableFD'=>$availableFD,
            'amAvailableHD'=>$amAvailableHD,
            'pmAvailableHD'=>$pmAvailableHD,
            'amAvailHD'=>$amAvailHD,
            'pmAvailHD'=>$pmAvailHD,
            'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get()
        ]);
    }


    public function privacy_policy(Bucket $bucket) {
        $posts = Post::latest()->get();

        return view('home.privacy-policy', [
            'posts'=>$posts,
            'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get()
        ]);
    }


    public function merchant_agreement() {
        $posts = Post::latest()->get();

        return view('home.merchant-agreement', [
            'posts'=>$posts,
            'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get()
        ]);
    }


    public function book_rental_info(Bucket $bucket) {
        $posts = Post::latest()->get();
        $type = Type::where('id', '=', $bucket->type_id)->get();
        $durations = Duration::where('id', '=', $bucket->duration_id)->get();
        $availabils  = Availabil::all();
        $prices  = Price::all();

        return view('home.book-rental-4', [
            'type'=>$type,
            'bucket'=>$bucket,
            'posts'=>$posts,
            'prices'=>$prices,
            'durations'=>$durations,
            'availabils'=>$availabils,
            'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get()
        ]);
    }


    public function book_rental_customer_info(Bucket $bucket) {
        $posts = Post::latest()->get();
        $type = Type::where('id', '=', $bucket->type_id)->get();
        $durations = Duration::where('id', '=', $bucket->duration_id)->get();
        $availabils  = Availabil::all();
        $prices  = Price::all();

        return view('home.book-rental-5', [
            'type'=>$type,
            'bucket'=>$bucket,
            'posts'=>$posts,
            'prices'=>$prices,
            'durations'=>$durations,
            'availabils'=>$availabils,
            'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get()
        ]);
    }


    public function book_confirmation(Bucket $bucket) {
        $posts = Post::latest()->get();
        $types = Type::where('id', '=', $bucket->type_id)->get();
        $durations = Duration::where('id', '=', $bucket->duration_id)->get();
        $availabils  = Availabil::all();
        $prices  = Price::all();
        $bookings = Booking::where('bucket_id', '=', $bucket->id)->get();

        return view('home.book-rental-6', [
            'types'=>$types,
            'bucket'=>$bucket,
            'posts'=>$posts,
            'prices'=>$prices,
            'durations'=>$durations,
            'availabils'=>$availabils,
            'bookings'=>$bookings,
            'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get()
        ]);
    }

    public function seadoo() {
        $posts = Post::latest()->get();
        $type = Type::where('id', '=', '1')->get();
        $seadooBuffer = Type::where('id', '=', '1')->value('booking_buffer_hr');
        $seadooQty = Type::where('id', '=', '1')->value('quantity');
        $seadooHD = 2 * pow($seadooQty, 1);
        $seadooFD = pow($seadooQty, 1);
        $buckets =  Bucket::where('type_id', '=', '1')->get();
        $durations = Duration::all();
        $bucketHD = Bucket::where('type_id', '=', '1')->where('duration_name', '=', 'half-day')->get();
        $bucketFD = Bucket::where('type_id', '=', '1')->where('duration_name', '=', 'full-day')->get();
        return view('home.seadoo', [
            'posts'=>$posts,
            'durations'=>$durations,
            'type'=>$type,
            'seadoBuffer'=>$seadooBuffer,
//            'seadooHr'=>$seadooHr,
            'seadooHD'=>$seadooHD,
            'seadooFD'=>$seadooFD,
            'buckets'=>$buckets,
            'bucketHD'=>$bucketHD,
            'bucketFD'=>$bucketFD,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function boat() {
        $posts = Post::latest()->get();
        $scarab = Type::where('id', '=', '3')->get();
        $pontoon = Type::where('id', '=', '2')->get();
        $durations = Duration::all();

        return view('home.boat', [
            'posts'=>$posts,
            'scarab'=>$scarab,
            'pontoon'=>$pontoon,
            'durations'=>$durations,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function segway() {
        $posts = Post::latest()->get();
        $segway = Type::where('id', '=', '4')->get();
        return view('home.segway', [
           'posts'=>$posts,
           'segway'=>$segway,
           'applications' => Website::where('id', '=', '1')->get(),
           'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function spyder() {
        $posts = Post::latest()->get();
        $spyder = Type::where('id', '=', '5')->get();
        return view('home.spyder', [
            'posts'=>$posts,
            'spyder'=>$spyder,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function snowmobile() {
        $posts = Post::latest()->get();
        $summit = Type::where('id', '=', '6')->get();
        $renegade = Type::where('id', '=', '7')->get();
        return view('home.snowmobile', [
            'posts'=>$posts,
            'summit'=>$summit,
            'renegade'=>$renegade,
            'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function kayak() {
        $posts = Post::latest()->get();
        $single_kayak = Type::where('id', '=', '8')->get();
        $double_kayak = Type::where('id', '=', '9')->get();
        $paddleboard = Type::where('id', '=', '10')->get();
        return view('home.kayak', [
            'posts'=>$posts,
            'single_kayak'=>$single_kayak,
            'double_kayak'=>$double_kayak,
            'paddleboard'=>$paddleboard,
            'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function maps() {
        $posts = Post::latest()->get();
        return view('home.map', [
            'posts'=>$posts,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function gallery() {
        $posts = Post::latest()->get();
        return view('home.gallery', [
            'posts'=>$posts,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function testimonials() {
        $posts = Post::latest()->get();
        return view('home.testimonials', [
            'posts'=>$posts,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function know() {
        $posts = Post::latest()->get();
        return view('home.know', [
            'posts'=>$posts,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function survey() {
        $posts = Post::latest()->get();
        return view('home.survey', [
            'posts'=>$posts,
            'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }


}
