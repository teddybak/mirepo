<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Appoitment;
use App\Asset;
use Auth;

class HomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
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
            ->get();

        return view('private.index')->with('result',$result);
    }

}


