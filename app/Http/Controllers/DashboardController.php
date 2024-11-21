<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $articles = Article::where('is_active', true) // Hanya modul aktif
        ->orderBy('id', 'desc') // Urutkan berdasarkan ID
        ->paginate(5); // Batasi 5 item per halaman

        return view ('dashboard', compact('articles'));
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

    public function moduleDetail($slug)
    {
        $module = Module::where('slug', $slug)->firstOrFail();
        $modules = Module::orderBy('id')->paginate(5);

        // Kirim data modul ke view
        return view('module-detail', compact('module', 'modules'));
    }

    public function articleDetail($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $articles = Article::orderBy('id')->paginate(5);

        // Kirim data modul ke view
        return view('article-detail', compact('article', 'articles'));
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
