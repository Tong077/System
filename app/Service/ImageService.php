<?php

namespace App\Http\Service;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class Image extends Controller
{
    protected ImageService $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

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
        $roles = Role::pluck('name', 'name')->all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|max:50',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|string|min:8|confirmed',
                'roles' => 'required|array',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Hash password
            $data['password'] = Hash::make($data['password']);

            // Upload image using service ✅
            if ($request->hasFile('image')) {
                $data['image'] = $this->imageService->uploadImage(
                    $request->file('image'),
                    'user_image'
                );
            }

            // Create user
            $user = User::create($data);

            // Assign roles
            $user->assignRole($request->roles);

            if ($request->action === 'save_new') {
                return redirect()->route('users.create')
                    ->with('success', 'User Created Successfully');
            }

            return redirect()->route('users.index')
                ->with('success', 'User Created Successfully');

        } catch (\Exception $e) {
            return back()->withInput()
                ->with('error', 'Failed to create user: ' . $e->getMessage());
        }
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

            // Handle password
            if (!empty($data['password'])) {
                $data['password'] = Hash::make($data['password']);
            } else {
                unset($data['password']);
            }

            // Update image using service ✅
            if ($request->hasFile('image')) {
                $data['image'] = $this->imageService->update(
                    $user->image,
                    $request->file('image'),
                    'user_image'
                );
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
    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);

            // Delete image using service ✅
            $this->imageService->delete($user->image);

            // Delete user
            $user->delete();

            return redirect()->route('users.index')
                ->with('success', 'User Deleted Successfully');

        } catch (\Exception $e) {
            return back()->with('error', 'Failed to delete user');
        }
    }
}