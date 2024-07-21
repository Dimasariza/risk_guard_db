<?php

namespace App\Http\Controllers;

use App\Models\CorrosionLoopGroup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CorrosionLoopGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        return response()->json([
            "req" => $request->toArray()
        ], 200);
        // dd($request);
        // dd("sotre");
    }

    /**
     * Display the specified resource.
     */
    public function show(CorrosionLoopGroup $corrosionLoopGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CorrosionLoopGroup $corrosionLoopGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CorrosionLoopGroup $corrosionLoopGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CorrosionLoopGroup $corrosionLoopGroup)
    {
        //
    }
}
