<?php

namespace App\Http\Controllers;

use App\DTO\RBIExCor\InsertRBIExCorDTO;
use App\DTO\RBIExCor\UpdateRBIExCorDTO;
use App\Http\Requests\RBIExCor\CreateRBIExCorRequest;
use App\Http\Requests\RBIExCor\UpdateRBIExCorRequest;
use App\Models\pof_plan_thinning;
use App\Models\pof_rbi_ex_cor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PofRbiExCorController extends Controller
{
    public function __construct(
        protected pof_rbi_ex_cor $model,
        protected $model_id = "rbiExCor_id"
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
            "message" => "POF RBI External Corrosion got successfully",
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
    public function store(CreateRBIExCorRequest $request)
    {
        $dto = InsertRBIExCorDTO::fromRequest($request);

        $result = $this->model->create($dto->build());

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF RBI External Corrosion created successfully",
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
                "message" => "POF RBI External Corrosion showed successfully",
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
    public function update(UpdateRBIExCorRequest $request, string|int $id)
    {
        $dto = UpdateRBIExCorDTO::fromRequest($request);
        $result = $this->model->where($this->model_id, $id)->first();
        $result->update($dto->build());
        $result->refresh();

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF RBI External Corrosion updated successfully",
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
                "message" => "POF RBI External Corrosion deleted successfully",
                "data" => $result
            ], Response::HTTP_OK);
        };
    }
}
