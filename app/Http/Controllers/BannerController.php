<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Banner;

use function PHPUnit\Framework\isNull;

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
        $month = Banner::where('banner_plan_id', '=', 1)->orderByDesc('created_at')->get();
        $month = $month->load('user');

        $quarter = Banner::where('banner_plan_id', '=', 2)->orderByDesc('created_at')->get();
        $quarter = $quarter->load('user');

        $halfYear = Banner::where('banner_plan_id', '=', 3)->orderByDesc('created_at')->get();
        $halfYear = $halfYear->load('user');

        return response()->json([
            'status' => 'success',
            'month' => $month,
            'quarter' => $quarter,
            'halfYear' => $halfYear,
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
            return response()->json([
                'status' => 'error',
                'message' => 'No se envio un Banner Valido!'
            ], 400);
        }

        $finishDate = Carbon::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'));
        $bannerPlanID = (int) $request->input('banner_plan_id');

        switch ($bannerPlanID) {
            case 1:
                $finishDate = $finishDate->addMonth(1);
                break;
            case 2:
                $finishDate = $finishDate->addMonth(3);
                break;
            case 3:
                $finishDate = $finishDate->addMonth(6);
                break;
            default:
                break;
        }

        // ? INSTANCIAMOS EL BANNER A GUARDAR EN LA BBDD
        $banner = new Banner();
        $banner->user_id = (int) $request->input('user_id');
        $banner->banner_plan_id = $bannerPlanID;
        $banner->company = $request->input('company');
        $banner->phone = $request->input('phone') !== null ? $request->input('phone') : null;
        $banner->email = $request->input('email') !== null ? $request->input('email') : null;
        $banner->website = $request->input('website') !== null ? $request->input('website') : null;
        $banner->active = true;
        $banner->limit_date = $finishDate;

        // ? PROCESAMIENTO DEL BANNER
        $image = $request->file('file0');

        $extension = explode('/', $image->getMimeType());
        $imageName = $banner->user_id.'_'.'banner_'.time().'.'.$extension[1];
        $banner->banner = $imageName;

        \Storage::disk('banners')->put($imageName, \File::get($image));

        $result = $banner->save();

        // ? EN CASO DE NO HABESE GUARDADO CORRECTAMENTE EL BANNER
        if ( !$result ) return response()->json([ 'status' => 'error', 'message' => 'Error al guardar el Banner, comunicaque con soporte para solucionar tu problema!' ]);
        
        return response()->json([
            'status' => 'success',
            'message' => 'Banner publicado Correctamente!',
            'banner' => $banner
        ]);
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
