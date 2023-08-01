<?php

namespace App\Http\Controllers;

use App\Helpers\JwtAuth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Publication;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('jwt.auth', ['except' => ['register', 'login', 'getAvatar', 'getCover']]);
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'surname' => 'required',
            'nickname' => 'required',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'gender' => 'required',
            'phone' => 'required'
        ]);

        if ($validator->fails()) return response()->json(['status' => 'error', 'message' => '¡Error:  Faltan datos por enviar!'], 500);

        try {
            $user = User::create(array_merge(
                $validator->validate(),
                ['password' => hash('sha256', $request->password)]
            ));

            return response()->json([
                'status' => 'success',
                'message' => '¡Usuario registrado correctamente!',
                'user' => $user
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message' => '¡Error al registrar el usuario:  intente más tarde!'], 500);
        }
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) return response()->json(['status' => 'error', 'message' => '¡Error:  Faltan datos por enviar!'], 500);

        $email = $request->input('email');
        $password =  hash('sha256', $request->input('password'));


        $jwt = new \JwtAuth();
        $token = $jwt->signup($email, $password);

        if (isset($token['status']) && $token['status'] === 'error') return response()->json(['status' => 'error', 'message' => 'Login incorrecto!'], 500);

        $user = $jwt->signup($email, $password, true);

        return response()->json([
            'status' => 'success',
            'message' => 'Login Correcto',
            'user' => $user,
            'token' => $token
        ], 200);
    }

    public function profile($id)
    {
        $user = User::where('id', $id)->first();
        $publications = Publication::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        
        return response()->json([
            'status' => 'success',
            'user' => $user,
            'publications' => $publications
        ], 200);
    }

    public function upload(Request $request)
    {
        $id = $request->input('id');
        $disk = $request->input('disk');
        $image = $request->file('file0');
        
        $validate = Validator::make($request->all(), [
            'id' => 'required',
            'disk' => 'required',
            'file0' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);
        
        
        if (!$image || !$id || !$disk || $validate->fails()) return response()->json(['status' => 'error', 'message' => 'Faltan datos'], 404);

        $single_disk = rtrim($disk, 's');

        $extension = explode("/", $image->getMimeType());
        $image_name = $id . '_' . $single_disk . '_' . time() . '.' . $extension[1];

        \Storage::disk($disk)->put($image_name, \File::get($image));

        User::where('id', $id)->update([$single_disk => $image_name]);
        $user = User::where('id', $id)->first();

        return response()->json(['status' => 'success', 'user' => $user], 200);
    }

    public function getAvatar($filename)
    {
        $isset = \Storage::disk('avatars')->exists($filename);

        if ($isset) {
            $file = \Storage::disk('avatars')->get($filename);
            return new Response($file, 200);
        } else {
            $data = array(
                'status'    => 'error',
                'code'      =>  404,
                'message'   =>  'La imagen no existe.'
            );
            return response()->json($data, $data['code']);
        }
    }

    public function getCover($filename)
    {
        $isset = \Storage::disk('covers')->exists($filename);

        if ($isset) {
            $file = \Storage::disk('covers')->get($filename);
            return new Response($file, 200);
        } else {
            $data = array(
                'status'    => 'error',
                'code'      =>  404,
                'message'   =>  'La imagen no existe.'
            );
            return response()->json($data, $data['code']);
        }
    }
}
