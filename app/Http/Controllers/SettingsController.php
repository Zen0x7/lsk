<?php

namespace App\Http\Controllers;

use App\Http\Requests\Settings\UpdateProfileRequest;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $request->user()->update([
            'name' => $request->name,
        ]);
        return redirect()->route('settings');
    }
}
