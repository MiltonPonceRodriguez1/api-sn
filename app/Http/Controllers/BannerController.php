<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Banner;


class BannerController extends Controller
{
    public function __construct() {
        $this->middleware('jwt.auth', ['except' => ['index', 'getBanner']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all()->load('user')->sortByDesc('created_at');

        return response()->json([
            'status' => 'success',
            'banners' => $banners
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
            'file0' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error'], 400);
        }

        $image = $request->file('file0');
        $id = $request->session()->get('id');

        $extension = explode('/', $image->getMimeType());
        $image_name = $id.'_'.'banner_'.time().'.'.$extension[1];

        \Storage::disk('banners')->put($image_name, \File::get($image));

        $banner = Banner::create([
            'user_id' => $id,
            'banner' => $image_name
        ]);

        if (is_object($banner) && $banner->wasRecentlyCreated) {
            return redirect('');
        } else {
            return view('errors.500');
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

    public function getBanner($filename) {
        $isset = \Storage::disk('banners')->exists($filename);
        
        if ($isset) {
            $file = \Storage::disk('banners')->get($filename);
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
