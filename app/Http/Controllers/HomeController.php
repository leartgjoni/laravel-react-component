<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JavaScript;
use Auth;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        JavaScript::put([
            'name' => Auth::user()->name
        ]);

        return view('home');
    }
}
