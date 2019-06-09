<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsSessionsController extends Controller
{
    public function index()
    {
        return view('settings.sessions.index');
    }
}
