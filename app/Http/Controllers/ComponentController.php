<?php

namespace App\Http\Controllers;

use App\DTO\Components\InsertComponentsDTO;
use App\DTO\Components\UpdateComponentsDTO;
use App\DTO\GeneralData\InsertGeneralDataDTO;
use App\Http\Requests\Components\CreateComponentRequest;
use App\Http\Requests\Components\UpdateComponentRequest;
use App\Http\Requests\GeneralData\CreateGeneralDataRequest;
use App\Models\Component;
use App\Models\damage_mechanism;
use App\Models\GeneralData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


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

        try {
            DB::beginTransaction();
            $dto = InsertComponentsDTO::fromRequest($request);
            $component = $this->model->create($dto->build());

            $damage_mechanism = new damage_mechanism();
            $damage_mechanism->dm_componentId = $component->comp_id;
            $damage_mechanism->dm_id = Str::random(9);
            $status = $damage_mechanism->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        if ($component) {
            return response()->json([
                "status" => true,
                "message" => "Item created successfully",
                "data" => [
                    "component" => $component,
                    "general_data" => $status
                ]
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
