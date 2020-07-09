<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Basecontroller;
use App\Models\Tour;
use App\Models\imageTour;
use App\Models\ProgramTour;
use App\Models\News;
use App\Models\city;
use Mail;
use Carbon\Carbon;
use Session;


class TourController extends Basecontroller
{
   	public function timeTour()
   	{
   	    $Tours = Tour::paginate(5);
   		return view('Frontend.timetour',compact('Tours'));
   	}

   	public function discountTour()
   	{
   		$payOnline = Tour::orderBy('percent', 'asc')->paginate(7); 
   		return view('Frontend.discount',compact('payOnline'));
   	}

   	public function tourDetail($id)
   	{

   		$tourId   =  Tour::where('url_rewrite', $id)->first();
        
        if (empty($tourId)) {
            return abort('404');
        }

        $newsNew  = News::get();
        // tìm tin tức liên quan đến tour
        foreach ($newsNew as $key => $giatri) {

            $bien[]  = $giatri->TourRelated;
        }

        for ($i=0; $i <count($bien) ; $i++) { 

            $barrays[] = explode(',', $bien[$i]);

        }


        
        foreach ($barrays as $key => $value) {

            if (is_numeric(array_search($tourId->id, $value))) {
                
                $thutu[] = $key;

            }

        }

        if (!empty($thutu)) {
            
            foreach ($thutu as $key=>$value) {

                $newsRelated[] = $newsNew[$value];
            }

        }

        if (!empty($tourId->id)) {
             session_start();
            // image lien quan tour
            $image      = imageTour::where('imageTour_id', $tourId->id)->get(); 
            $tour       = Tour::inRandomOrder()->limit(4)->get();
            $ProgramTour= ProgramTour::where('tour_id', $tourId->id)->get();
           

            $_SESSION['key'][] = $tourId;

            session(['key' => array_unique($_SESSION['key'])]);

            return view('Frontend.detail',compact('tourId', 'image','tour','ProgramTour','newsRelated'));
         }
         else{
            return abort(404);
         }
   	}
    public static function imageTourFirst($id)
    {
        $image  =  imageTour::where('imageTour_id', $id)->first();
        if (empty($image)) {
            $image ='';
        }
        return $image;
    }

    public function address($id)
    {
        $city = city::where('url_rewrite',$id)->first();
        if(empty($city)){
            return abort('404');
        }
        else{

            $now = Carbon::now();

            $cityTour = Tour::where('city',$city->id)->get();
            

            if(count($cityTour)>0){


                foreach ($cityTour as  $tours) {
                    $datetime = new Carbon($tours->departureDay.' '.$tours->departureTime);

                    if (strtotime($now) < strtotime($datetime)) {

                        $citys[] =   $tours;
                    }
                    
                   

                }
                 $citys = array();
            }
    
            else{

                $citys   = array();
            }    
            
            // print_r($citys);

            return view('Frontend.city',compact('citys', 'city'));

        }
    }

