<?php

namespace App\Http\Controllers;

use App\DTO\RBIThinningScreeningQuestion\InsertRBISQDTO;
use App\DTO\RBIThinningScreeningQuestion\UpdateRBISQDTO;
use App\Models\rbi_thinning_screening_question;
use App\Http\Controllers\Controller;
use App\Http\Requests\RBIThinningScreeningQuestion\CreateRBISQRequest;
use App\Http\Requests\RBIThinningScreeningQuestion\UpdateRBISQRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RbiThinningScreeningQuestionController extends Controller
{
    public function __construct(
        protected rbi_thinning_screening_question $model,
        protected $model_id = "rbiSQ_componentId"
    ) {
    }
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->model::all();
        return response()->json([
            "status" => true,
            "message" => "Data ready",
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
    public function store(CreateRBISQRequest $request)
    {
        $dto = InsertRBISQDTO::fromRequest($request);

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
    public function show(string|int $id)
    {
        $data = $this->model::where($this->model_id, $id);
        if (!$data->exists()) {
            return response()->json([
                'status' => false,
                'message' => 'RBI Thinning Screening Question not found.',
                "data" => null
            ], Response::HTTP_NO_CONTENT);
        } else if ($data) {
            return response()->json([
                "status" => true,
                "message" => "RBI Thinning Screening Question showed successfully",
                "data" => $data->first()
            ], Response::HTTP_OK);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rbi_thinning_screening_question $assetSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRBISQRequest $request, string|int $id)
    {
        $dto = UpdateRBISQDTO::fromRequest($request);
        $result = $this->model->where($this->model_id, $id)->first();
        $result->update($dto->build());
        $result->refresh();

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "RBI Thinning Screening Question updated successfully",
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
                "message" => "RBI Thinning Screening Question deleted successfully",
                "data" => $result
            ], Response::HTTP_OK);
        };
    }
}
