<?php

namespace App\Http\Controllers;

use App\Models\restorePost;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class RestorePostController extends Controller
{

    public function index()
    {
        return restorePost::all();
    }


    public function create()
    {
        //
    }


    public function store(int $id, int $userid)
    {
        $restorePost = new restorePost();
        $date = date("Y-m-d");
        $restorePost->subscribes_id = $id;
        $restorePost->user_id = $userid;
        $restorePost->start_date = date("D j M Y");
        $restorePost->end_date = date('D j M Y', strtotime($date . ' + 15 days'));
        $restorePost->save();
        return response()->json(['msg' => 'success']);
    }

    public function expiredSubscribe()
    {
        $sub = restorePost::all();
        foreach ($sub as $job) {
            if (($job['end_date']) == (date("D j M Y"))) {
                $expiredSub = Subscribe::findOrFail($job['subscribes_id']);
                $expiredSub->expired = "Yes";
                $expiredSub->update();
            }
        }
    }

    public function show(restorePost $id)
    {
        return restorePost::where('subscribes_id', $id)->get();
    }


    public function edit(restorePost $restorePost)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $date = date("Y-m-d");
        $restorePost = restorePost::findorFail($id);
        $restorePost->start_date = $restorePost->end_date;
        $restorePost->end_date = date('D j M Y', strtotime($date . ' + 15 days'));
        $restorePost->update();
        return response()->json(['msg' => 'success']);
    }


    public function destroy(restorePost $id)
    {
        return restorePost::destroy($id);
    }
}
