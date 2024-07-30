<?php

namespace App\Http\Controllers;

use App\DTO\CorrosionLoopGroup\UpdateCorrosionLoopGroupDTO;
use App\Models\CorrosionLoopGroup;
use App\Http\Controllers\Controller;
use App\Http\Requests\CorrosionLoopGroup\UpdateCorrosionLoopGroupRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CorrosionLoopGroupController extends Controller
{
    public function __construct(
        protected CorrosionLoopGroup $model,
        protected $model_id = "clGroup_clId"
    ) {
    }
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->model::all();
        // $data = EquipmentCreatedResource::collection($data);
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
    public function store(Request $request)
    {
        $group_result = [];
        DB::beginTransaction();
        $id = Str::random(9);
        foreach($request->toArray() as $group) {
            try {
                $group["clGroup_id"] = $id;
                $result = $this->model->create($group);
                array_push($group_result, $result);
            }
            catch( \Illuminate\Database\QueryException $exception ) {
                $errorInfo = $exception->errorInfo;
                DB::rollback();
                return response()->json([
                    "status" => false,
                    "info" => $errorInfo,
                    "message" => "Duplicate name for" . $errorInfo[2]
                ], Response::HTTP_BAD_REQUEST);
            }
        };
        DB::commit();

        return response()->json([
            "status" => true,
            "message" => "Item created successfully",
            "data" => $group_result
        ], Response::HTTP_CREATED);
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
                "data" => $data->get()
            ]);
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
    public function update(UpdateCorrosionLoopGroupRequest $request, string|int $id)
    {
        $dto = UpdateCorrosionLoopGroupDTO::fromRequest($request);
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
