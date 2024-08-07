<?php

namespace App\Http\Controllers;

use App\DTO\RBIValue\InsertRBIValueDTO;
use App\DTO\RBIValue\UpdateRBIValueDTO;
use App\Http\Requests\RBIValue\CreateRBIValueRequest;
use App\Http\Requests\RBIValue\UpdateRBIValueRequest;
use App\Models\pof_rbi_value;
use Illuminate\Http\Response;

class PofRbiValueController extends Controller
{
    public function __construct(
        protected pof_rbi_value $model,
        protected $model_id = "rbiValue_componentId"
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
            "message" => "POF RBI Value got successfully",
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
    public function store(CreateRBIValueRequest $request)
    {
        $dto = InsertRBIValueDTO::fromRequest($request);

        $result = $this->model->create($dto->build());

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF RBI Value created successfully",
                "data" => $result
            ], Response::HTTP_CREATED);
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string|int $id)
    {
        $data = $this->model::where($this->model_id, $id)->first();

        if ($data) {
            return response()->json([
                "status" => true,
                "message" => "POF RBI Value showed successfully",
                "data" => $data
            ], Response::HTTP_OK);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pof_rbi_value $pof_rbi_thinning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRBIValueRequest $request, string|int $id)
    {
        $dto = UpdateRBIValueDTO::fromRequest($request);
        $result = $this->model->where($this->model_id, $id)->first();
        $result->update($dto->build());
        $result->refresh();

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF RBI Value updated successfully",
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
                "message" => "POF RBI Value deleted successfully",
                "data" => $result
            ], Response::HTTP_OK);
        };
    }
}
