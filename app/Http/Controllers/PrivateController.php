<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Appoitment;
use App\Asset;
use Auth;
 

class PrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }
    public function index(){
        $current_user =   Auth::user()->id;

        $user_email = Auth::user()->email;
        if($user_email == 'admin@admin.com' ){
            return redirect('/panel');
        }


        $result = Appoitment::select(
            'appoitments.user_id','appoitments.assets_id','appoitments.date','appoitments.comment','appoitments.idapp',
            'assets.location_id','assets.id','assets.asset_type','assets_type.type',
            'location.location')

            ->join('assets', 'assets.id', '=', 'appoitments.assets_id')
            ->join('location', 'assets.location_id', '=', 'location.id')
            ->join('assets_type', 'assets.asset_type', '=', 'assets_type.id')

            ->where('appoitments.user_id', '=' ,$current_user)
            ->orderBy('appoitments.date')
            ->get();

        return view('private.index')->with('result',$result); 
    }
    
    
    public function booking($idasset,$iduser){  
          return view('private.detaills')
           ->with('idasset',$idasset)
           ->with('iduser',$iduser);                  
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
        
        $appo = new \App\Appoitment();
        $appo->assets_id = $request->asset_id;
        $appo->user_id = $request->user_id;    
        $appo->comment = $request->reference; 
        $cadena = $request->date . " ". $request->time;
        $appo->date = $cadena;
        $appo->save();
        
        return redirect()->guest('/home');
        
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
    public function destroy($idapp)
    {
         return view('private.destroy')->with('idapp',$idapp);
    }
}
