<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Rental;
use App\Models\Role;
use App\Models\User;
use App\Models\Website;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index() {
        $users = User::all();

        return view('admin.users.index', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'users'=>$users,
            'roles'=>Role::all()
        ]);
    }

    public function create() {
        return view('admin.users.create', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
        ]);
    }
// TODO - Update generic profile image
    public function store()
    {
        request()->validate([
            'username' => ['string', 'min:3', 'max:255', 'alpha_dash'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required','string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'unique:users'],
            'password' => ['min:8', 'max:255', 'confirmed'],
            'is_active' => ['required']
        ]);
        User::create([
            'username' => request('username'),
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'phone' => request('phone'),
            'password' => request('password'),
            'is_active' => request('is_active', '1'),
            'avatar' => request('avatar', 'images/ZaFLQgUaXiOfYAVPuNxrNiBnOv0dErdAAwnRXoQX.jpg')
        ]);

        return redirect()->route('users.index');


    }
    public function getPostsCountAttribute(){
        return $this->posts()->count();
    }

    public function show(User $user) {
        $rentals = Rental::all();
        $users = User::all();
        $rentalCheckedIn = Rental::where('check_in_by', '=', $user->id)->get()->count();
        $rentalLaunched = Rental::where('launched_by', '=', $user->id)->get()->count();
        $rentalCleared = Rental::where('cleared_by', '=', $user->id)->get()->count();
        $rentalCoc = Rental::where('launched_by', '=', $user->id)->where('status', '=', 'COC')->get()->count();
        $rentalCocCleared = Rental::where('cleared_by', '=', $user->id)->where('status', '=', 'COC')->get()->count();
        $rentalClearCoc = Rental::where('cleared_by', '=', $user->id)->where('status', '=', 'COC')->get()->count();
        return view('admin.users.profile', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'user'=>$user,
            'users'=>$users,
            'rentals' => $rentals,
            'rentalCheckedIn' => $rentalCheckedIn,
            'rentalLaunched' => $rentalLaunched,
            'rentalCleared' => $rentalCleared,
            'rentalCoc' => $rentalCoc,
            'rentalCocCleared' => $rentalCocCleared,
            'rentalClearCoc' => $rentalClearCoc
        ]);
    }

    public function profile(User $user) {
        $rentals = Rental::all();
        $users = User::all();
        $rentalCheckedIn = Rental::where('check_in_by', '=', $user->id)->get()->count();
        $rentalLaunched = Rental::where('launched_by', '=', $user->id)->get()->count();
        $rentalCleared = Rental::where('cleared_by', '=', $user->id)->get()->count();
        $rentalCoc = Rental::where('launched_by', '=', $user->id)->where('status', '=', 'COC')->get()->count();
        $rentalClearCoc = Rental::where('cleared_by', '=', $user->id)->where('status', '=', 'COC')->get()->count();
        return view('team.profile', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'user'=>$user,
            'users'=>$users,
            'rentals' => $rentals,
            'rentalCheckedIn' => $rentalCheckedIn,
            'rentalLaunched' => $rentalLaunched,
            'rentalCleared' => $rentalCleared,
            'rentalCoc' => $rentalCoc,
            'rentalClearCoc' => $rentalClearCoc
        ]);
    }

    public function profileUpdate(User $user) {
        return view('admin.users.profile-update', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'user'=>$user,
            'roles'=>Role::all()
        ]);
    }

    public function update(User $user) {
        $inputs = request()->validate([
            'username' => ['min:8', 'string', 'max:255', 'alpha_dash'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['min:10', 'max:12', 'alpha_dash'],
            'avatar' => ['file'],
        ]);
        if(request('avatar')) {
            $inputs['avatar'] = request('avatar')->store('images');
        }
        $user->update($inputs);
        return back();
    }

    public function updateUser(User $user) {

        if(request('firstname')) {
            $user->update(['firstname' => request('firstname')]);
        }
        if(request('lastname')) {
            $user->update(['lastname' => request('lastname')]);
        }
        if(request('email')) {
            $user->update(['email' => request('email')]);
        }
        if(request('phone')) {
            $user->update(['phone' => request('phone')]);
        }
        if(request('avatar')) {
            $user->update(['avatar' => request('avatar')->store('images')]);
        }
        return back();

    }

    public function updatePassword(User $user) {
        request()->validate([
            'password' => ['min:8', 'max:255', 'confirmed'],
        ]);
        $user->update(['password' => request('password')]);
        session()->flash('password-updated', 'Password has been updated...');
        return back();
    }

    public function attach(User $user) {
        $user->roles()->attach(request('role'));
        return back();
    }

    public function detach(User $user) {
        $user->roles()->detach(request('role'));
        return back();
    }

    public function disable(User $user) {
        $user->roles()->detach();
        $user->update(['is_active' => '0']);
        $user->update(['password' => '2s@8k*']);
        return back();
    }
    public function enable(User $user) {
        $user->update(['is_active' => '1']);
        $user->update(['password' => 'bombardier']);
        return back();
    }

    public function destroy(User $user) {
        $user->delete();
        session()->flash('user-deleted', 'User has been deleted');

        return back();
    }

    public function damageReports() {
        return view('admin.users.damage-reports');
    }





}
