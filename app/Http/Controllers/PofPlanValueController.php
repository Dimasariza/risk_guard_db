<?php

namespace App\Http\Controllers;

use App\DTO\PlanValue\InsertPlanValueDTO;
use App\DTO\PlanValue\UpdatePlanValueDTO;
use App\Http\Requests\PlanValue\CreatePlanValueRequest;
use App\Http\Requests\PlanValue\UpdatePlanValueRequest;
use App\Models\pof_plan_value;
use Illuminate\Http\Response;

class PofPlanValueController extends Controller
{
    public function __construct(
        protected pof_plan_value $model,
        protected $model_id = "planValue_componentId"
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
            "message" => "POF Plan Value got successfully",
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
    public function store(CreatePlanValueRequest $request)
    {
        $dto = InsertPlanValueDTO::fromRequest($request);

        $result = $this->model->create($dto->build());

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF Plan Value created successfully",
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
                "message" => "POF Plan Value showed successfully",
                "data" => $data
            ], Response::HTTP_OK);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pof_plan_value $pof_rbi_thinning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanValueRequest $request, string|int $id)
    {
        $dto = UpdatePlanValueDTO::fromRequest($request);
        $result = $this->model->where($this->model_id, $id)->first();
        $result->update($dto->build());
        $result->refresh();

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF Plan Value updated successfully",
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
                "message" => "POF Plan Value deleted successfully",
                "data" => $result
            ], Response::HTTP_OK);
        };
    }
}
