<?php

namespace App\Http\Controllers;
use App\Asso;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $assos = Asso::orderBy('titre')->get();

        return view('welcome', [
            'assos' => $assos
        ]);
    }
}
