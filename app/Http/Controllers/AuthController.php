<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required',
        //     'c_password' => 'required|same:password',
        // ]);

        // if($validator->fails()){
        //     return $this->sendError('Validation Error.', $validator->errors());       
        // }

        // $input = $request->all();
        // $input['password'] = bcrypt($input['password']);
        // $user = User::create($input);
        // $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        // $success['name'] =  $user->name;

        // return $this->sendResponse($success, 'User register successfully.');
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request): JsonResponse
    {
        if (Auth::attempt(['user_username' => $request->user_username, 'password' => $request->password])) {
            $user = Auth::user();

            $success['token'] =  $user->createToken('MyApp')->plainTextToken;
            $success['user'] =  $user;

            return response()->json([
                "status" => true,
                "message" => "User Authenticated",
                "data" => $success
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                "status" => false,
                "message" => "User not found"
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function logout(Request $request)
    { 
        $user = Auth::user()->token();
        $user->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
