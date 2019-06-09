<?php

namespace App\Http\Controllers;

use App\Http\Requests\Settings\UpdateProfileRequest;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }
}
