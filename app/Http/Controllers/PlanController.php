<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\UserPlan;


class PlanController extends Controller
{
    public function __construct() {
        $this->middleware('jwt.auth', ['except' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $plans = Plan::all();
        $total = Plan::all()->count();

        for ($i = 0; $i < $total; $i++) {
            $plans[$i]->benefits = explode(', ', $plans[$i]->benefits);
        }

        return response()->json([
            'status' => 'success',
            'plans' => $plans
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required'
        ]);

        if ($validator->fails()) {
            // return redirect('')->with('status', 'error')->with('message', 'Error:  Faltan datos');
            return response()->json(['status' => 'error', 'message' => 'Faltan Datos'], 400);
        }

        $plan = Plan::create($request->all());

        // return redirect('')->with('status', 'success')->with('message', '¡Usuario registrado correctamente!');
        return response()->json(['status' => 'success', 'plan' => $plan], 200);
    }

    public function subscribe(Request $request) {
        $planId = $request->input('plan_id');
        $userId = $request->input('user_id');

        $startDate = Carbon::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'));
        $finishDate = Carbon::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'));

        // ? Comprobar que el usuario no este con el mismo plan
        $subscribed = DB::table('users_plans')->where('user_id', '=', $userId)->where('plan_id', '=', $planId)->count();

        
        if ($subscribed > 0) return response()->json(['status' => 'warning', 'message' => 'Ya estás suscrito a este plan'], 200);
        
        switch ($planId) {
                // ? Basic
            case 1:
                $count = 5;
                $finishDate = $finishDate->addDays(3);
                break;
                // ? Bussines
            case 2:
                $count = 4;
                $finishDate = $finishDate->addDays(5);
                break;
                // ? Enterprise
            case 3:
                $count = 3;
                $finishDate = $finishDate->addDays(7);
                break;
            default:
                $count = 0;
                $finishDate = $finishDate->addDays(0);
                break;
        }

        try {
            UserPlan::create([
                'user_id' => $userId,
                'plan_id' => $planId,
                'subscribed' => true,
                'post_count' => $count,
                'start_date' => $startDate,
                'finish_date' => $finishDate,
            ]);

            return response()->json(['status' => 'success', 'message' => 'Suscripción realizada correctamente'], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message' => 'Error al suscribirse, intente más tarde'], 500);
        }
    }
}
