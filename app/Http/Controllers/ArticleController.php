<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $articles = Article::orderBy('id', 'desc');

        // Check if there is a search query
        if ($request->has('search') && $request->search != '') {
            $articles = $articles->search($request->search);
        }

        $articles = $articles->paginate(10);

        return view('dashboard.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleStoreRequest $request)
    {
        $article = new Article();

        // Update fields with request data
        $article->title = $request->title;
        $article->slug = Str::slug($request->title);
        $article->description = $request->description;
        $article->is_active = filter_var($request->is_active, FILTER_VALIDATE_BOOLEAN);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/articles'), $filename);
            $article->image = 'articles/' . $filename;
        }

        $article->save();
        return redirect()->route('dashboard.articles.index')->with('success', 'article created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('dashboard.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleUpdateRequest $request, $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        // Update fields with request data
        $article->title = $request->title;
        $article->slug = Str::slug($request->title);
        $article->description = $request->description;
        $article->is_active = filter_var($request->is_active, FILTER_VALIDATE_BOOLEAN);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($article->image && file_exists(public_path('storage/' . $article->image))) {
                unlink(public_path('storage/' . $article->image));
            }

            // Upload new image
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/articles'), $filename);
            $article->image = 'articles/' . $filename;
        }

        $article->save();

        return redirect()->route('dashboard.articles.index')->with('success', 'article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        // Delete image from storage if exists
        if ($article->image && file_exists(public_path('storage/' . $article->image))) {
            unlink(public_path('storage/' . $article->image));
        }

        $article->delete();

        return redirect()->route('dashboard.articles.index')->with('success', 'article deleted successfully.');
    }
}
