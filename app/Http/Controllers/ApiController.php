<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        return response()->json(['username' => $username]);
    }
}