    public function bookTour(Request $request)
    {
        $name        = $request->contact_name;
        $email       = $request->email;
        $mobilephone =  $request->mobilephone;
        $phone       = $request->phone;
        $address     = $request->address;
        $note        =  $request->note;
        $pay         =  $request->pay;

        $GLOBALS['email'] = $email;
        if ($request->pay == "cash") {
            $GLOBALS['email'] = $email;

            Mail::send('Frontend.email-book-normal', array('name'=>$name,'email'=>$email, 'phone'=>$phone,'address'=>$address,'note'=>$note, 'mobilephone'=>$mobilephone), 

            function($message){
              
              $message->to($GLOBALS['email'], 'Admin-FarEarstour')->subject('travel Admin-FarEarstour');
            });
        }
        else{
            $_POST['vpc_Customer_Email']      = $request->email;
            $_POST['vpc_Merchant']            = 'FAREASTOUR';
            $_POST['vpc_AccessCode']          = '14589104';
            $SECURE_SECRET                    = 'BC9128747AA8F333257760E890DBF31B';
            $vpcURL                           = $_POST["virtualPaymentClientURL"] . "?";          
            unset($_POST["virtualPaymentClientURL"]);                
            $_POST['AgainLink']=urlencode($_SERVER['HTTP_REFERER']);  
            
            $md5HashData                       = ""; 

            
            $appendAmp = 0; 
            ksort ($_POST);   
            foreach($_POST as $key => $value) {                                      
                if (strlen($value) > 0) {               
                    if ($appendAmp == 0) {
                        $vpcURL .= urlencode($key) . '=' . urlencode($value);
                        $appendAmp = 1;
                    } else {
                        $vpcURL .= '&' . urlencode($key) . "=" . urlencode($value);
                    }                                                                    
                    if ((strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
                        $md5HashData .= $key . "=" . $value . "&";
                    }
                }
            }
            
            $md5HashData = rtrim($md5HashData, "&");    
            if (strlen($SECURE_SECRET) > 0) {   
                $vpcURL .= "&vpc_SecureHash=" . strtoupper(hash_hmac('SHA256', $md5HashData, pack('H*',$SECURE_SECRET)));
            } 
            
            session_start();
            $_SESSION[$request->vpc_OrderInfo] = array($request->email, $request->tourId);

            // print_r($vpcURL);                      
            return redirect($vpcURL);

        }
        
    }

    public function null2unknown($data) {
        if ($data == "") {
            return "No Value Returned";
        } else {
            return $data;
        }
    }
  
    public function getOnepay()
    {

        $SECURE_SECRET = "BC9128747AA8F333257760E890DBF31B";
        
        $vpc_Txn_Secure_Hash = $_GET["vpc_SecureHash"];
        $vpc_MerchTxnRef = $_GET["vpc_MerchTxnRef"];
        // $vpc_AcqResponseCode = $_GET["vpc_AcqResponseCode"];
        unset($_GET["vpc_SecureHash"]);
        // set a flag to indicate if hash has been validated
        $errorExists = false;
        
        if (strlen($SECURE_SECRET) > 0 && $_GET["vpc_TxnResponseCode"] != "7" && $_GET["vpc_TxnResponseCode"] != "No Value Returned") {

            ksort($_GET);
            //$md5HashData = $SECURE_SECRET;
            //khởi tạo chuỗi mã hóa rỗng
            $md5HashData = "";
            // sort all the incoming vpc response fields and leave out any with no value
            foreach ($_GET as $key => $value) {
        //        if ($key != "vpc_SecureHash" or strlen($value) > 0) {
        //            $md5HashData .= $value;
        //        }
        //      chỉ lấy các tham số bắt đầu bằng "vpc_" hoặc "user_" và khác trống và không phải chuỗi hash code trả về
                if ($key != "vpc_SecureHash" && (strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
                    $md5HashData .= $key . "=" . $value . "&";
                }
            }
        //  Xóa dấu & thừa cuối chuỗi dữ liệu
            $md5HashData = rtrim($md5HashData, "&");

        //    if (strtoupper ( $vpc_Txn_Secure_Hash ) == strtoupper ( md5 ( $md5HashData ) )) {
        //    Thay hàm tạo chuỗi mã hóa
            if (strtoupper ( $vpc_Txn_Secure_Hash ) == strtoupper(hash_hmac('SHA256', $md5HashData, pack('H*',$SECURE_SECRET)))) {
                // Secure Hash validation succeeded, add a data field to be displayed
                // later.
                $hashValidated = "CORRECT";
            } else {
                // Secure Hash validation failed, add a data field to be displayed
                // later.
                $hashValidated = "INVALID HASH";
            }
        } else {
            // Secure Hash was not validated, add a data field to be displayed later.
            $hashValidated = "INVALID HASH";
        }

        // Define Variables
        // ----------------
        // Extract the available receipt fields from the VPC Response
        // If not present then let the value be equal to 'No Value Returned'

        // Standard Receipt Data
        $amount = array_key_exists("vpc_Amount", $_GET)? $_GET["vpc_Amount"] : "No Value Returned";
        $locale =  array_key_exists("vpc_Locale", $_GET)? $_GET["vpc_Locale"] : "No Value Returned";
        $batchNo =  array_key_exists("vpc_BatchNo", $_GET) ? $_GET["vpc_BatchNo"] : "No Value Returned";
        $command =  array_key_exists("vpc_Command", $_GET)? $_GET["vpc_Command"] : "No Value Returned";
        $messages = array_key_exists("vpc_Message", $_GET)? $_GET["vpc_Message"] : "No Value Returned";
        $version =  array_key_exists("vpc_Version", $_GET)? $_GET["vpc_Version"] : "No Value Returned";
        $cardType =  array_key_exists("vpc_Card", $_GET) ? $_GET["vpc_Card"] : "No Value Returned"; 
        $orderInfo =  array_key_exists("vpc_OrderInfo", $_GET)? $_GET["vpc_OrderInfo"] : "No Value Returned";
        $receiptNo =   array_key_exists("vpc_ReceiptNo", $_GET) ? $_GET["vpc_ReceiptNo"] : "No Value Returned"; 

        $merchantID = array_key_exists("vpc_Merchant", $_GET) ? $_GET["vpc_Merchant"] : "No Value Returned";
        $authorizeID = array_key_exists("vpc_AuthorizeId", $_GET) ? $_GET["vpc_AuthorizeId"] : "No Value Returned";
        $merchTxnRef =  array_key_exists("vpc_MerchTxnRef", $_GET)? $_GET["vpc_MerchTxnRef"] : "No Value Returned";
        $transactionNo =   array_key_exists("vpc_AuthorizeId", $_GET) ? $_GET["vpc_AuthorizeId"] : "No Value Returned";
        $acqResponseCode =   array_key_exists("vpc_AcqResponseCode", $_GET) ? $_GET["vpc_AcqResponseCode"] : "No Value Returned";
    
        $txnResponseCode =  array_key_exists("vpc_TxnResponseCode", $_GET)? $_GET["vpc_TxnResponseCode"] : "No Value Returned";
        // 3-D Secure Data
        $verType = array_key_exists("vpc_VerType", $_GET) ? $_GET["vpc_VerType"] : "No Value Returned";
        $verStatus = array_key_exists("vpc_VerStatus", $_GET) ? $_GET["vpc_VerStatus"] : "No Value Returned";
        $token = array_key_exists("vpc_VerToken", $_GET) ? $_GET["vpc_VerToken"] : "No Value Returned";
        $verSecurLevel = array_key_exists("vpc_VerSecurityLevel", $_GET) ? $_GET["vpc_VerSecurityLevel"] : "No Value Returned";
        
        $idTour = array_key_exists("vpc_Customer_Id", $_GET) ? $_GET["vpc_Customer_Id"] : "No Value Returned";
        
        $enrolled = array_key_exists("vpc_3DSenrolled", $_GET) ? $_GET["vpc_3DSenrolled"] : "No Value Returned";
        $xid = array_key_exists("vpc_3DSXID", $_GET) ? $_GET["vpc_3DSXID"] : "No Value Returned";
        $acqECI = array_key_exists("vpc_3DSECI", $_GET) ? $_GET["vpc_3DSECI"] : "No Value Returned";
        $authStatus = array_key_exists("vpc_3DSstatus", $_GET) ? $_GET["vpc_3DSstatus"] : "No Value Returned";
        

        // *******************
        // END OF MAIN PROGRAM
        // *******************

        // FINISH TRANSACTION - Process the VPC Response Data
        // =====================================================
        // For the purposes of demonstration, we simply display the Result fields on a
        // web page.

        // Show 'Error' in title if an error condition
        $errorTxt = "";

        // Show this page as an error page if vpc_TxnResponseCode equals '7'
        if ($txnResponseCode == "7" || $txnResponseCode == "No Value Returned" || $errorExists) {
            $errorTxt = "Error ";
        }

        // This is the display title for 'Receipt' page 
        $title = array_key_exists("title", $_GET) ? $_GET["title"] : "No Value Returned";

        // The URL link for the receipt to do another transaction.
        // Note: This is ONLY used for this example and is not required for 
        // production code. You would hard code your own URL into your application
        // to allow customers to try another transaction.
        //TK//$againLink = URLDecode($_GET["AgainLink"]);


        $transStatus = "";
        
        session_start();
        
      
        
        if($hashValidated=="CORRECT" && $txnResponseCode=="0"){
           
                
            $booked         = Tour::find($_SESSION[$_GET["vpc_OrderInfo"]][1]);
            
            $booked->booked = (int)$booked->booked+1;
            
            $booked->save();
            
            $transStatus = "Giao dịch Thành công";
        }
        elseif ($hashValidated=="INVALID HASH" && $txnResponseCode=="0"){
            
            $transStatus = "Giao dịch Pendding";
        }
        else {
            $transStatus = "Giao dịch thất bại";
        }

        $convAmount      =  (int)$amount/100;

        $getData        =   array('amount'=>$convAmount,'orderID'=>$orderInfo, 'messages'=>$messages,'transactionNo'=>$transactionNo,'txnResponseCode'=>$txnResponseCode, 'paymentMethod'=>'OnePay');
        
        
        Mail::send('Frontend.email-onepay-client', array('amount'=>$convAmount,'orderID'=>$orderInfo, 'messages'=>$messages,'transactionNo'=>$transactionNo,'txnResponseCode'=>$txnResponseCode, 'paymentMethod'=>'OnePay'), 

        function($message){          

            $message->to($_SESSION[$_GET["vpc_OrderInfo"]][0], 'Admin-FarEarstour')->subject('travel Admin-FarEarstour');

        });
        
        return redirect()->route('results')->with(['data' => $getData]);
        
    }

    public function readFile()
    {
        // Storage::disk('local')->put('file.txt', 'Contents');

        if(Storage::disk('route')->exists('route_frontend.php')){
            $content = Storage::disk('route')->get('route_frontend.php');

            // print_r($content);
            $tach    = explode(';',  $content); 

            for ($i=1; $i < count($tach) ; $i++) { 

                $newArray[] = explode('->',trim($tach[$i]));
            }

            foreach ($newArray as $key => $value) {
                
                if (array_search("name('tourDetail')", $value)) {

                    break;
                }

            }

            $route = array("name('tin tuc')" => "Frontend\NewsController@listNews","time-tour"=>"Frontend\TourController@timeTour","discount-tour"=>"Frontend\TourController@discountTour","name('contact')"=>"Frontend\FrontendController@contact");

            // $chuoi  = $newArray[10][1];
           
            // $kq = strpos($str, ',');

            print_r($route["name('contact')"]);
            
        }
    }
    
}
