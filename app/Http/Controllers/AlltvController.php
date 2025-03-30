<?php

namespace App\Http\Controllers;

use App\Mail\Emailtrans;
use App\Models\bo;
use App\Models\data;
use App\Models\Messages;
use App\Models\refer;
use App\Models\User;
use App\Models\wallet;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AlltvController
{
    public function listtv(Request $request)
    {


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://mobile.primedata.com.ng/api/listtv',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array(),
            CURLOPT_HTTPHEADER => array(
                'apikey: PRIME624fee6e546747.77054028'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
        $data = json_decode($response, true);
        $plan= $data["data"];
        foreach ($plan as $pla) {
            $id = $pla['plan_id'];
            $name = $pla['network'];
            $amount = $pla['amount'];
            $code = $pla['cat_id'];
//return $response;
            $bo = data::create([
                'plan_id' => $id,
                'plan' => 'tv',
                'network' => $name,
                'amount' => $amount,
                'tamount' => $amount,
                'cat_id' => $code,
            ]);
        }
    }

    function verfytv($value1,$value2)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.savebills.com.ng/api/auth/verifytv',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
    "userId":1,
    "network":"'.$value2.'",
    "number":"'.$value1.'"
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $all= json_decode($response, true);
//        return response()->json($all, Response::HTTP_BAD_REQUEST);

        $success = $all["message"];
        return response()->json($success);
    }

//    public function process(Request $request)
//    {
//        if (Auth::check()) {
//            $user = User::find($request->user()->id);
//            $tv = data::where('id', $request->id)->first();
//
//            return  view('tvp', compact('user', 'request'));
//
//        }
//        return redirect("login")->withSuccess('You are not allowed to access');
//
//    }
    public function tv(Request $request)
    {
        if (Auth::check()) {
            $user = User::find($request->user()->id);
            $tv = data::where('plan', 'tv')->get();

            return  view('tv', compact('user', 'tv'));

        }
        return redirect("login")->withSuccess('You are not allowed to access');

    }

    public function paytv(Request $request)
    {
        if (Auth::check()) {
            $user = User::find($request->user()->id);


            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.savebills.com.ng/api/auth/singledata',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
    "id":"'.$request->id.'"
}',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            $all= json_decode($response, true);
            $bab=$all['data'];
            $system_amount=$bab['tamount'];
//        return response()->json($system_amount, Response::HTTP_BAD_REQUEST);

            if ($user->wallet < $system_amount) {
                $mg = "You Cant Make Purchase Above" . "NGN" . $system_amount . " from your wallet. Your wallet balance is NGN $user->wallet. Please Fund Wallet And Retry or Pay Online Using Our Alternative Payment Methods.";
                return response()->json($mg, Response::HTTP_BAD_REQUEST);


            }
            if ($system_amount < 0) {

                $mg = "error transaction";
                return response()->json($mg, Response::HTTP_BAD_REQUEST);


            }
            $bo = bo::where('refid', $request->refid)->first();
            if (isset($bo)) {
                $mg = "duplicate transaction";
                return response()->json($mg, Response::HTTP_BAD_REQUEST);


            } else {
                $gt = $user->wallet - $system_amount;


                $user->wallet = $gt;
                $user->save();

                $resellerURL = 'https://integration.mcd.5starcompany.com.ng/api/reseller/';


                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.savebills.com.ng/api/auth/buytv',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS =>'{
    "userId":"1",
    "id":"'.$request->id.'",
    "refid":"'.$request->refid.'",
    "number":"'.$request->number.'"
}',
                    CURLOPT_HTTPHEADER => array(
                        'x-api-key: SB.KEY6.378677653035596e+43',
                        'Content-Type: application/json'
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);
//                return $response;
                $data = json_decode($response, true);
//               $success = $data["success"];

//                        return $response;
                if (isset($data['status'])) {

                    $bo = bo::create([
                        'username' => $user->username,
                        'plan' => $bab['network'],
                        'amount' => $system_amount,
                        'server_res' => $response,
                        'result' => 1,
                        'phone' => $request->number,
                        'refid' => $request->refid,
                    ]);

$success=1;
                    $name = $bab['plan'];
                    $am = $name."was Successful to";
                    $ph = $request->number;



                    return response()->json([
                        'status' => 'success',
                        'message' => $am.' ' .$ph,
                    ]);


                }else{
                    $success=0;


                    $am= "NGN $request->amount Was Refunded To Your Wallet";
                    $ph=", Transaction fail";

                    return response()->json([
                        'status' => 'fail',
                        'message' => $response,
                    ]);

                }
            }
        }
    }

}
