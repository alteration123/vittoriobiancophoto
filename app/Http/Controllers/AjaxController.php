<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{

    public function ajaxLoadActorById(Request $request){
        $actorId = $request->input('actorId');

        $actor = Actor::query()
            ->where('id', 'LIKE', $actorId)
            ->get();
        $actor->makeHidden(['created_at','updated_at']);

        return response()->json(['actor' => $actor]);
    }

    public function ajaxLoadActorsIdsByName(Request $request){
        $actorName = $request->input('actorName');

        $actors = Actor::query()
            ->where('name', 'LIKE', "%{$actorName}%")
            ->select('id')
            ->orderBy('name')
            ->get();
        $actors->makeHidden(['created_at','updated_at']);

        return response()->json(['actors' => $actors]);
    }

    public function ajaxLoadActorsIds(Request $request){
        $actorsQuantity = $request->input('actorsQuantity');

        /*
        $actors = Actor::query()
            ->select('id')
            ->orderBy('id')
            ->get();
        $actors->makeHidden(['created_at','updated_at']);
        */

        $actors = DB::table('actors')
            ->select('id')
            ->orderBy('id')
            ->take($actorsQuantity)
            ->get();

        $actors->makeHidden(['created_at','updated_at']);


        return response()->json(['actors' => $actors]);
    }

    public function ajaxLoadActorsByFilter(Request $request){
        $criteria = $request->input('criteria');

        $numberOfElements = $criteria[0];
        $numberOfFilters = $criteria[1];
        $tableName = $criteria[2];

        $actors = DB::table($tableName);

        for ($i=3;$i<3+$numberOfFilters*3;$i=$i+3) {
            $actors = $actors->where($criteria[$i], $criteria[$i+1], $criteria[$i+2]);
        }

        if($numberOfElements!=null&&$numberOfElements>0&&$numberOfElements!="undefined"){
            $actors = $actors->take($numberOfElements);
        }

        if ($criteria[3]==""||$criteria[3]==null){
            $orderBy = "id";
        }
        else{
            $orderBy = $criteria[3];
        }

        $actors = $actors->select('id');
        $actors = $actors->orderBy($orderBy);
        $actors = $actors->get();

        return response()->json(['actors' => $actors]);
    }

}
