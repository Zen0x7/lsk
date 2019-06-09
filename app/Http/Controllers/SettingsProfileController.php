<?php

namespace App\Http\Controllers;

use App\Http\Requests\Settings\Profile\UpdateProfileRequest;

class SettingsProfileController extends Controller
{
    public function index()
    {
        return view('settings.profile.index');
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $request->user()->update([
            'name' => $request->name,
        ]);
        return redirect()->route('settings.profile');
    }
}
