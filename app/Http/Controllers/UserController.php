<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
        {
            $users = User::with('roles')->get();
            return view('users.index', compact('users'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         $roles = Role::pluck('name', 'name')->all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $user = User::findOrFail($id);
    $roles = Role::pluck('name', 'name')->all();

    return view('users.edit', compact('user', 'roles'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    try {
        $user = User::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'roles' => 'required|array',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update password only if filled
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        // Update image
        if ($request->hasFile('image')) {

            // delete old image
            if ($user->image && \Storage::disk('public')->exists($user->image)) {
                \Storage::disk('public')->delete($user->image);
            }

            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('user_image', $fileName, 'public');

            $data['image'] = $fileName;
        }

        // Update user
        $user->update($data);

        // Sync roles
        $user->syncRoles($request->roles);

        return redirect()->route('users.index')
            ->with('success', 'User Updated Successfully');

    } catch (\Exception $e) {
        return back()->withInput()
            ->with('error', 'Failed to update user: ' . $e->getMessage());
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
