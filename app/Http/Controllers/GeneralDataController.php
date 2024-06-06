<?php

namespace App\Http\Controllers;

use App\Models\GeneralData;
use Illuminate\Http\Request;

class GeneralDataController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return GeneralData::all();
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
    public function show(GeneralData $assetSummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GeneralData $assetSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GeneralData $assetSummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GeneralData $assetSummary)
    {
        //
    }
}
