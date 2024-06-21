<?php

namespace App\Http\Controllers;

use App\DTO\PlanThinning\InsertPlanThinningDTO;
use App\DTO\PlanThinning\UpdatePlanThinningDTO;
use App\Http\Requests\PlanThinning\CreatePlanThinningRequest;
use App\Http\Requests\PlanThinning\UpdatePlanThinningRequest;
use App\Models\pof_plan_thinning;
use Illuminate\Http\Response;

class PofPlanThinningController extends Controller
{
    public function __construct(
        protected pof_plan_thinning $model,
        protected $model_id = "planThinning_id"
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
            "message" => "POF Plan thinning got successfully",
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
    public function store(CreatePlanThinningRequest $request)
    {
        $dto = InsertPlanThinningDTO::fromRequest($request);

        $result = $this->model->create($dto->build());

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF Plan thinning created successfully",
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
                "message" => "POF Plan thinning showed successfully",
                "data" => $data
            ], Response::HTTP_OK);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pof_plan_thinning $pof_plan_thinning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanThinningRequest $request, string|int $id)
    {
        $dto = UpdatePlanThinningDTO::fromRequest($request);
        $result = $this->model->where($this->model_id, $id)->first();
        $result->update($dto->build());
        $result->refresh();

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF PLan thinning updated successfully",
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
                "message" => "POF Plan thinning deleted successfully",
                "data" => $result
            ], Response::HTTP_OK);
        };
    }
}
