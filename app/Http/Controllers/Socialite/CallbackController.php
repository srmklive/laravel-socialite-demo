<?php

namespace App\Http\Controllers\Socialite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CallbackController extends Controller
{
    public function index($provider, Request $request)
    {
        $user = \Socialite::driver($provider)->user();

        return response()->json([
            'user'      => $user,
            'params'    => $request->all()
        ]);
    }
}
