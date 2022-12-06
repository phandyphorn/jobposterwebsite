<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LucasDotVin\Soulbscription\Models\FeaturePlan;

class FeaturePlanController extends Controller
{

    public function index()
    {
        return FeaturePlan::get();
    }


    public function store($feature_id, $plan_id, $charge)
    {
        $feature = new FeaturePlan();
        $feature->plan_id = $plan_id;
        $feature->feature_id = $feature_id;
        $feature->charges = $charge;
        $feature->save();
        return response()->json(['msg' => 'success']);
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
