<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use App\Http\Request as HttpRequest; 
use Illuminate\Support\Facades\Input; 
use Request; 
use Session;

class frontController extends Controller
{
    public function index(){
        $data = DB::table('posts')->where('status','Active')->orderBy('created_at','DESC')->get();
        $index = DB::table('posts')->where('category_id','LIKE','%14%')->where('status','Active')->get();
        return view('frontend.index',['index'=>$index,'data'=>$data]);
    }

    public function sort() {
        $sort = Request::except('_token');
        $index = DB::table('posts')->where('category_id','LIKE','%14%')->where('status','Active')->get();

        if($sort['sorts'] == 0 && empty($sort['search'])){
            return redirect('/');
        }
        elseif ($sort['sorts'] == 1) {
            $data = DB::table('posts')->where('status','Active')->orderBy('created_at','asc')->get();
        }elseif ($sort['sorts'] == 2) {
            $data = DB::table('posts')->where('status','Active')->orderBy('created_at','desc')->get();
        }else{
            $data = DB::table('posts')->where('status','Active')->orderBy('views','desc')->get();
        }

        return view('frontend.index',['data'=>$data,'index'=>$index]);
    }

    public function category($id){ 
        $cat = DB::table('clps')->where('type','Category')->where('id',$id)->first();
       // $sorts = Request::except('_token');
            $data = DB::table('posts')->where('category_id','LIKE','%'.$cat->id.'%')->where('status','Active')->get();
        //if ($sort['sorts']== 0 ) {
        //
        //}elseif($sort['sorts'] == 0 && empty($sort['search'])){
        //    return redirect('/category/$id');
        //}
        //elseif ($sort['sorts'] == 1) {
        //    $data = DB::table('posts')->where('status','Active')->orderBy('created_at','asc')->get();
        //}elseif ($sort['sorts'] == 2) {
        //     $data = DB::table('posts')->where('status','Active')->orderBy('created_at','desc')->get();
        //}else{
        //    $data = DB::table('posts')->where('status','Active')->orderBy('views','desc')->get();
        //}


        $index = DB::table('posts')->where('category_id','LIKE','%14%')->where('status','Active')->get();
        return view('frontend.index',['index'=>$index,'data'=>$data]);
    }


    public function article($id) {
        $data = DB::table('posts')->where('id',$id)->first();
        $imgs = explode(',', $data->images);
        DB::table('posts')->where('id',$id)->increment('views');
        $categories = DB::table('clps')->where('type','Category')->where('status','Active')->get();
        $categories = explode(',', $data->category_id);
        foreach ($categories as $cat) {
            $postcat = DB::table('clps')->where('type','Category')->where('id',$cat)->value('title');
            $postcategories[] = $postcat;
            $postcat = implode(',', $postcategories);
        }
        $data->category_id = $postcat;
        $postcategories=[];

        $platforms = explode(',', $data->platform_id);
        foreach ($platforms as $platf) {
            $postplat = DB::table('clps')->where('type','Platform')->where('id',$platf)->value('title');
            $postplatforms[] = $postplat;
            $postplat = implode(',', $postplatforms);
        }
        $data->platform_id = $postplat;
        $postplatforms=[];

        $languages = explode(',', $data->language_id);
        foreach ($languages as $lang) {
            $postlang = DB::table('clps')->where('type','Language')->where('id',$lang)->value('title');
            $postlanguages[] = $postlang;
            $postlang = implode(',', $postlanguages);
        }
        $data->language_id = $postlang;
        $postlanguages=[];


        return view('frontend.articledesc',['data'=>$data,'imgs'=>$imgs,'categories'=>$categories]);
    }

    public function articleGallery($id) {

        $data = DB::table('posts')->where('id',$id)->first();
        $imgs = explode(',', $data->images);
        $vids = explode(',', $data->videos);

        $categories = explode(',', $data->category_id);
        foreach ($categories as $cat) {
            $postcat = DB::table('clps')->where('type','Category')->where('id',$cat)->value('title');
            $postcategories[] = $postcat;
            $postcat = implode(',', $postcategories);
        }
        $data->category_id = $postcat;
        $postcategories=[];

        $platforms = explode(',', $data->platform_id);
        foreach ($platforms as $platf) {
            $postplat = DB::table('clps')->where('type','Platform')->where('id',$platf)->value('title');
            $postplatforms[] = $postplat;
            $postplat = implode(',', $postplatforms);
        }
        $data->platform_id = $postplat;
        $postplatforms=[];

        $languages = explode(',', $data->language_id);
        foreach ($languages as $lang) {
            $postlang = DB::table('clps')->where('type','Language')->where('id',$lang)->value('title');
            $postlanguages[] = $postlang;
            $postlang = implode(',', $postlanguages);
        }
        $data->language_id = $postlang;
        $postlanguages=[];

        return view('frontend.articlegallery',['data'=>$data,'imgs'=>$imgs,'vids'=>$vids]);
    }

    public function articleSysreq($id) {
        $data = DB::table('posts')->where('id',$id)->first();
        $imgs = explode(',', $data->images);
        $vids = explode(',', $data->videos);

        $categories = explode(',', $data->category_id);
        foreach ($categories as $cat) {
            $postcat = DB::table('clps')->where('type','Category')->where('id',$cat)->value('title');
            $postcategories[] = $postcat;
            $postcat = implode(',', $postcategories);
        }
        $data->category_id = $postcat;
        $postcategories=[];

        $platforms = explode(',', $data->platform_id);
        foreach ($platforms as $platf) {
            $postplat = DB::table('clps')->where('type','Platform')->where('id',$platf)->value('title');
            $postplatforms[] = $postplat;
            $postplat = implode(',', $postplatforms);
        }
        $data->platform_id = $postplat;
        $postplatforms=[];

        $languages = explode(',', $data->language_id);
        foreach ($languages as $lang) {
            $postlang = DB::table('clps')->where('type','Language')->where('id',$lang)->value('title');
            $postlanguages[] = $postlang;
            $postlang = implode(',', $postlanguages);
        }
        $data->language_id = $postlang;
        $postlanguages=[];                           
        return view('frontend.articlesysreq',['data'=>$data,'imgs'=>$imgs,'vids'=>$vids]);
    }



    public function __construct() {
     $data = DB::table('settings')->first();
     $data->social = explode(',', $data->social);
     $data->icon = explode(',', $data->icon);
     $cats = DB::table('clps')->where('type','Category')->where('status','Active')->get();

     view()->share([
      'data'=>$data,
      'cats'=>$cats,
  ]);
 }
}
