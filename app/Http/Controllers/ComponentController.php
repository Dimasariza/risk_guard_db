<?php

namespace App\Http\Controllers;

use App\DTO\Components\InsertComponentsDTO;
use App\DTO\Components\UpdateComponentsDTO;
use App\DTO\GeneralData\InsertGeneralDataDTO;
use App\Http\Requests\Components\CreateComponentRequest;
use App\Http\Requests\Components\UpdateComponentRequest;
use App\Http\Requests\GeneralData\CreateGeneralDataRequest;
use App\Models\Component;
use App\Models\GeneralData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;

class ComponentController extends Controller
{

    public function __construct(
        protected Component $model,
        protected $model_id = "comp_id"
    ) {
    }
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Component::all();
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
    public function store(CreateComponentRequest $request)
    {
        $dto = InsertComponentsDTO::fromRequest($request);

        $component = $this->model->create($dto->build());

        $general_data = new GeneralData();
        $general_data_request = new CreateGeneralDataRequest();
        $general_data_dto = InsertGeneralDataDTO::fromRequest(
            $general_data_request["comp_id"] = $component->comp_id
        );
        dd($general_data_dto);
        $general_data->create($dto->build());

        if ($component) {
            return response()->json([
                "status" => true,
                "message" => "Item created successfully",
                "data" => $component
            ], Response::HTTP_CREATED);
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(int|string $id)
    {
        $data = $this->model::where($this->model_id, $id);
        if ($data) {
            return response()->json([
                "status" => true,
                "message" => "Data ready",
                "data" => $data
            ], Response::HTTP_OK);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Component $assetSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComponentRequest $request, string|int $id)
    {
        $dto = UpdateComponentsDTO::fromRequest($request);
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
    public function destroy(string|int $id)
    {
        $result = $this->model->where($this->model_id, $id)->first();
        $result->delete();

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "Item deleted successfully",
                "data" => $result
            ], Response::HTTP_OK);
        };
    }
}
