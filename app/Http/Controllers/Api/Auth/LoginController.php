<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\UserSession;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ]);

        $email = strtolower($request->email);
        $password = $request->password;
        $user = null;
        if (Auth::attempt(['email' => $email,'password' => $password])) {
            $user = User::where('email', $email)->first();
        }
        try {
            if ($user){
                $key = env('JWT_KEY');
                $payload = array(
                    "iss" => env('APP_URL'),
                    "aud" => $user,
                    "iat" => time(),
                    "exp" => time() + 72000 // = (20 hour x 3600 second)
                );
                $jwt = JWT::encode($payload, $key,'HS256');

                $session = new UserSession();
                $session->user_id = $user->id;
                $session->token = $jwt;
                $session->start_at = date('Y-m-d',time());
                $session->action_at = date('Y-m-d',time());
                $session->save();

                $data = (object)[
                    'status' => 1,
                    'token' => $jwt,
                    'name' => $user->name,
                    'message' => 'Welcome '.$user->name
                ];

                return response()->json($data, 200);
            }else {
                return response()->json('user not found', 400);
            }
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 422);
        }
    }
}
