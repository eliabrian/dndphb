<?php

namespace App\Http\Controllers;

use App\Http\Resources\SpellResource;
use App\Models\Spell;
use Illuminate\Http\Request;

class SpellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SpellResource::collection(Spell::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Spell $spell)
    {
        return new SpellResource($spell);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spell $spell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spell $spell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spell $spell)
    {
        //
    }
}
