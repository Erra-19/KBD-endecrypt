<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomeBackend()
    {
        return view('backend.v_home.index', [
            'brand' => 'Home',
        ]);
    }
}
