<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        return view('private.admin_template');
    }


    public function users(){
        $users = \App\User::all();

        return view('private.users')->with('users',$users);
    }
    
    
    
    
       public function contar($area){
        $statistics = DB::table('assets')
            ->select('location.location','assets_type.type' ,DB::raw('avg(assets.price) as  number_format(sumprecio,3)'),DB::raw('COUNT(assets.id) as total'))
            ->where ('location.id','=',$area)
            ->join('assets_type', 'assets_type.id', '=', 'assets.asset_type')
            ->join('location', 'location.id', '=', 'assets.location_id')
             ->groupBy('assets_type.type')
            ->get();
            return view('private.statistics')->with('statistics',$statistics);
        }



}
