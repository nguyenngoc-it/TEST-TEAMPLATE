<?php

namespace App\Http\Controllers;

use App\Http\Requests\forgotRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PassportAuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return response()->json(['user'=>$user], 200);

    }
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
//        dd(auth()->attempt($data));
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function forgot(forgotRequest $request)
    {
        $email= $request->input('email');
        if (User::where('email', $email)->doesntExist()){
            return response([
               'message'=>'user done\'t exists!'
            ], 404);
        }
        $token= Str::random(10);

        try {
            DB::table('password_resets')->insert([
                'email'=>$email,
                'token'=>$token
            ]);
            return response([
                'message'=>'check your email'
            ]);
        }catch (\Exception $exception){
            return response([
                'message'=> $exception->getMessage()
            ], 400);
        }


    }
}
