<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Promotion;

class promotionController extends Controller
{
    public function shows()
    {
    	$promotions = Promotion::paginate(5);
    	return view('Frontend.promotion',compact('promotions'));
    }
}
