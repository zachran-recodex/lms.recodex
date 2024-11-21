<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $clients = User::role('client')->orderBy('id', 'desc');

        // Filter pencarian
        if ($request->has('search') && $request->search != '') {
            $clients = $clients->search($request->search);
        }

        // Pagination
        $clients = $clients->paginate(10);

        return view('dashboard.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientStoreRequest $request)
    {
        $client = new User(); // use User model

        $client->username = $request->username;
        $client->first_name = ucwords(strtolower($request->first_name)); // Capitalize first letter
        $client->last_name = ucwords(strtolower($request->last_name));   // Capitalize first letter
        $client->email = $request->email;
        $client->password = Hash::make($request->password);
        $client->phone_number = $request->phone_number;

        $client->save();

        // Assign role client
        $client->assignRole('client');

        return redirect()->route('dashboard.clients.index')->with('success', 'Client created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($username)
    {
        $client = User::where('username', $username)->firstOrFail(); // use User model

        return view('dashboard.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientUpdateRequest $request, $username)
    {
        $client = User::where('username', $username)->firstOrFail(); // use User model

        $client->username = $request->username;
        $client->first_name = ucwords(strtolower($request->first_name)); // Capitalize first letter
        $client->last_name = ucwords(strtolower($request->last_name));   // Capitalize first letter
        $client->email = $request->email;

        if ($request->password) {
            $client->password = Hash::make($request->password);
        }

        $client->phone_number = $request->phone_number;

        $client->save();

        return redirect()->route('dashboard.clients.index')->with('success', 'Client updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($username)
    {
        $client = User::where('username', $username)->firstOrFail(); // use User model

        // Optionally remove the 'client' role
        $client->removeRole('client');

        $client->delete();

        return redirect()->route('dashboard.clients.index')->with('success', 'Client deleted successfully.');
    }
}
