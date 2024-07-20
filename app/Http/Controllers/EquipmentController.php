<?php

namespace App\Http\Controllers;

use App\DTO\Equipments\InsertEquipmentsDTO;
use App\DTO\Equipments\UpdateEquipmentsDTO;
use App\Http\Requests\Equipments\CreateEquipmentRequest;
use App\Http\Requests\Equipments\UpdateEquipmentRequest;
use App\Http\Resources\Equipments\EquipmentCreatedResource;
use App\Models\Equipment;
use Illuminate\Http\Response;

class EquipmentController extends Controller
{
    public function __construct(
        protected Equipment $model,
        protected $model_id = "eq_idEquipment"
    ) {
    }
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Equipment::all();
        $data = EquipmentCreatedResource::collection($data);
        // dd($data);
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
    public function store(CreateEquipmentRequest $request)
    {
        $dto = InsertEquipmentsDTO::fromRequest($request);

        $result = $this->model->create($dto->build());

        if ($result) {
            return response()->json([
                "status" => true,
                "message" => "Item created successfully",
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
        if ($data) {
            return response()->json([
                "status" => true,
                "message" => "Data ready",
                "data" => $data
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipment $assetSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEquipmentRequest $request, string|int $id)
    {
        $dto = UpdateEquipmentsDTO::fromRequest($request);
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
