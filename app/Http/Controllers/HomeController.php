<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getRSVP()
    {
        $user = Auth::user();
        return view('rsvp')->with('user', $user);
    }

    public function postRSVP(Request $request)
    {
        $user = Auth::user();
        $user->rsvp = $request->rsvp;
        $user->arriving = $request->arriving;
        $user->departing = $request->departing;
        $user->partner = $request->partner;
        $user->save();

        return view('rsvp')->with('user', $user);
    }
}
