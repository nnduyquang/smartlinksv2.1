<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PageSpeedInsightController extends Controller
{
    public function resultAnalytics(Request $request){
        $client=new Client(['verify'=> false]);
        $res = $client->request('GET', 'https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=http://'.$request->input('website').'&strategy=mobile&key=AIzaSyBgs4pfBrI0cGQlAmCKqNd-bRcH4zBICHs');
//        https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url=http://smartlinks.vn&strategy=mobile&key=AIzaSyBgs4pfBrI0cGQlAmCKqNd-bRcH4zBICHs

        echo $res->getBody();
        return response()->json([
            'success' => true,
            'data'=>$data
        ]);
    }
    public function resultInfo(Request $request){
        $hdWebsiteReceive=$request->input('website');
        $hdPhoneNumberReceive=$request->input('phone_number');
        $hdEmailCustomerReceive=$request->input('email_return');
        return view('frontend.page-speed-insights.index', compact(['hdWebsiteReceive','hdPhoneNumberReceive','hdEmailCustomerReceive']));
    }
}
