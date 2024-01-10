<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    //

    public function index() {
        return view('admin.roles.index', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'roles' => Role::all()
        ]);
    }

    public function permission() {
        return view('admin.roles.permissions', [
           'applications' => Website::where('id', '=', '1')->get(),
            'websites' => Website::where('id', '=', '1')->get(),
            'permissions' => Permission::all()
        ]);
    }

    public function store()
    {
        request()->validate([
            'name' => ['required']
        ]);
        Role::create([
            'name' => Str::ucfirst(request('name')),
            'slug' => Str::of(Str::lower(request('name')))->slug('-'),
        ]);

        return back();

    }

    public function edit(Role $role) {
        return view('admin.roles.edit', [
            'role' => $role,
            'permissions' => Permission::all()
        ]);
    }

    public function update(Role $role) {
        $role->name = Str::ucfirst(request('name'));
        $role->slug = Str::of(request('name'))->slug('-');

        if($role->isDirty('name')) {
            session()->flash('role-updated', 'Role "'. request('name') . '" has been updated');
            $role->save();
        }
        else {
            session()->flash('role-updated', 'Nothing has been updated...');
        }

        return back();
    }

    public function attach_permission(Role $role) {
        $role->permissions()->attach(request('permission'));
        return back();
    }
    public function detach_permission(Role $role) {
        $role->permissions()->detach(request('permission'));
        return back();
    }
//    public function permission_store() {
//        request()->validate([
//            'name' => ['required']
//        ]);
//        Permission::create([
//            'name' => Str::ucfirst(request('name')),
//            'slug' => Str::of(Str::lower(request('name')))->slug('-'),
//        ]);
//
//        return back();
//    }
//    public function permission_edit(Permission $permission) {
//        return view('admin.roles.permissions.edit', ['permission' => $permission]);
//    }

    public function delete(Role $role) {
        $role->delete();

        session()->flash('role-deleted', 'Deleted Role '. $role->name);

        return back();
    }



}
