<?php

namespace App\Http\Controllers;

use App\DTO\DamageMechanism\InsertDamageMechanismDTO;
use App\DTO\DamageMechanism\UpdateDamageMechanismDTO;
use App\Http\Requests\DamageMechanism\CreateDamageMechanismRequest;
use App\Http\Requests\DamageMechanism\UpdateDamageMechanismRequest;
use App\Models\damage_mechanism;
use Illuminate\Http\Response;

class DamageMechanismController extends Controller
{
    public function __construct(
        protected damage_mechanism $model,
        protected $model_id = "dm_id"
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
    public function store(CreateDamageMechanismRequest $request)
    {
        // dd("store");
        $dto = InsertDamageMechanismDTO::fromRequest($request);

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
        $data = $this->model::where($this->model_id, $id)->first();
        if ($data) {
            return response()->json([
                "status" => true,
                "message" => "Damage Mechanism showed successfully",
                "data" => $data
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(damage_mechanism $assetSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDamageMechanismRequest $request, string|int $id)
    {
        $dto = UpdateDamageMechanismDTO::fromRequest($request);
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
