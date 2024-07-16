<?php

namespace App\Http\Controllers;

use App\DTO\COF\InsertCOFDTO;
use App\DTO\COF\UpdateCOFDTO;
use App\Models\COF;
use App\Http\Controllers\Controller;
use App\Http\Requests\COF\CreateCOFRequest;
use App\Http\Requests\COF\UpdateCOFRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class COFController extends Controller
{
    public function __construct(
        protected COF $model,
        protected $model_id = "cof_componentId"
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
    public function store(CreateCOFRequest $request)
    {
        $dto = InsertCOFDTO::fromRequest($request);

        // dd($dto);

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
                'message' => 'Damage Mechanism data not found.',
                "data" => null
            ], Response::HTTP_NO_CONTENT);
        } else if ($data) {
            return response()->json([
                "status" => true,
                "message" => "Damage Mechanism showed successfully",
                "data" => $data->first()
            ], Response::HTTP_OK);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($assetSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCOFRequest $request, string|int $id)
    {
        $dto = UpdateCOFDTO::fromRequest($request);

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
