<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB; 
use Session;
class adminController extends Controller
{
    public function index(){
    	return view('adminpanel.index');
    }

    public function settings(){
    	$data = DB::table('settings')->first();

    	if ($data) {
    		$data->social = explode(",", $data->social);
    		$data->icon = explode(",", $data->icon);
    	}

    	return view('adminpanel.settings.settings',['data'=>$data]);
    }

    public function clp() {
        $data = DB::table('clps')->get();
        return view('adminpanel/clp/clps',['data'=>$data]);
    }

    public function addclp() {
        return view('adminpanel/clp/addclp');
    }

    public function updateclp($id) {
        $data = DB::table('clps')->where('id',$id)->first();
        return view('adminpanel/clp/updateclp',['data'=>$data]);
    }

}
