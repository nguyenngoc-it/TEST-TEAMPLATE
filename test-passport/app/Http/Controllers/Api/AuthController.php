<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(UserRegisterRequest $request)
    {
       $validated= $request->all();
       $validated['password']= bcrypt( $validated['password']);
       $user= User::create($validated);
       return response()->json([
          'user'=>$user,
           'message'=>'dang ky thanh cong'
       ], 200);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        dd(auth()->attempt($validator->validated()));
        if (! $token = auth()->attempt($validator->validated())) {

            return response()->json(['error' => 'Unauthorized'], 401);
        }





//        $validate= $request->validated();
//        if (Auth::attempt($validate)){
//            $user= Auth::user();
//            $token= $user->createToken('abc')->accessToken;
//            return response()->json([
//               'user'=>$user,
//               'token'=>$token->token,
//               'message'=>'dang nhap thanh cong'
//            ], 200);
//        }
//        else {
//            return response()->json(['message'=>'dang nhap khong thanh cong'],211);
//        }

    }
}
