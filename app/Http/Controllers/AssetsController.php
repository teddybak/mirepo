<?php

namespace App\Http\Controllers;

use App\AssetType;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Asset;
use Illuminate\Support\Facades\DB;


class AssetsController extends Controller
{

    public function index()
    {
        //Envia a la pagina principal para realizar las busquedas
        return view('assets.first');
    }

    public function store(Request $request)
    {

        //Recibe los datos recibidos por el formulario de entrada los procesa y los envia a la vista 
        if ($request->min_price <= $request->max_price) {

            if ($request->min_price == 0 && $request->max_price == 0) {

                $request->max_price = 2000000;
            }

            $result = Asset::select('assets.id', 'assets.asset_type', 'assets.price_sold', 'location.location', 'assets_type.type')
                ->join('location', 'assets.location_id', '=', 'location.id')
                ->join('assets_type', 'assets.asset_type', '=', 'assets_type.id')
                ->where('location.location', '=', $request->location)
                ->where('assets_type.type', '=', $request->type)
                ->where('assets.price_sold', '>', $request->min_price)
                ->where('assets.price_sold', '<', $request->max_price)
                ->orderBy('assets.price_sold', 'asc')
                ->get();

            return view('assets.main')
                ->with('result', $result)
                ->with('min_price', $request->min_price)
                ->with('max_price', $request->max_price)
                ->with('loc', $request->location)
                ->with('asset_type',$request->type);
        } else {

            return view('assets.fail');
        }
    }

    public function show($id)
    {
        
        $area = Asset::find($id)->location_id;
        $statistics = DB::table('assets')
            ->select('location.location', 'assets_type.type', DB::raw('avg(assets.price_sold) as sumprecio'), DB::raw('COUNT(assets.id) as total'))
            ->where('location.id', '=', $area)
            ->join('assets_type', 'assets_type.id', '=', 'assets.asset_type')
            ->join('location', 'location.id', '=', 'assets.location_id')
            ->groupBy('assets_type.type')
            ->get();


        $pictures = Image::select('images.description', 'images.id')
            ->where('images.id', '=', $id)
            ->get();


        $show_asset = Asset::select('assets.id', 'assets.long', 'assets.lat', 'assets.asset_type', 'assets.price_sold', 'location.location', 'location.id', 'assets_type.type', 'assets.description')
            ->join('location', 'assets.location_id', '=', 'location.id')
            ->join('assets_type', 'assets.asset_type', '=', 'assets_type.id')
            ->where('assets.id', '=', $id)
            ->get();
        
        
        return view('assets.single')
            ->with('show_asset', $show_asset)
            ->with('pictures', $pictures)
            ->with('statistics', $statistics);
    }
    

    public function gmapsearch()
    {
        return view('assets.gmapsearch');
    }


    public function gmapsearchresult(Request $request)
    {

        $type       = $request->type;
        $location   = $request->location;
        $min_price  = $request->min_price;
        $max_price  = $request->max_price;
        $type_rs    = $request->type;
        $num_beds   = $request->num_beds;

        if (!isset($type)){
           return view('assets.empty');
        }

        $array_asset = array();
        foreach ($type as $valor) {
            $array_asset[] = $valor;
        }


        $array_location = array();
        foreach ($location as $loc) {
            $array_location [] = $loc;
        }




        if ($request->min_price == 0 && $request->max_price == 0) {
            $max_price = 2000000;
        }


        $show_asset = Asset::select(
            'assets.id as asid', 'assets.long', 'assets.lat', 'assets.asset_type as assettype', 'assets.price_sold',
            'location.location','location.id','images.description',
            'assets_type.type as astype'
        )
            ->join('location', 'assets.location_id', '=', 'location.id')
            ->join('images', 'images.id', '=', 'assets.id')
            ->join('assets_type', 'assets.asset_type', '=', 'assets_type.id')
            ->whereBetween('assets.price_sold', [$min_price, $max_price])
            ->whereIn('assets_type.type', $array_asset)
            ->whereIn('location.location', $array_location)
            ->orderBy('asid', 'asc')
            ->get( 'assets.id');




            return view('assets.gmapsearchresult', compact(['show_asset']));




    }



    public function search(Request $search)   {
        $cadena = $search->cadena;
        return view('assets.search', compact(['cadena']));
    }



    public function prices(){

        $type_id1 = DB::table('assets')
            ->select('location.location', 'assets_type.type', DB::raw('avg(assets.price_sold) as sumprecio'), DB::raw('COUNT(assets.id) as total'))
            ->join('assets_type', 'assets_type.id', '=', 'assets.asset_type')
            ->join('location', 'location.id', '=', 'assets.location_id')
            ->where('assets_type.id','=','1')
            ->groupBy('location.location')
            ->get();


        $type_id2 = DB::table('assets')
            ->select('location.location', 'assets_type.type', DB::raw('avg(assets.price_sold) as sumprecio'), DB::raw('COUNT(assets.id) as total'))
            ->join('assets_type', 'assets_type.id', '=', 'assets.asset_type')
            ->join('location', 'location.id', '=', 'assets.location_id')
            ->where('assets_type.id','=','1')
            ->groupBy('location.location')
            ->get();


        $type_id3 = DB::table('assets')
            ->select('location.location', 'assets_type.type', DB::raw('avg(assets.price_sold) as sumprecio'), DB::raw('COUNT(assets.id) as total'))
            ->join('assets_type', 'assets_type.id', '=', 'assets.asset_type')
            ->join('location', 'location.id', '=', 'assets.location_id')
            ->where('assets_type.id','=','2')
            ->groupBy('location.location')
            ->get();


        $type_id4 = DB::table('assets')
            ->select('location.location', 'assets_type.type', DB::raw('avg(assets.price_sold) as sumprecio'), DB::raw('COUNT(assets.id) as total'))
            ->join('assets_type', 'assets_type.id', '=', 'assets.asset_type')
            ->join('location', 'location.id', '=', 'assets.location_id')
            ->where('assets_type.id','=','2')
            ->groupBy('location.location')
            ->get();




        return view('assets.prices')

            ->with('type_id1', $type_id1)
            ->with('type_id2', $type_id2)
            ->with('type_id3', $type_id3)
            ->with('type_id4', $type_id4);
    }

    public function shares(){
        return view('assets.prices');
    }

    public function rent(){
        return view('assets.rent');
    }

    public function invest(){
        return view('assets.invest');
    }

    public function sold(){
        return view('assets.sold');
    }

}