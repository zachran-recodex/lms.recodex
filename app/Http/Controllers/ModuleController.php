<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ModuleStoreRequest;
use App\Http\Requests\ModuleUpdateRequest;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $modules = Module::orderBy('id');

        // Check if there is a search query
        if ($request->has('search') && $request->search != '') {
            $modules = $modules->search($request->search);
        }

        $modules = $modules->paginate(10);

        return view('dashboard.modules.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.modules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModuleStoreRequest $request)
    {
        $module = new Module();

        // Update fields with request data
        $module->title = $request->title;
        $module->slug = Str::slug($request->title);
        $module->is_active = $request->is_active;

        // Handle image upload
        if ($request->hasFile('image')) {
            $module->image = $request->file('image')->store('modules', 'public');
        }

        $module->save();

        return redirect()->route('dashboard.modules.index')->with('success', 'Module created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $module = Module::where('slug', $slug)->firstOrFail();

        return view('dashboard.modules.edit', compact('module'));
    }

/**
     * Update the specified resource in storage.
     */
    public function update(ModuleUpdateRequest $request, $slug)
    {
        $module = Module::where('slug', $slug)->firstOrFail();

        // Update fields with request data
        $module->title = $request->title;
        $module->slug = Str::slug($request->title);
        $module->is_active = $request->is_active;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($module->image) {
                Storage::disk('public')->delete($module->image);
            }
            $module->image = $request->file('image')->store('modules', 'public');
        }

        $module->save();

        return redirect()->route('dashboard.modules.index')->with('success', 'Module updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $module = Module::where('slug', $slug)->firstOrFail();

        // Delete images from storage if they exist
        if ($module->image) {
            Storage::disk('public')->delete($module->image);
        }

        $module->delete();

        return redirect()->route('dashboard.modules.index')->with('success', 'Module deleted successfully.');
    }
}
