<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsOrganizationsController extends Controller
{
    public function index()
    {
        return view('settings.organizations.index');
    }
}
