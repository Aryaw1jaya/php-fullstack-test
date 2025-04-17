<?php

namespace App\Http\Controllers;

use App\Models\MyClient;
use Illuminate\Http\Request;

class MyClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = MyClient::all();
        return view('my_clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('my_clients.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:250',
            'slug' => 'required|max:100|unique:my_clients,slug',
            'is_project' => 'required|in:0,1',
            'self_capture' => 'required|in:0,1',
            'client_prefix' => 'required|max:4',
            'client_logo' => 'nullable|max:255',
            'address' => 'nullable',
            'phone_number' => 'nullable|max:50',
            'city' => 'nullable|max:50',
        ]);

        MyClient::create($validated);
        return redirect()->route('clients.index')->with('success', 'Client created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(MyClient $myClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MyClient $myClient)
    {
        return view('my_clients.edit', compact('myClient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MyClient $myClient)
    {
        $validated = $request->validate([
            'name' => 'required|max:250',
            'slug' => 'required|max:100|unique:my_clients,slug,' . $myClient->id,
            'is_project' => 'required|in:0,1',
            'self_capture' => 'required|in:0,1',
            'client_prefix' => 'required|max:4',
            'client_logo' => 'nullable|max:255',
            'address' => 'nullable',
            'phone_number' => 'nullable|max:50',
            'city' => 'nullable|max:50',
        ]);

        $myClient->update($validated);
        return redirect()->route('clients.index')->with('success', 'Client updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyClient $myClient)
    {
        $myClient->delete();
        return redirect()->route('clients.index')->with('success', 'Client deleted successfully.');
    }
}
