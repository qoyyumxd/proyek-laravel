<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PageController extends Controller
{
    public function home()
    {
    return view('home');
    }

    public function showLoginForm()
    {
        return view('login');
    }
}