<?php

namespace App\Http\Controllers;
use App\Asso;
use Illuminate\Http\Request;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $assos = Asso::where('user_id', Auth::user()->id)->get();
        return view('home', [
            'assos' => $assos
        ]);
    }
}
