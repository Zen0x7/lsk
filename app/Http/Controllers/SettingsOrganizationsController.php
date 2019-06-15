<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;

class SettingsOrganizationsController extends Controller
{
    public function index()
    {
        return view('settings.organizations.index');
    }
}
