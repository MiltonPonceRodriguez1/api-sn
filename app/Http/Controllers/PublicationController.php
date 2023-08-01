<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\Publication;

class PublicationController extends Controller
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
        $publications = Publication::orderByDesc('created_at')->get()->load('user');

        return response()->json([
            'status' => 'success',
            'publications' => $publications
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
        if ($request->input('text') == null && !$request->hasFile('file0')) return response()->json(['status' => 'error', 'message' => 'Faltan Datos'], 404);

        $validator = Validator::make($request->all(), [
            'user_id' => 'required'
        ]);

        if($validator->fails()) return response()->json(['status' => 'error', 'message' => 'Error interno'], 500);

        
        $data = [
            'user_id' => $request->input('user_id'),
            'text' => $request->input('text'),
        ];

       
        if ($request->hasFile('file0')) {
            $image = $request->file('file0');

            $validator = Validator::make($request->all(), [
                'file0' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            
            if ($validator->fails()) return response()->json(['status' => 'error', 'message' => 'El archivo no es valido'], 500);
            
            $extension = explode("/", $image->getMimeType());
            $image_name = 'pub_'.time().'.'.$extension[1];
            
            \Storage::disk('publications')->put($image_name, \File::get($image));
            $data['file'] = $image_name;
        }
        
        $publication = Publication::create($data);
        $publication->load('user');

        return response()->json(['status' => 'success', 'publication' => $publication], 200);
        
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

    public function getFile($filename) {
        $isset = \Storage::disk('publications')->exists($filename);
        
        if ($isset) {
            $file = \Storage::disk('publications')->get($filename);
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

    public function getPublicationsByUser($id) {
        $publications = Publication::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        $publications = $publications->load('user');

        return response()->json([
            'status' => 'success',
            'publications' => $publications
        ], 200);
    }
}
