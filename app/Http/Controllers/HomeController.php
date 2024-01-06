<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Post;
use App\Models\Rental;
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

    public function seadoo() {
        $posts = Post::latest()->get();
        return view('home.seadoo', [
            'posts'=>$posts,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function boat() {
        $posts = Post::latest()->get();
        return view('home.boat', [
            'posts'=>$posts,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function segway() {
        $posts = Post::latest()->get();
        return view('home.segway', [
            'posts'=>$posts,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function spyder() {
        $posts = Post::latest()->get();
        return view('home.spyder', [
            'posts'=>$posts,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function snowmobile() {
        $posts = Post::latest()->get();
        return view('home.snowmobile', [
            'posts'=>$posts,
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }

    public function kayak() {
        $posts = Post::latest()->get();
        return view('home.kayak', [
            'posts'=>$posts,
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
