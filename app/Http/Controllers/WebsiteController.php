<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        //
//    }

    public function update(Website $website) {

        $website->name = request('name');
        $website->email = request('email');
        $website->phone = request('phone');
        $website->country = request('country');
        $website->address_line_1 = request('address_line_1');
        $website->address_line_2 = request('address_line_2');
        $website->city = request('city');
        $website->state = request('state');
        $website->zip = request('zip');
        $website->facebook = request('facebook');
        $website->instagram = request('instagram');
        $website->tiktok = request('tiktok');
        $website->twitter = request('twitter');
        $website->linkedin = request('linkedin');
        $website->google = request('google');
        $website->youtube = request('youtube');
        $website->vimeo = request('vimeo');
        $website->etsy = request('etsy');
        $website->website_url = request('website_url');

        if(request('logo_square_1')) {
            $inputs['logo_square_1'] = request('logo_square_1')->store('app-images');
            $website->logo_square_1 = $inputs['logo_square_1'];
        }
        if(request('logo_square_2')) {
            $inputs['logo_square_2'] = request('logo_square_2')->store('app-images');
            $website->logo_square_2 = $inputs['logo_square_2'];
        }
        if(request('logo_horizontal_1')) {
            $inputs['logo_horizontal_1'] = request('logo_horizontal_1')->store('app-images');
            $website->logo_horizontal_1 = $inputs['logo_horizontal_1'];
        }
        if(request('logo_horizontal_2')) {
            $inputs['logo_horizontal_2'] = request('logo_horizontal_2')->store('app-images');
            $website->logo_horizontal_2 = $inputs['logo_horizontal_2'];
        }
        if(request('favicon')) {
            $inputs['favicon'] = request('favicon')->store('app-images');
            $website->favicon = $inputs['favicon'];
        }

        $website->analytics = request('analytics');
        $website->google_link_1 = request('google_link_1');
        $website->google_link_2 = request('google_link_2');
        $website->google_link_3 = request('google_link_3');
        $website->google_link_4 = request('google_link_4');
        $website->google_link_5 = request('google_link_5');

        $website->save();

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
