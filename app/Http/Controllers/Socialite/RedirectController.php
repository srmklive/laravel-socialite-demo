<?php

namespace App\Http\Controllers\Socialite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RedirectController extends Controller
{
    public function index($provider)
    {
        return \Socialite::driver($provider)->redirect();
    }
}
