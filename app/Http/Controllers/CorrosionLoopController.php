<?php

namespace App\Http\Controllers;

use App\DTO\CorrosionLoop\InsertCorrosionLoopDTO;
use App\DTO\CorrosionLoop\UpdateCorrosionLoopDTO;
use App\Models\CorrosionLoop;
use App\Http\Controllers\Controller;
use App\Http\Requests\CorrosionLoop\CreateCorrosionLoopRequest;
use App\Http\Requests\CorrosionLoop\UpdateCorrosionLoopRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CorrosionLoopController extends Controller
{
    public function __construct(
        protected CorrosionLoop $model,
        protected $model_id = "cl_userId"
    )
    {
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = $this->model::all();
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
    public function store(CreateCorrosionLoopRequest $request)
    {
        //
        // dd("test");
        $dto = InsertCorrosionLoopDTO::fromRequest($request);
        // dd($dto);

        $result = $this->model->create($dto->build());

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "Damage Mechanism created successfully",
                "data" => $result
            ], Response::HTTP_CREATED);
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string | int $id)
    {
        //
        $data = $this->model::where($this->model_id, $id);
        if ($data) {
            return response()->json([
                "status" => true,
                "message" => "Data ready",
                "data" => $data->first()
            ], Response::HTTP_OK);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CorrosionLoop $corrosionLoop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCorrosionLoopRequest $request, string | int $id)
    {
        //
        $dto = UpdateCorrosionLoopDTO::fromRequest($request);
        $result = $this->model->where($this->model_id, $id)->first();
        $result->update($dto->build());
        $result->refresh();

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "Item updated successfully",
                "data" => $result
            ], Response::HTTP_OK);
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CorrosionLoop $corrosionLoop)
    {
        //
    }
}
