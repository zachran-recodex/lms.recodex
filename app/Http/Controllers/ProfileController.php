<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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

        // Explicitly assign values from the request
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->address = $request->input('address');
        $user->country = $request->input('country');
        $user->state = $request->input('state');
        $user->city = $request->input('city');
        $user->zip_code = $request->input('zip_code');
        $user->office_phone = $request->input('office_phone');
        $user->organization = $request->input('organization');

        // Handle profile picture upload
        if ($request->has('cropped_image')) {

            // Decode the base64 image
            $imageData = $request->input('cropped_image');
            $decodedImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData));

            // Generate a unique filename
            $filename = 'users/' . uniqid() . '.png';

            // Save the cropped image to public storage
            file_put_contents(public_path('storage/' . $filename), $decodedImage);

            // Remove old profile picture if exists
            if ($user->profile_picture && file_exists(public_path('storage/' . $user->profile_picture))) {
                unlink(public_path('storage/' . $user->profile_picture));
            }

            // Update the profile picture path
            $user->profile_picture = $filename;
        } elseif ($request->hasFile('profile_picture')) {

            $profile_picture = $request->file('profile_picture');
            $filename = 'users/' . time() . '.' . $profile_picture->getClientOriginalExtension();
            $profile_picture->move(public_path('storage/users'), $filename);

            // Remove old profile picture if exists
            if ($user->profile_picture && file_exists(public_path('storage/' . $user->profile_picture))) {
                unlink(public_path('storage/' . $user->profile_picture));
            }

            $user->profile_picture = $filename;
        }

        // Check if email is dirty (updated)
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Save the user model
        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
}
