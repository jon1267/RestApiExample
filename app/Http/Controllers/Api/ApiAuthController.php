<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ApiLoginRequest;
use App\Http\Requests\ApiRegisterRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{
    public function register(ApiRegisterRequest $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        $token = $user->createToken('bookapptoken')->plainTextToken;

        return response(['user' => $user, 'token' => $token], 201);
    }

    public function login(ApiLoginRequest $request)
    {

        $user = User::where('email', $request['email'])->first();

        //check credentials
        if (!$user || !Hash::check($request['password'], $user->password)) {
            return response(['message' => 'Bad credentials'],401);
        }

        $token = $user->createToken('bookapptoken')->plainTextToken;

        return response(['user' => $user, 'token' => $token], 201);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return ['message' => 'Your logged out now'];
    }
}
