<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ModuleStoreRequest;
use App\Http\Requests\ModuleUpdateRequest;

class ModuleController extends Controller
{
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

    public function create()
    {
        return view('dashboard.modules.create');
    }

    public function store(ModuleStoreRequest $request)
    {
        $module = new Module();

        // Update fields with request data
        $module->title = $request->title;
        $module->slug = Str::slug($request->title);
        $module->is_active = $request->is_active;

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/modules'), $filename);
            $module->image = 'modules/' . $filename;
        }

        $module->save();
        return redirect()->route('dashboard.modules.index')->with('success', 'Module created successfully.');
    }

    public function edit($slug)
    {
        $module = Module::where('slug', $slug)->firstOrFail();

        return view('dashboard.modules.edit', compact('module'));
    }

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
            if ($module->image && file_exists(public_path('storage/' . $module->image))) {
                unlink(public_path('storage/' . $module->image));
            }

            // Upload new image
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/modules'), $filename);
            $module->image = 'modules/' . $filename;
        }

        $module->save();

        return redirect()->route('dashboard.modules.index')->with('success', 'Module updated successfully.');
    }

    public function destroy($slug)
    {
        $module = Module::where('slug', $slug)->firstOrFail();

        // Delete image from storage if exists
        if ($module->image && file_exists(public_path('storage/' . $module->image))) {
            unlink(public_path('storage/' . $module->image));
        }

        $module->delete();

        return redirect()->route('dashboard.modules.index')->with('success', 'Module deleted successfully.');
    }
}
