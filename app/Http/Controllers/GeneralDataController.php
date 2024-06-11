<?php

namespace App\Http\Controllers;

use App\Models\GeneralData;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GeneralDataController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = GeneralData::all();
        return response()->json([
            "status" => true,
            "message" => "Data ready",
            "data" => $data
        ], 200);
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
    public function show(GeneralData $assetSummary, int $id)
    {
        $data = $assetSummary::find($id);

        $uniqueID = Str::random(9);
        // dd($uniqueID);

        if ($data) {
            return response()->json([
                "status" => true,
                "message" => "Data ready",
                "data" => $data
            ], 200);
        } else {
            return response()->json([
                "status" => true,
                "message" => "Data not found",
                "data" => null
            ], 200);
        }
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
