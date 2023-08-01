<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

use App\Models\PaidPost;
use App\Models\UserPlan;


class PaidPostController extends Controller
{
    public function __construct() {
        $this->middleware('jwt.auth', ['except' => ['index', 'getFile']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paidPosts = PaidPost::inRandomOrder()->get()->load('userPlan');

        foreach ($paidPosts as $paidPost) {
            $paidPost->images = explode(', ', $paidPost->images);
        }
        
        return response()->json([
            'status' => 'sucess',
            'paid_posts' => $paidPosts
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'user_plan_id' => 'required',
            'title' => 'required',
            'category' => 'required',
            'file0' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $userPlan = UserPlan::where('id', '=', $request->input('user_plan_id'))->first();

        if ($validator->fails() || !$userPlan) return response()->json(['status' => 'error', 'message' => 'Faltan datos por enviar!'], 404);

        if ( $userPlan->post_count <= 0 ) {
            return response()->json(['status' => 'error', 'message' => 'Error: No puedes publicar más Post!'], 500);
        }

        // ? Inicializar variables para imagenes
        $count = 0;
        $images = '';

        // ? Inicializamos Datos del Usuario
        $data = [
            'user_id' => $request->input('user_id'),
            'user_plan_id' => $request->input('user_plan_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('category')
        ];

        $files = $request->file();

        foreach ($files as $file) {
            $extension = explode("/", $file->getMimeType());
            $imageName = $data['user_id'].'_paid_post'.$count.'_'.time().'.'.$extension[1];

            \Storage::disk('paid_posts')->put($imageName, \File::get($file));

            $images = $count === 0 ? $images .= $imageName : $images .= ", ".$imageName;
            $count++;
        }

        $data['images'] = $images;

        try {
            $paidPost = PaidPost::create($data);
    
            if ( $paidPost ){
                $userPlan->post_count -= 1;
                $userPlan->save();
            }

            return response()->json([
                'status' => 'success',
                'user_plan' => $userPlan,
                'paid_post' => $paidPost->load('userPlan')
            ]);

        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message' => 'Error al guardar el Post: Intente más Tarde!'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getFile( $filename ) {
        $isset = \Storage::disk('paid_posts')->exists($filename);
        
        if ($isset) {
            $file = \Storage::disk('paid_posts')->get($filename);
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
