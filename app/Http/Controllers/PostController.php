<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('jwt.auth', ['except' => [ 'index', 'getFile' ]]);
    }

    /** 
     * @return all post
    **/
    public function index() {
        $posts = Post::orderByDesc('created_at')->get();

        foreach ($posts as $post) {
            $post->images = explode(',', $post->images);
        }

        return response()->json([
            'status' => 'success',
            'posts' => $posts
        ]);
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'plan_id' => 'required',
            'title' => 'required',
            'category' => 'required',
            'file0' => 'required|image|mimes:jpg,jpeg,png,gif',
            'file1' => 'image|mimes:jpg,jpeg,png,gif',
            'file2' => 'image|mimes:jpg,jpeg,png,gif',
        ]);

        if ( $validator->fails() ) return response()->json(['status' => 'error', 'message' => 'Faltan datos por enviar, o las imagenes no son del formato permitido'], 404);
        
        $finishDate = Carbon::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'));
        $planID = (int) $request->input('plan_id');

        if ( $planID === 1 || $planID === 2 || $planID === 3 ) $finishDate = $finishDate->addMonth(1);
        
        $post = new Post();
        $post->user_id = (int) $request->input('user_id');
        $post->plan_id = $planID;
        $post->title = $request->input('title');
        $post->category = $request->input('category');
        $post->description = ($request->input('description') !== null) ? $request->input('description') : null;
        $post->email = ($request->input('email') !== null) ? $request->input('email') : null;
        $post->company = ($request->input('company') !== null) ? $request->input('company') : null;
        $post->images = '';
        $post->phone = ($request->input('phone') !== null) ? $request->input('phone') : null;
        $post->active = true;
        $post->limit_date = $finishDate;

        $files = $request->file();

        for( $i = 0; $i < count($files); $i++ ) {
            $extension = explode("/", $files['file'.$i]->getMimeType());
            $imageName = $post->user_id.'_post'.$i.'_'.time().'.'.$extension[1];
            \Storage::disk('posts')->put($imageName, \File::get($files['file'.$i]));
            $post->images = ($i === 0) ? $post->images .= $imageName : $post->images .= ",".$imageName;
        }

        $result = $post->save();

        // ? EN CASO DE NO HABESE GUARDADO CORRECTAMENTE EL BANNER
        if ( !$result ) return response()->json([ 'status' => 'error', 'message' => 'Error al guardar el Post, comunicate con soporte para solucionar tu problema!' ]);
        
        return response()->json([
            'status' => 'success',
            'message' => 'Post publicado Correctamente!',
            'post' => $post
        ]);
    }

    public function getFile( $filename ) {
        $isset = \Storage::disk('posts')->exists($filename);
        
        if ($isset) {
            $file = \Storage::disk('posts')->get($filename);
            return new Response($file, 200);
        } else {
            $data = array(
                'status'    => 'error',
                'code'      =>  404,
                'message'   =>  'La imagen no existe.'
            );
            return response() -> json($data, $data['code']);
        }
    }
}
