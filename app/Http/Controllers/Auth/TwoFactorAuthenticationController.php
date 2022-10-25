<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TwoFactorAuthenticationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('auth.two-factor-auth', compact('user'));
    }
}
