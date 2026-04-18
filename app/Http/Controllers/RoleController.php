<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::with('permissions')->get();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $permission = Permission::all();
        return view('roles.create', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'nullable|array',
        ]);
        $role = Role::create(['name' => $request->input('name')]);
        $permissionId = $request->input('permission')
            ? array_map(fn($value) => (int)$value, $request->input('permission'))
            : [];
        $role->syncPermissions($permissionId);
        // Gate:befo
        return redirect()->route('roles.index')
            ->with('success', "Role Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }
    public function edit($id)
    {
        $role = Role::findOrFail($id);


        $permission = Permission::all();
        return view('roles.edit', compact('role', 'permission'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'nullable|array',
        ]);

        $role = Role::findOrFail($id);
        $role->name = $request->input('name');
        $role->save();

        $permissionsId = $request->input('permission')
            ? array_map(fn($value) => (int)$value, $request->input('permission'))
            : [];

        $role->syncPermissions($permissionsId);

        return redirect()->route('roles.index')
            ->with('success', 'Role updated successfully');
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('Success', "Deleted Successfully");
    }
}
