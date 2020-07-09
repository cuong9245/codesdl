<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class newsController extends Controller
{
    public function listNews()
    {
    	$news = News::paginate(5);
    	return view('Frontend.news',compact('news'));
    }
    public function newsDetail($id)
    {
    	$newsDetail  = News::where('url_rewrite',$id)->first();
    	$newsNew     = News::orderBy('id','asc')->take(5)->get();

    	// $string = preg_replace('([\s]+)', '', $newsDetail->TourRelated);

    	// $array = explode(',', $string);
    	
    	if (!empty($newsDetail)) {
    		return view('Frontend.tindetail',compact('newsDetail','newsNew'));
    	 	
    	} 
    	else{
    		return abort(404);
    	}
    	
    }
}
