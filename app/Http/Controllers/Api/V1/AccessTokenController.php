<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Laravel\Sanctum\Sanctum;

class AccessTokenController extends Controller
{
    //
    public function store(Request $request)
    {

        $request->validate(['email' => 'required|email', 'password' => 'required|string', 'device' => 'nullable|string']);

        $user = User::query()->where('email', $request->email)->first();

        if ($user && Auth::attempt(['email' => $request->email, 'password' => $request->password],)) {
            return response()->json(['status' => 'unauthenticated', 'message' => 'invalid Username or password'], 401);
        }
        $token = $user->createToken($request->post('device') ?? $request->userAgent(), ['post.update', 'post.create', 'post.delete'], now()->addDays(30));
        return response()->json(['token' => $token->plainTextToken, 'user' => $user, 'message' => 'logged in '], 201);
    }
    public function destroy($token=null){
        /** 
         * @var App/Models/User
        */
        $user=auth()->guard('sanctum')->user();
        
        if(!$token){
            
            $user->currentAccessToken()->delete();
            return Response::noContent();
        }
        if($token='all'){
            $user->tokens()->delete();
            return Response::noContent();

        }
        Sanctum::personalAccessTokenModel()::findToken($token)->delete();
            return Response::noContent();



    }
}
