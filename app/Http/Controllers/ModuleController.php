<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\StoreModuleRequest;
use App\Http\Requests\UpdateModuleRequest;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $modules = Module::orderBy('id');

        // Cek apakah ada query pencarian
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
    public function store(StoreModuleRequest $request)
    {
        $module = new Module();

        // Update fields with request data
        $module->title = $request->title;
        $module->slug = Str::slug($request->title);
        $module->status = $request->status;

        // Handle image upload
        if ($request->hasFile('image')) {
            $module->image = $request->file('image')->store('modules', 'public');
        }

        $module->save();

        return redirect()->route('admin.modules.index')->with('success', 'Module created successfully.');
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
    public function update(UpdateModuleRequest $request, Module $module)
    {
        // Update fields with request data
        $module->title = $request->title;
        $module->slug = Str::slug($request->title);
        $module->author = $request->author;
        $module->description = $request->description;
        $module->status = $request->status;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($module->image) {
                Storage::disk('public')->delete($module->image);
            }
            $module->image = $request->file('image')->store('modules', 'public');
        }

        $module->save();

        return redirect()->route('admin.modules.index')->with('success', 'Module updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        // Cari modul berdasarkan slug
        $module = Module::where('slug', $slug)->firstOrFail();

        // Delete images from storage if they exist
        if ($module->image) {
            Storage::disk('public')->delete($module->image);
        }

        $module->delete();

        return redirect()->route('admin.modules.index')->with('success', 'Module deleted successfully.');
    }
}
