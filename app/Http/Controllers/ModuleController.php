<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'is_active' => 'required|boolean',
        ]);

        // Handle image upload with additional check for fileinfo extension
        if ($request->hasFile('image')) {
            // Check if 'fileinfo' extension is available
            if (extension_loaded('fileinfo')) {
                $validated['image'] = $request->file('image')->store('modules', 'public');
            } else {
                // If 'fileinfo' is not loaded, fall back to saving the file without MIME validation
                $validated['image'] = $request->file('image')->storeAs('modules', $request->file('image')->getClientOriginalName(), 'public');
            }
        }

        Module::create($validated);

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
    public function update(Request $request, Module $module)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'is_active' => 'required|boolean',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            if ($module->image && Storage::exists('public/' . $module->image)) {
                Storage::delete('public/' . $module->image);
            }

            // Check if 'fileinfo' extension is available
            if (extension_loaded('fileinfo')) {
                $validated['image'] = $request->file('image')->store('modules', 'public');
            } else {
                // If 'fileinfo' is not loaded, fall back to saving the file without MIME validation
                $validated['image'] = $request->file('image')->storeAs('modules', $request->file('image')->getClientOriginalName(), 'public');
            }
        }

        // Update module data
        $module->update($validated);

        return redirect()->route('admin.modules.index')->with('success', 'Module updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        // Delete image if it exists
        if ($module->image && Storage::exists('public/' . $module->image)) {
            Storage::delete('public/' . $module->image);
        }

        $module->delete();

        return redirect()->route('admin.modules.index')->with('success', 'Module deleted successfully.');
    }
}
