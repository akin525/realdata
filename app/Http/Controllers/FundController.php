<?php

namespace App\Http\Controllers;
use App\Mail\Emailcharges;
use App\Mail\Emailfund;
use App\Mail\Emailotp;
use App\Models\bo;
use App\Models\charp;
use App\Models\deposit;
use App\Models\setting;
use App\Models\User;
use App\Models\wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class FundController

{
    public function fund(Request  $request)
    {
        if (Auth::check()) {
            $user = User::find($request->user()->id);
//            $wallet1 = wallet::where('username', $user->username)->get();
//            foreach ($wallet1 as $wallet){
//
//            }
            $data2 = setting::get();
            $fund = deposit::where('username', $user->username)->get();


            return view('fund', compact('user', 'data2', 'fund'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');


    }

        public function tran($reference)
    {


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer sk_live_ecc8b79fca203b773334360774a3d4937d834540",
                "Cache-Control: no-cache",
            ),
        ));
//curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0)

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
//             echo $response;
        }
//        return $response;
        $data=json_decode($response, true);
        $amount=$data["data"]["amount"]/100;
//        $auth=$data["data"]["authorization"]["authorization_code"];
// echo $auth;

        if(Auth::check()) {
            $user = Auth::user();
//            $wallet = wallet::where('username', $user->username)->first();
        $pt=$user->wallet;

            $depo = deposit::where('payment_ref', $reference)->first();
            if (isset($depo)) {
                return redirect("dashboard")->withSuccess('Duplicate Transaction');

            } else {
                $char = setting::first();
$amount1=$amount - $char->charges;


                $gt = $amount1 + $pt;
                $charp = charp::create([
                    'username' => $user->username,
                    'payment_ref' => $reference,
                    'amount' => $char->charges,
                    'iwallet' => $pt,
                    'fwallet' => $gt,
                ]);

                $deposit = deposit::create([
                    'username' => $user->username,
                    'payment_ref' => $reference,
                    'amount' => $amount,
                    'iwallet' => $pt,
                    'fwallet' => $gt,
                ]);


//
                $admin= 'admin@primedata.com.ng';

                $receiver= $user->email;
//                Mail::to($receiver)->send(new Emailcharges($charp ));
//                Mail::to($admin)->send(new Emailcharges($charp ));

                $user->wallet = $gt;
                $user->save();
                $admin= 'admin@primedata.com.ng';

              $receiver= $user->email;
//                Mail::to($receiver)->send(new Emailfund($deposit ));
//                Mail::to($admin)->send(new Emailfund($deposit ));


                return redirect("dashboard")->withSuccess('You are not allowed to access');
            }
        }

    }
}
