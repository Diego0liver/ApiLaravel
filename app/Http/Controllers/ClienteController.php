<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return Cliente::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Cliente::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Cliente::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $clent = Cliente::findOrFail($id);
       $clent -> update($request->all());
       return  $clent;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Cliente::destroy($id);

    }
}
