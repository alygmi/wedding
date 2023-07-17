<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard/dashboard');
    }

    public function show(): View{
        return view('dashboard/dashboard2');
    }
}
