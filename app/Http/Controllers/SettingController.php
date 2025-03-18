<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::first(); // Assuming you only have one row of settings
        // Assuming $setting is an instance of the Setting model
$socialMedia = json_decode($settings->social_media, true); // Decode the first time

// Check if the decoding failed, i.e., if it's still a string
if (is_string($socialMedia)) {
    $socialMedia = json_decode($socialMedia, true); // Decode again if it's a string
}
        return view('admins.settings.index', compact('settings', 'socialMedia'));
    }

    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('admins.settings.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'company_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string',
            'phone_number' => 'nullable|string|max:255',
            'website' => 'nullable|url',
            'social_media' => 'nullable|json',
        ]);

        // Find the setting by ID and update
        $setting = Setting::findOrFail($id);
        $setting->update([
            'company_name' => $request->company_name,
            'logo' => $request->logo, // Handle logo upload if required
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'website' => $request->website,
            'social_media' => $request->social_media ? json_encode($request->social_media) : null, // Handle JSON encoding
        ]);

        // Redirect back with success message
        return redirect()->route('settings.index')->with('success', 'Settings updated successfully!');
    }
}
