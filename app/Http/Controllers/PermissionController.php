<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    // for crud operations
    public function __construct()
    {
       $this->middleware('permission:view permission', ['only' => ['index']]);
       $this->middleware('permission:create permission', ['only' => ['create','store']]);
       $this->middleware('permission:update permission', ['only' => ['update','edit']]);
       $this->middleware('permission:delete permission', ['only' => ['destroy']]);
    }

    //load page
    public function index() {
        $permissions = Permission::get();
        return view('admin.permission.index',[
            'permissions' => $permissions
        ]);
    }

    public function create() {
        return view('admin.permission.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name' //unique in permissions table
            ]
        ]);

        Permission::create([
            'name' => $request->name
        ]);

        return redirect('permissions')->with('status', 'Permission created successfully');
    }

    public function edit(Permission $permission)
    {
        return view('admin.permission.edit', [
            'permission' => $permission
        ]);
    }


    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name,'.$permission->id
            ]
        ]);

        $permission->update([
            'name' => $request->name
        ]);

        return redirect('permissions')->with('status', 'Permission updated successfully');
    }


    public function destroy($permissionId)  {
        $permission = Permission::find($permissionId);
        $permission->delete();
        return redirect('permissions')->with('status', 'Permission deleted successfully');
     }
}
