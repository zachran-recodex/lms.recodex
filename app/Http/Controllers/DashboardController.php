<?php

namespace App\Http\Controllers;

use App\Models\Module;

class DashboardController extends Controller
{
    public function index()
    {
        return view ('dashboard');
    }

    public function module()
    {
        $modules = Module::orderBy('id')->paginate(12);

        return view ('module', compact('modules'));
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
