<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Promotion;
use App\Models\Tour;
use Illuminate\Support\Facades\Storage;
use App\Models\places;
use App\Models\imageTour;
use App\Models\ProgramTour;
use App\Models\GroupTour;
use App\Models\News;
use File;
use Flash;
use Mail;
use Validator;
use App\Models\city;
use App\Models\commentClient;
use App\Models\faqs;
use App\Models\ticket;

class FrontendController extends Controller
{
    public function home()
    {
    	return view('Frontend.home');
    }

    public function homes()
    {
        $now = \Carbon\Carbon::now();

        $destination = city::orderBy('id', 'asc')->take(5)->get();

        $tour        = Tour::orderBy('departureDay','asc')->take(4)->get(); 

        $tourLocal   = Tour::inRandomOrder()->limit(4)->get();

        return view('Frontend.fronte2.homes',compact('destination','tour','tourLocal','now'));
    }

    public function sendLikeComment(Request $request)
    {
        if ($request->ajax()){

            $id      = $request->id;

            $comment = commentClient::find($id);

            $comment->liked = $comment->liked+1;

            $comment->save();

            $liked = $comment->liked;

            return Response($liked);

        }    
    }

    public function bookingTicket(Request $request)
    {

         // If the captcha is valid 
        session_start();
        if ($request->ajax()){

            if ($request->captcha== $_SESSION['captchaticket']){

                $name   = $request->name ;
                $email  = $request->email;
                $phone  = $request->phone ;
                $departure = $request->departure;
                $return = $request->return;
                $GLOBALS['email'] = $email;
                $ticket  = $request->ticketName;
                $price   = $request->price;
                $contactBy =  $request->contactby;
               
                
                Mail::send('Frontend.email-book', array('name'=>$name, 'phone'=>$phone, 'email'=>$email,'ticket'=>$ticket, 'departure'=>$departure, 'return'=>$return,'contactBy'=>$contactBy,'price'=>$price), 
            
                function($message){
                  
                   $message->to($GLOBALS['email'], 'Admin-FarEarstour')->subject('bookingTicket');
                    
                });
                $data = "success";
                return  response($data);
            }   
            else{ 
                $data = "Captcha false";
                return response($data);
            }   

        };    
            
    }

    public function bookingTour(Request $request)
    {
        session_start();
        if ($request->ajax()){
            if ($request->captcha== $_SESSION['captchabooking']){

                $name      = $request->name ;
                $email     = $request->email;
                $phone     = $request->phone ;
                $departure = $request->departure;
                $cityarive = $request->cityarive;
                $requests  = $request->requests;
                $acc       =  $request->acc;
                $transport =  $request->transport;
                $contactby =  $request->contactby;
                $GLOBALS['email'] = $email;

                Mail::send('Frontend.email-book-normal', array('name'=>$name, 'phone'=>$phone, 'email'=>$email,'cityarive'=>$cityarive,'request'=>$requests,'contactby'=>$contactby),

                function($message){
                  
                   $message->to($GLOBALS['email'], 'Admin-FarEarstour')->subject('bookingTour');

                });
            
            }
            else{
                $data = "Captcha false";
                return response($data);
            }    
        }   
    }

    
    public function contact(){
        
       return view('Frontend.fronte2.contacts');  
    }

    public function bookings($id)
    {

        $tourId   =  Tour::where('url_rewrite', $id)->first();
        
        if (empty($tourId)) {
            return abort('404');
        }
        else{
            return view('Frontend.fronte2.booking');
        }
    }

    public function becomeLocalExpress()
    {
        return view('Frontend.fronte2.becomelocal');
    }

    public function tour()
    {

        $tour = tour::all();

        foreach ($tour as $key=> $value) {
            $image = imageTour::where('imageTour_id',  $value->id)->first();

            $tour[$key]->image = $image->image;
        }
        return view('Frontend.fronte2.tour',compact('tour'));
    }

    public function aboutus()
    {
        return view('Frontend.fronte2.aboutUs');
    }

     public function blog()
    {
        $new = News::paginate('5');
        return view('Frontend.fronte2.blog',compact('new'));
    }

    
    public function tourDetails(){
        
        return view('Frontend.fronte2.tour-detail');  
    }    

    public function newsDetail($id)
    {   
        $news         = News::where('url_rewrite',$id)->first();

        if ($news) {
           $newsDetail   = News::findOrFail($news->id);
            return view('Frontend.fronte2.blogDetail',compact('newsDetail'));
        }
        else{
            return abort('404');
        }
        
    }
    
    
    public function tourDetailss($id){
        
        $tourId   =  Tour::where('url_rewrite', $id)->first();
        
        if (empty($tourId)) {
            return abort('404');
        }
        else{
            if (!empty($tourId->id)) {
                 session_start();
                // image lien quan tour
                $image      = imageTour::where('imageTour_id', $tourId->id)->get(); 
                $tour       = Tour::inRandomOrder()->limit(4)->get();
                $ProgramTour= ProgramTour::where('tour_id', $tourId->id)->get();
               
                $_SESSION['key'][] = $tourId;
    
                session(['key' => array_unique($_SESSION['key'])]);
    
                return view('Frontend.fronte2.tour-detail',compact('tourId', 'image','tour','ProgramTour'));
            }
            else{
                return abort(404);
            }
        }
        
    }    

