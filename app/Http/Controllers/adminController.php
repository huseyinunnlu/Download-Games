<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
    	return view('adminpanel.index');
    }

    public function settings(){
    	//$data = DB::table('settings')->get();
    	return view('adminpanel.settings.settings'/*,['data'=>$data]*/);
    }
}
