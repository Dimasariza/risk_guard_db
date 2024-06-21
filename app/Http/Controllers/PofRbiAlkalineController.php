<?php

namespace App\Http\Controllers;

use App\DTO\RBIAlkaline\InsertRBIAlkalineDTO;
use App\DTO\RBIAlkaline\UpdateRBIAlkalineDTO;
use App\Http\Requests\RBIAlkaline\CreateRBIAlkalineRequest;
use App\Http\Requests\RBIAlkaline\UpdateRBIAlkalineRequest;
use App\Models\pof_rbi_alkaline;
use Illuminate\Http\Response;

class PofRbiAlkalineController extends Controller
{
    public function __construct(
        protected pof_rbi_alkaline $model,
        protected $model_id = "rbiAlkaline_id"
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
            "message" => "POF RBI Alkaline got successfully",
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
    public function store(CreateRBIAlkalineRequest $request)
    {
        $dto = InsertRBIAlkalineDTO::fromRequest($request);

        $result = $this->model->create($dto->build());

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF RBI Alkaline created successfully",
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
                "message" => "POF RBI Alkaline showed successfully",
                "data" => $data
            ], Response::HTTP_OK);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pof_rbi_alkaline $pof_plan_thinning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRBIAlkalineRequest $request, string|int $id)
    {
        $dto = UpdateRBIAlkalineDTO::fromRequest($request);
        $result = $this->model->where($this->model_id, $id)->first();
        $result->update($dto->build());
        $result->refresh();

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "POF RBI Alkaline updated successfully",
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
                "message" => "POF RBI Alkaline deleted successfully",
                "data" => $result
            ], Response::HTTP_OK);
        };
    }
}
