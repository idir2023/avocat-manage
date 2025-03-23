<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    public function User()
    {
        $users = User::paginate(5); // Correction ici
        return view('admins.users.index', compact('users'));
    }
 
    public function StoreUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password
            'is_admin' => true, // Assign is_admin as true
        ]);
    
        return redirect()->route('users.manage')->with('success', 'User created successfully.');
    }
    
    public function UpdateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
         ]);
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('users.manage')
            ->with('success', 'User updated successfully.');
    }
  
    public function deleteUser($id)
{
    

    // Find the user by ID
    $user = User::find($id);

    // If user exists, delete
    if ($user) {
        $user->delete();

        // Redirect back with success message
        return redirect()->route('users.manage')
            ->with('success', 'User deleted successfully.');
    }

    // If user not found, redirect back with error message
    return redirect()->route('users.manage')
        ->with('error', 'User not found.');
}

    

    public function edit(Request $request): View
    {
        return view('admins.profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
