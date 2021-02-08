<?php

namespace App\Http\Controllers;

use App\Http\Request as HttpRequest; 
use Illuminate\Support\Facades\Input; 
use Request; 
use DB; 
use Session;


class crudController extends Controller
{
     	public function insertData() {
 		$data = Request::except('_token');
 		$tbl = decrypt($data['tbl']);
 		unset($data['tbl']);
 		$data['created_at'] = date('Y-m-d H:i:s');

        if (Request::has('social')) {
            $data['social'] = implode(',',$data['social']);
        }

        if (Request::has('icon')) {
            $data['icon'] = implode(',',$data['icon']);
        }        

 		//Category img vs bolumu
/*
        if (Request::has('images')) {
            $data['images'] = implode(',',$data['images']);
        }

        if (Request::has('category_id')) {
            $data['category_id'] = implode(',',$data['category_id']);
        }
*/
 		DB::table($tbl)->insert($data);
 		session::flash('mesagge', 'Data inserted successfully');
 		return redirect()->back();
 	}

 	 	public function updateData() {

        $data = Request::except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['updated_at'] = date('Y-m-d H:i:s');

        if (Request::has('social')) {
            $data['social'] = implode(',',$data['social']);
        }

        if (Request::has('icon')) {
            $data['icon'] = implode(',',$data['icon']);
        }
        /*

        if (Request::has('category_id')) {
            $data['category_id'] = implode(',',$data['category_id']);
        }

        if (Request::has('images')) {
            $data['images'] = implode(',',$data['images']);
        }
        */

        DB::table($tbl)->where(key($data),reset($data))->update($data);
        session::flash('message', 'Data updated successfully');
        return redirect()->back();
  
 	}

    public function multipleDelete() {
        $data=Request::except('_token');
        if($data['bulk-action']== 0) {
            session::flash('message','Please select action you want to perform');
            return redirect()->back();
        }
        $tbl = decrypt($data['tbl']);
        $tblid = decrypt($data['tblid']);
        if(empty($data['select-data'])) {
            session::flash('message','Please select data you want to delete');
            return redirect()->back();
        }
        $ids=$data['select-data'];
        foreach ($ids as $id) {
            DB::table($tbl)->where($tblid,$id)->delete();
        }
        session::flash('message','Data deleted Succesfuly');
        return redirect()->back();
    }

}
