<?php

namespace App\Http\Controllers;

use App\DTO\GeneralData\InsertGeneralDataDTO;
use App\DTO\GeneralData\UpdateGeneralDataDTO;
use App\Http\Requests\GeneralData\CreateGeneralDataRequest;
use App\Http\Requests\GeneralData\UpdateGeneralDataRequest;
use App\Models\GeneralData;
use Illuminate\Http\Response;

class GeneralDataController extends Controller
{
    public function __construct(
        protected GeneralData $model,
        protected $model_id = "gData_componentId"
    ) {
    }
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = GeneralData::all();
        return response()->json([
            "status" => true,
            "message" => "General data got successfully",
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
    public function store(CreateGeneralDataRequest $request)
    {
        $dto = InsertGeneralDataDTO::fromRequest($request);

        $result = $this->model->create($dto->build());

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "General Data created successfully",
                "data" => $result
            ], Response::HTTP_CREATED);
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string|int $id)
    {
        $data = $this->model::where("gData_componentId", $id);

        if ($data->exists()) {
            return response()->json([
                "status" => true,
                "message" => "General Data showed successfully",
                "data" => $data->first()
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "status" => true,
                "message" => "General Data not found",
                "data" => null
            ], Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GeneralData $assetSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGeneralDataRequest $request, string|int $id)
    {
        $dto = UpdateGeneralDataDTO::fromRequest($request);
        $result = $this->model->where($this->model_id, $id);
        if(!$result->exists()) {
            return response()->json([
                "status" => false,
                "message" => "General data not found",
            ], Response::HTTP_NOT_FOUND);
        }

        $result = $result->first();
        $result->update($dto->build());
        $result->refresh();

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "General data updated successfully",
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
                "message" => "General Data deleted successfully",
                "data" => $result
            ], Response::HTTP_OK);
        };
    }
}
