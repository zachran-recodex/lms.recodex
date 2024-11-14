<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Add this line
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // Log the incoming request data
        Log::info('Profile update request data:', $request->all());

        // Explicitly assign values from the request
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->address = $request->input('address');
        $user->country = $request->input('country');
        $user->state = $request->input('state');
        $user->city = $request->input('city');
        $user->zip_code = $request->input('zip_code');
        $user->office_phone_number = $request->input('office_phone_number');
        $user->organization = $request->input('organization');

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            $user->profile_picture = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        // Check if email is dirty (updated)
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Save the user model
        $user->save();

        // Log the saved user data
        Log::info('User updated:', $user->toArray());

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
}
