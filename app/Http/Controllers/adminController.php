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

    /*CLP*/

    public function clp() {
        $data = DB::table('clps')->paginate(10);
        return view('adminpanel/clp/clps',['data'=>$data]);
    }

    public function addclp() {
        return view('adminpanel/clp/addclp');
    }

    public function updateclp($id) {
        $data = DB::table('clps')->where('id',$id)->first();
        return viaw('adminpanel/clp/updateclp',['data'=>$data]);
    }

    /*Posts*/

    public function posts() {
        $data = DB::table('posts')->paginate(20);
                foreach ($data as $post) { // sayı halinde olan category numaralarını yazıya çevirme
                    $categories = explode(',', $post->category_id);
                    foreach ($categories as $cat) {
                        $postcat = DB::table('clps')->where('type','Category')->where('id',$cat)->value('title');
                        $postcategories[] = $postcat;
                        $postcat = implode(',', $postcategories);
                    }
                    $post->category_id = $postcat;
                    $postcategories=[];
                }

                foreach ($data as $post) {
                    $platforms = explode(',', $post->platform_id);
                    foreach ($platforms as $platf) {
                        $postplat = DB::table('clps')->where('type','Platform')->where('id',$platf)->value('title');
                        $postplatforms[] = $postplat;
                        $postplat = implode(',', $postplatforms);
                    }
                    $post->platform_id = $postplat;
                    $postplatforms=[];
                }

                return view('adminpanel/posts/posts',['data'=>$data]);
            }

            public function addpost() {
                $cat = DB::table('clps')->where('type','LIKE','Category')->get();
                $plat = DB::table('clps')->where('type','LIKE','Platform')->get();
                $lang = DB::table('clps')->where('type','LIKE','Language')->get();
                return view('adminpanel/posts/addpost',['cat'=>$cat,'plat'=>$plat,'lang'=>$lang]);
            }

            public function updatepost($id) {
                $data = DB::table('posts')->where('id',$id)->first();
                $categories = explode(',', $data->category_id);
                $languages = explode(',', $data->language_id);
                $platforms = explode(',', $data->platform_id);
                $images = explode(',', $data->images);
                $videos = explode(',', $data->videos);
                $category = DB::table('clps')->where('type','Category')->get();
                $language = DB::table('clps')->where('type','Language')->get();
                $platform = DB::table('clps')->where('type','Platform')->get();
                return view('adminpanel/posts/updatepost',[
                    'data'=>$data,
                    'category' =>$category,
                    'language'=>$language,
                    'platform'=>$platform,
                    'categories'=>$categories,
                    'languages'=>$languages,
                    'platforms'=>$platforms,
                    'images'=>$images,
                    'videos'=>$videos                
                ]);
            }
        }   
