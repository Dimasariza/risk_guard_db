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
use App\Models\pof_plan_alkaline;
use App\Models\pof_plan_ex_cor;
use App\Models\pof_plan_thinning;
use App\Models\pof_plan_value;
use App\Models\pof_rbi_alkaline;
use App\Models\pof_rbi_ex_cor;
use App\Models\pof_rbi_thinning;
use App\Models\pof_rbi_value;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ComponentController extends Controller
{

    public function __construct(
        protected Component $model,
        protected $model_id = "comp_id",
    ) {
    }
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd($request);
        $data = $this->model::all();
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

        DB::beginTransaction();
        try {
            $dto = InsertComponentsDTO::fromRequest($request);
            $component = $this->model->create($dto->build());

            $general_data = new GeneralData();
            $general_data->gData_componentId = $component->comp_id;
            $general_data->gData_id = Str::random(9);
            $general_data->save();

            $damage_mechanism = new damage_mechanism();
            $damage_mechanism->dm_componentId = $component->comp_id;
            $damage_mechanism->dm_id = Str::random(9);
            $damage_mechanism->save();

            $plan_thinning = new pof_plan_thinning();
            $plan_thinning->planThinning_componentId = $component->comp_id;
            $plan_thinning->planThinning_id = Str::random(9);
            $plan_thinning->save();

            $plan_ex_cor = new pof_plan_ex_cor();
            $plan_ex_cor->planExCor_componentId = $component->comp_id;
            $plan_ex_cor->planExCor_id = Str::random(9);
            $plan_ex_cor->save();

            $plan_alkaline = new pof_plan_alkaline();
            $plan_alkaline->planAlkaline_componentId = $component->comp_id;
            $plan_alkaline->planAlkaline_id = Str::random(9);
            $plan_alkaline->save();

            $plan_value = new pof_plan_value();
            $plan_value->planValue_componentId = $component->comp_id;
            $plan_value->planValue_id = Str::random(9);
            $plan_value->save();

            $rbi_thinning = new pof_rbi_thinning();
            $rbi_thinning->rbiThinning_componentId = $component->comp_id;
            $rbi_thinning->rbiThinning_id = Str::random(9);
            $rbi_thinning->save();

            $rbi_ex_cor = new pof_rbi_ex_cor();
            $rbi_ex_cor->rbiExCor_componentId = $component->comp_id;
            $rbi_ex_cor->rbiExCor_id = Str::random(9);
            $rbi_ex_cor->save();

            $rbi_alkaline = new pof_rbi_alkaline();
            $rbi_alkaline->rbiAlkaline_componentId = $component->comp_id;
            $rbi_alkaline->rbiAlkaline_id = Str::random(9);
            $rbi_alkaline->save();

            $rbi_value = new pof_rbi_value();
            $rbi_value->rbiValue_componentId = $component->comp_id;
            $rbi_value->rbiValue_id = Str::random(9);
            $rbi_value->save();

            DB::commit();
            return response()->json([
                "status" => true,
                "message" => "Item created successfully",
                "data" => [
                    "component" => $component,
                    "general_data" => $general_data,
                    "damage_mechanism" => $damage_mechanism,
                    "plan_thinning" => $plan_thinning,
                    "plan_ex_cor" => $plan_ex_cor,
                    "plan_alkaline" => $plan_alkaline,
                    "plan_value" => $plan_value,
                    "rbi_thinning" => $rbi_thinning,
                    "rbi_ex_cor" => $rbi_ex_cor,
                    "rbi_alkaline" => $rbi_alkaline,
                    "rbi_value" => $rbi_value
                ]
            ], Response::HTTP_CREATED);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                "message" => $e
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string | int $id)
    {
        // dd($request);
        $data = $this->model::where($this->model_id, $id);
        if ($data) {
            return response()->json([
                "status" => true,
                "message" => "Data ready",
                "data" => $data->first()
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
