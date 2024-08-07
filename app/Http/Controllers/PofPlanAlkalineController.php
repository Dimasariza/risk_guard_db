<?php

namespace App\Http\Controllers;

use App\DTO\PlanAlkaline\InsertPlanAlkalineDTO;
use App\DTO\PlanAlkaline\UpdatePlanAlkalineDTO;
use App\Http\Requests\PlanAlkaline\CreatePlanAlkalineRequest;
use App\Http\Requests\PlanAlkaline\UpdatePlanAlkalineRequest;
use App\Models\pof_plan_alkaline;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PofPlanAlkalineController extends Controller
{
    public function __construct(
        protected pof_plan_alkaline $model,
        protected $model_id = "planAlkaline_componentId"
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
            "message" => "POF Plan Alkaline got successfully",
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
    public function store(CreatePlanAlkalineRequest $request)
    {
        $dto = InsertPlanAlkalineDTO::fromRequest($request);

        $result = $this->model->create($dto->build());

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF Plan Alkaline created successfully",
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

        if (!$data->exists()) {
            return response()->json([
                "status" => false,
                "message" => "POF Plan Alkaline not found",
            ], Response::HTTP_NOT_FOUND);
        } else {
            return response()->json([
                "status" => true,
                "message" => "POF Plan Alkaline showed successfully",
                "data" => $data->first()
            ], Response::HTTP_OK);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pof_plan_alkaline $pof_plan_thinning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanAlkalineRequest $request, string|int $id)
    {
        $dto = UpdatePlanAlkalineDTO::fromRequest($request);
        $result = $this->model->where($this->model_id, $id)->first();
        $result->update($dto->build());
        $result->refresh();

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF Plan Alkaline updated successfully",
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
                "message" => "POF Plan Alkaline deleted successfully",
                "data" => $result
            ], Response::HTTP_OK);
        };
    }
}
