<?php

namespace App\Helpers;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class JwtAuth
{
    public $key;

    public function __construct()
    {
        $this->key = 'kHHg13BXkQRsiEBetDbvpr6OiaWu6kEwgOsYUPgqjorRngH1x7YRa6sVfviq4ZBV';
    }

    public function signup($email, $password, $getToken = null)
    {
        // Buscar si exixte el usuario con sus credenciales
        $user = User::where([
            'email' => $email,
            'password'  => $password
        ])->first();

        // Comprobar si son correctas (Objeto)
        $signup = false;
        if (is_object($user)) {
            $signup = true;
        }

        // Generar el token con los datos del usuario identificado
        if ($signup) {
            $token = array(
                'id' =>  $user->id,
                'email' =>  $user->email,
                'name' =>  $user->name,
                'surname' =>  $user->surname,
                'nickname' => $user->nickname,
                'avatar' =>  $user->avatar,
                'cover' => $user->cover,
                'iat' =>  time(),
                'exp' =>  time() + (7 * 24 * 60 * 60),
            );

            $jwt = JWT::encode($token, $this->key, 'HS256');
            $decoded = JWT::decode($jwt, new Key($this->key, 'HS256'));

            if (is_null($getToken)) {
                $data = $jwt;
            } else {
                $data = $decoded;
            }
        } else {
            $data = array(
                'status' => 'error',
                'code' =>  404,
                'message' => 'Failure login'
            );
        }

        return $data;
    }

    public function checkToken($jwt, $getIdentity = false)
    {
        $auth = false;

        try {
            $jwt = str_replace('"', '', $jwt);
            // $decoded = JWT::decode($jwt, $this->key, ['HS256']);
            $decoded = JWT::decode($jwt, new Key($this->key, 'HS256'));
        } catch (\UnexpectedValueException $e) {
            $auth = false;
        } catch (\DomainException $e) {
            $auth = false;
        }

        if (!empty($decoded) && is_object($decoded) && isset($decoded->id)) {
            $auth = true;
        } else {
            $auth = false;
        }

        if ($getIdentity) {
            return $decoded;
        }

        return $auth;
    }
}
