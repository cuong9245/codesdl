<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tour;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;

class Basecontroller extends AppBaseController
{
    public function __construct()
    {	
    	$tour = Tour::get();
		$now  = Carbon::now();
    	
    	View::share('tour',$tour);

    	View::share('now',$now);
    }

}
