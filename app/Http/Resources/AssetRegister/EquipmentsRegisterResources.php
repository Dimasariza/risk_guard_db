<?php

namespace App\Http\Resources\AssetRegister;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EquipmentsRegisterResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $user = (new User)->where("user_id", $request->user_id);
        $equipment = $this->equipmentByUser;
        if($request->registered !== "all") {
            $equipment = $equipment->where("comp_addToCalculation", $request->registered);
        }

        if($user->first()->user_role != "admin") {
            $equipment = $equipment->where("comp_userId", $request->user_id);
        }

        return [
            ...parent::toArray($request),
            "equipment_by_user" => new ComponentsRegisterResources($equipment) 
        ];
    } 
}
