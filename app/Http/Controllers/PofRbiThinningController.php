<?php

namespace App\Http\Controllers;

use App\DTO\RBIThinning\InsertRBIThinningDTO;
use App\DTO\RBIThinning\UpdateRBIThinningDTO;
use App\Http\Requests\RBIThinning\CreateRBIThinningRequest;
use App\Http\Requests\RBIThinning\UpdateRBIThinningRequest;
use App\Models\pof_rbi_thinning;
use Illuminate\Http\Response;

class PofRbiThinningController extends Controller
{
    public function __construct(
        protected pof_rbi_thinning $model,
        protected $model_id = "rbiThinning_componentId"
    ) {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->model::all();

        return response()->json([
            "status" => true,
            "message" => "POF RBI thinning got successfully",
            "data" => $data
        ], Response::HTTP_OK);
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
    public function store(CreateRBIThinningRequest $request)
    {
        $dto = InsertRBIThinningDTO::fromRequest($request);

        $result = $this->model->create($dto->build());

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF RBI thinning created successfully",
                "data" => $result
            ], Response::HTTP_CREATED);
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string|int $id)
    {
        $data = $this->model::where($this->model_id, $id);

        if ($data->exists()) {
            return response()->json([
                "status" => true,
                "message" => "POF RBI thinning showed successfully",
                "data" => $data->first()
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "status" => false,
                "message" => "No Content",
                "data" => null
            ], Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pof_rbi_thinning $pof_rbi_thinning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRBIThinningRequest $request, string|int $id)
    {
        $dto = UpdateRBIThinningDTO::fromRequest($request);
        $result = $this->model->where($this->model_id, $id)->first();
        $result->update($dto->build());
        $result->refresh();

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF RBI thinning updated successfully",
                "data" => $result
            ], Response::HTTP_OK);
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string|int $id)
    {
        $result = $this->model->where($this->model_id, $id)->first();
        $result->delete();

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF RBI thinning deleted successfully",
                "data" => $result
            ], Response::HTTP_OK);
        };
    }
}
