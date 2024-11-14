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
        $data = $request->validated();
        $data['slug'] = Str::slug($request->title);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('modules', 'public'); // Store in 'storage/app/public/modules'
            $data['image'] = $imagePath; // Store the file path in the database
        }

        Module::create($data);

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
        $data = $request->validated();
        $data['slug'] = Str::slug($request->title);

        // Handle image upload if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($module->image && Storage::exists('public/' . $module->image)) {
                Storage::delete('public/' . $module->image);
            }

            // Store the new image and update the path in the data array
            $imagePath = $request->file('image')->store('modules', 'public');
            $data['image'] = $imagePath;
        }

        $module->update($data);

        return redirect()->route('admin.modules.index')->with('success', 'Module updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        // Cari modul berdasarkan slug
        $module = Module::where('slug', $slug)->firstOrFail();

        // Hapus gambar jika ada
        if ($module->image && Storage::exists('public/' . $module->image)) {
            Storage::delete('public/' . $module->image);
        }

        // Hapus modul
        $module->delete();

        return redirect()->route('admin.modules.index')->with('success', 'Module deleted successfully.');
    }
}
