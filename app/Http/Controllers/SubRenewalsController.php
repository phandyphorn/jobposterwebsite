<?php

namespace App\Http\Controllers;

use App\Models\Features;
use LucasDotVin\Soulbscription\Models\Subscription;
use LucasDotVin\Soulbscription\Models\Feature;
use App\Models\User;
use Illuminate\Http\Request;
use LucasDotVin\Soulbscription\Models\SubscriptionRenewal;
use Carbon\Carbon;

class SubRenewalsController extends Controller
{
    
    public function index()
    {
        return SubscriptionRenewal::all();

    }

   
    public function store(Request $request)
    {
    
        $renewal = new SubscriptionRenewal();
        $renewal->overdue = $request->overdue;
        $renewal->renewal = $request->renewal;
        $renewal->subscription_id = $request->sub_id;
        $renewal->save();
        if($request->overdue == 1){
            app('App\Http\Controllers\SubscribeController')->addDays($request->sub_id);
        }

        return response()->json(['mg'=>'renewal successfully']);

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
        return SubscriptionRenewal::destroy($id);
    }
}
