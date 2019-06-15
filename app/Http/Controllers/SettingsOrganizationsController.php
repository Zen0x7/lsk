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

    public function store(Request $request)
    {
        $organization = $request->user()->organizations()->create($request->only([
            'name'
        ]));
        return response($organization, 201);
    }
}
