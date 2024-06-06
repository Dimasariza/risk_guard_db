<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Item::all();
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
    public function show(Item $assetSummary, int $id)
    {
        $data = $assetSummary::findOrFail($id);
        if ($data) {
            return response()->json([
                "status" => true,
                "message" => "Data ready",
                "data" => $data
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $assetSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $assetSummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $assetSummary)
    {
        //
    }
}
