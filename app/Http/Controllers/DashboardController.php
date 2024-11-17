<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view ('dashboard');
    }

    public function module(Request $request)
    {
        $modules = Module::orderBy('id');

        // Check if there is a search query
        if ($request->has('search') && $request->search != '') {
            $modules = $modules->search($request->search);
        }

        $modules = $modules->paginate(12);

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
