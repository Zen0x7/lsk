<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrganizationsController extends Controller
{
    public function index(Request $request)
    {
        return response()->json($request->user()->organizations, 200);
    }

    public function store(Request $request)
    {
        $organization = $request->user()->organizations()->create($request->only([
            'name'
        ]));
        return response()->json($organization, 201);
    }
}
