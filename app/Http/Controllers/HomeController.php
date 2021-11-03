<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('aboutus');
    }

    public function contact()
    {
        return view('contacto');
    }
}
