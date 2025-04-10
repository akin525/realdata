<?php
namespace App\Http\Controllers;
use App\Mail\Emailfund;
use App\Mail\Emailtrans;
use App\Models\bo;
use App\Models\data;
use App\Models\deposit;
use App\Models\profit;
use App\Models\savebills;
use App\Models\setting;
use App\Models\User;
use App\Models\wallet;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Session;

class BillController
{

    function listdata($data)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.savebills.com.ng/api/auth/datanew',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
    "network":"'.$data.'"
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $all= json_decode($response, true);
        $success = $all["data"];
        return response()->json($success);
    }
    function listtv($data)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.savebills.com.ng/api/auth/tv',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
    "network":"'.$data.'"
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $all= json_decode($response, true);
        $success = $all["data"];
        return response()->json($success);
    }
    function verfytv($data,$number)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://server.savebills.com.ng/api/auth/verifytv',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
    "network":"'.$data.'"
    "number":"'.$number.'"
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $all= json_decode($response, true);
        $success = $all["message"];
        return response()->json($success);
    }
    public function bill(Request $request)
    {
//        return $request;
        $request->validate([
            'amount' => [
                'required',
                'regex:/^[0-9]+$/', // Ensures the amount contains only digits (no special characters)
            ],
        ], [
            'amount.regex' => 'Amount must not contain special characters.',
            'number'=> ['required', 'string',  'min:11', 'max:11'],
        ]);
        if (Auth::check()) {
            $user = User::find($request->user()->id);
//            $wallet = wallet::where('username', $user->username)->first();


            if ($user->wallet < $request->amount) {
                $mg = "You Cant Make Purchase Above" . "NGN" . $request->amount . " from your wallet. Your wallet balance is NGN $user->wallet. Please Fund Wallet And Retry or Pay Online Using Our Alternative Payment Methods.";

                return response()->json($mg, Response::HTTP_BAD_REQUEST);

            }
            if ($request->amount < 0) {

                $mg = "error transaction";
                return response()->json($mg, Response::HTTP_BAD_REQUEST);


            }
            $bo = bo::where('refid', $request->refid)->first();
            if (isset($bo)) {
                $mg = "duplicate transaction";
                return response()->json($mg, Response::HTTP_BAD_REQUEST);

            } else {
                $user = User::find($request->user()->id);
                $gt = $user->wallet - $request->amount;


                $user->wallet = $gt;
                $user->save();


                $resellerURL = 'https://api.savebills.com.ng/api/auth/airtime';
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.savebills.com.ng/api/auth/airtime',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS =>'{
    "amount":'.$request->amount.',
    "refid":"'.$request->refid.'",
    "number":"'.$request->number.'",
    "network":"'.$request->id.'"
}',
                    CURLOPT_HTTPHEADER => array(
                        'x-api-key: SB.KEY6.378677653035596e+43',
                        'Content-Type: application/json'
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);
//                    echo $response;
//                        return $response;

//    return;
                $data = json_decode($response, true);
                $success = $data["status"];
//                        $tran1 = $data["discountAmount"];
//                return response()->json($data, Response::HTTP_BAD_REQUEST);

                if ($success == 1) {

                    $bo = bo::create([
                        'username' => $user->username,
                        'plan' => 'Airtime',
                        'amount' => $request->amount,
                        'server_res' => $response,
                        'result' => $success,
                        'phone' => $request->number,
                        'refid' => $request->refid,
                    ]);

                    $am = "NGN $request->amount  Airtime Purchase Was Successful To";
                    $ph = $request->number;

                    $receiver = $user->email;
                    $admin = 'admin@primedata.com.ng';
                    return response()->json([
                        'status' => 'success',
                        'message' => $am.' ' .$ph
//                            'data' => $responseData // If you want to include additional data
                    ]);

                } elseif ($success == 0) {
                    $zo = $user->wallet + $request->amount;
                    $user->wallet = $zo;
                    $user->save();

//                    $name = $fg->plan;
                    $am = "NGN $request->amount Was Refunded To Your Wallet";
                    $ph = ", Transaction fail";
                    return response()->json([
                        'status' => 'fail',
                        'message' => $response,
//                            'message' => $am.' ' .$ph,
//                            'data' => $responseData // If you want to include additional data
                    ]);
                }

            }
        }
    }
    public function data(Request $request)
    {
        $request->validate([
            'number' => ['required', 'string', 'min:11', 'max:11'],
            'productid' => 'required',
        ]);
        $user = User::find($request->user()->id);
//            $wallet = wallet::where('username', $user->username)->first();
        $bab=savebills::where('id', $request->productid)->first();
        $system_amount=$bab['tamount'];
//        return response()->json($system_amount, Response::HTTP_BAD_REQUEST);

        if ($user->wallet < $system_amount) {
            $mg = "You Cant Make Purchase Above" . "NGN" . $system_amount . " from your wallet. Your wallet balance is NGN $user->wallet. Please Fund Wallet And Retry or Pay Online Using Our Alternative Payment Methods.";
            return response()->json($mg, Response::HTTP_BAD_REQUEST);

        }
        if ($request->amount < 0) {

            $mg = "error transaction";
            return response()->json($mg, Response::HTTP_BAD_REQUEST);


        }
        $bo = bo::where('refid', $request->refid)->first();
        if (isset($bo)) {
            $mg = "duplicate transaction";
            return response()->json($mg, Response::HTTP_BAD_REQUEST);


        } else {
            $user = User::find($request->user()->id);
            $bt = savebills::where("id", $request->productid)->first();
//                $wallet = wallet::where('username', $user->username)->first();
//return $bt;
            $gt = $user->wallet - $bt->tamount;

            $user->wallet = $gt;
            $user->save();


            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.savebills.com.ng/api/auth/buydatanew',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
    "id":"'.$bab['id'].'",
    "number":"'.$request->number.'",
    "refid":"'.$request->refid.'"
}',
                CURLOPT_HTTPHEADER => array(
                    'x-api-key: SB.KEY6.378677653035596e+43',
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

//return $response;
//            return response()->json($response, Response::HTTP_BAD_REQUEST);
            $data = json_decode($response, true);
//            return response()->json($data, Response::HTTP_BAD_REQUEST);

            $success = $data["status"];
//            $po = $user->wallet - $bab->tamount;
            if ($success == 1) {
                $bo = bo::create([
                    'username' => $user->username,
                    'plan' => $bab->plan,
                    'amount' => $request->amount,
                    'server_res' => $response,
                    'result' => $success,
                    'phone' => $request->number,
                    'refid' => $request->refid,
                ]);


                $name = $bab['plan'];
                $am = "$name  was successful delivered to";
                $ph = $request->number;
                return response()->json([
                    'status' => 'success',
                    'message' => $am.' ' .$ph,
                ]);

            } else {


                $name = $bab['tamount'];
                $am = "NGN $name Was Refunded To Your Wallet";
                $ph = ", Transaction fail";
                return response()->json([
                    'status' => 'fail',
                    'message' => $response,
                ]);
            }
        }
    }


}



