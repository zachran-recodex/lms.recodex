<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view ('dashboard');
    }

    public function module()
    {
        return view ('module');
    }

    public function moduleDetail()
    {
        return view ('module-detail');
    }

    public function progress()
    {
        return view ('progress');
    }

    public function notification()
    {
        return view ('notification');
    }

    public function support()
    {
        return view ('support');
    }

    public function setting()
    {
        return view ('setting');
    }
}
