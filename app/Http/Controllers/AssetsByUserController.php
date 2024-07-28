<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\AssetRegister\ItemsRegisterResources;
use App\Http\Resources\Items\ItemCreatedResource;
use App\Models\Component;
use App\Models\Equipment;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AssetsByUserController extends Controller
{
    //
    public function __construct(
        protected Component $component,
        protected Equipment $equipment,
        protected Item $item,
        protected User $user,
    )
    {
    }

    public function component(Request $request)
    {
        $user = $this->user->where("user_id", $request->user_id);

        if(!$user->exists()) {
            return response()->json([
                "status" => false,
                "message" => "No User",
            ], Response::HTTP_NO_CONTENT);
        }

        if($user->first()->user_role == "admin") {
            return response()->json([
                "status" => true,
                "message" => "Component show successfully",
                "data" => $this->component->all()
            ], Response::HTTP_OK);
        }

        $data = $this->component->where("comp_userId", $request->user_id);
        if($data->exists()) {
            return response()->json([
                "status" => true,
                "data" => $data->get()
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "status" => false,
                "data" => null
            ], Response::HTTP_NO_CONTENT);
        }
    }

    public function equipment(Request $request)
    {
        $user = $this->user->where("user_id", $request->user_id);

        if(!$user->exists()) {
            return response()->json([
                "status" => false,
                "message" => "No User",
            ], Response::HTTP_NO_CONTENT);
        }

        if($user->first()->user_role == "admin") {
            return response()->json([
                "status" => true,
                "message" => "Equipment show successfully",
                "data" => $this->equipment->all()
            ], Response::HTTP_OK);
        }

        $data = $this->equipment->where("eq_userId", $request->user_id);
        if($data->exists()) {
            return response()->json([
                "status" => true,
                "data" => $data->get()
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "status" => false,
                "data" => null
            ], Response::HTTP_NO_CONTENT);
        }
    }

    public function item(Request $request)
    {
        $user = $this->user->where("user_id", $request->user_id);

        if(!$user->exists()) {
            return response()->json([
                "status" => false,
                "message" => "No User",
            ], Response::HTTP_NO_CONTENT);
        }

        if($user->first()->user_role == "admin") {
            return response()->json([
                "status" => true,
                "message" => "Item show successfully",
                "data" => ItemCreatedResource::collection($this->item->all()) 
            ], Response::HTTP_OK);
        }

        $data = $this->item->where("item_userId", $request->user_id);
        if($data->exists()) {
            return response()->json([
                "status" => true,
                "data" => ItemCreatedResource::collection($data->get()) 
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "status" => false,
                "data" => null
            ], Response::HTTP_NO_CONTENT);
        }
    }

    public function assetRegister(Request $request) 
    {
        $user = $this->user->where("user_id", $request->user_id);
        
        if(!$user->exists()) {
            return response()->json([
                "status" => false,
                "message" => "No User",
            ], Response::HTTP_NO_CONTENT);
        }

        return response()->json([
            "status" => true,
            "message" => "Equipment show succesfully",
            "data" => ItemsRegisterResources::collection($this->item->all())
        ]);
    }
}
