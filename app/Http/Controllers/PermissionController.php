<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PermissionController extends Controller
{
    //


    public function index() {
        return view('admin.roles.permissions', [
            'applications' => Application::where('id', '=', '1')->get(),
            'permissions' => Permission::all()
        ]);
    }

    public function store() {
        request()->validate([
            'name' => ['required']
        ]);
        Permission::create([
            'name' => Str::ucfirst(request('name')),
            'slug' => Str::of(Str::lower(request('name')))->slug('-'),
        ]);

        return back();
    }

    public function edit(Permission $permission) {
        return view('admin.roles.permissions.edit', [
            'applications' => Application::where('id', '=', '1')->get(),
            'permission' => $permission
        ]);

    }

    public function update(Permission $permission) {
        $permission->name = Str::ucfirst(request('name'));
        $permission->slug = Str::of(request('name'))->slug('-');

        if($permission->isDirty('name')) {
            session()->flash('permission-updated', 'Permission "'. request('name') . '" has been updated');
            $permission->save();
        }
        else {
            session()->flash('permission-updated', 'Nothing has been updated...');
        }

        return back();
    }

    public function delete(Permission $permission) {
        $permission->delete();
        return back();
    }

}
