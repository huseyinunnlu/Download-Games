<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
    	return view('frontend.index');
    }

    public function __construct() {
    	$data = DB::table('settings')->first();
    	$data->social = explode(',', $data->social);
    	$data->icon = explode(',', $data->icon);

    	view()->share([
    		'data'=>$data,
    	]);
    }
}