    public function ticketTrain()
    {
        $tourLocal   = Tour::inRandomOrder()->limit(4)->get();
        return view('Frontend.fronte2.ticketTrain',compact('tourLocal'));    
    }
    
    public function faq(){


        $faqs = faqs::paginate(5);

        return view('Frontend.fronte2.faq',compact('faqs'));  
    }


    public function promotionShows()
    {
    	$promotions = Promotion::all();
    	return view('Frontend.promotion',compact('promotions'));
    }

    public function promotionDetail($id)
    {
    	$promotion  = Promotion::where('url_rewrite', $id)->first();

    	if (empty($promotion)) {
    		return abort('404');
    	}
    	$promotions = Promotion::find($promotion->id);

    	return view('Frontend.promotionDetail',compact('promotions'));
    }
    //xóa token trên url
    public function findtour(Request $request)
    {
		if (!empty($_GET['_token'])) {
			if ($request->search =="") {
	

				return redirect()->back()->with('messageInfomation', 'bạn chưa nhập thông tin!');;
			}
			return redirect("/search/".$request->search);
		}
    	
    }
    //search dữ liệu
    public function search($id)
    {
    	$tours = Tour::where('name','like', $id)->first();

    	$place = places::where('name', 'like',$id)->get();

    	// if (empty($tour)&&empty($place)) {

    	// 	return abort('404');
    	// }


    	if (isset($tours)) {
    		
    		$tour = Tour::where('name','like', $id)->get();
    		return view('Frontend.search',compact('tour'));
    	}

    	else{
    		foreach ($place as $places) {
    			
    			$tour[] = Tour::find($places->places_id);
    		}
    		return view('Frontend.search',compact('tour'));

    	}
    	
    }

    public function result()
    {
    	return view('Frontend.result');
    }

    public function contacts(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'txtHoTen'                  => 'required',   
            'placeholder'               => 'required',
            'mobile'                    => 'required',   
            'pers'                      => 'required',
            'address'                   => 'required',   
            'title'                     => 'required',
            'feedback'                  => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else{
            $name     = $request->txtHoTen;
            $email    = $request->txtEmail;
            $mobile   = $request->txtDienThoai;
            $pers     = $request->txtSoKhach;
            $address  = $request->txtDiaChi;
            $title    = $request->txtTieuDe;
            $feedback = $request->txtNoiDung;

            $GLOBALS['email'] = $request->Email;
            Mail::send('Frontend.mailCT', array('name'=>$name,'email'=>$email, 'content'=>$feedback,'subject'=>$title), 

            function($message){
              
               $message->to($GLOBALS['email'], 'Admin-FarEarstour')->subject('contact');
            });
        } 
    }

    public function groupTourShow($id)
    {
        
        $url       = GroupTour::where('url_rewrite', $id)->first();

        if(empty($url)){

            return abort('404');

        }

        $GroupTour = Tour::where('groupTour', $url->id)->get();

        return view('Frontend.groupTour', compact('GroupTour'));

    }

    public function getNameAddress(Request $request)
    {
        $ticket  = ticket::All();
        foreach ($ticket as $key) {
            $from[] = $key->from;
            $to[]   = $key->to;
            # code...
        }
        $name = array_unique(array_merge($from,$to));

        if ($request->ajax()){

            return response($name);
        }    
       
    }

    public function getPriceTicket(Request $request)
    {
        if ($request->ajax()){

            $price = ticket::where('from',$request->from)->Where('to',$request->to)->get();

            $error = "loi";

            if (count($price)>0) {

                return response($price);

            }
            else{
                return response($error);
            }

        }   
    }
    public function filterByPrice(Request $request)
    {
        if ($request->ajax()){
            $from   =  $request->from;
            $to     =  $request->to;
            $tour = Tour::where('discountPrice','>=',(int)$from)->where('discountPrice','<=',(int)$to)->get();
            foreach ($tour as $key=> $value) {
                $image = imageTour::where('imageTour_id',  $value->id)->first();

                $tour[$key]->image = $image->image;
            }
 
            return response($tour);
        }    

    }

    // public function filter()
    // {
    //     $tour = Tour::where('discountPrice','>=',350)->where('discountPrice','<=',350)->get();
     
    //     foreach ($tour as $key=> $value) {
    //         $image = imageTour::where('imageTour_id',  $value->id)->first();

    //         $tour[$key]->image = $image->image;
    //     }
 
       

    // }
}
