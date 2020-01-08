<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {

        $paystack = new Paystack();
        $user = Auth::user()->email;
        $request->amount = '10000';
        $request->reference = Paystack::genTranxRef();
        $request->key = config('paystack.secretkey');

        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails);

        $transId = $paymentDetails['data']['id'];
        $transStatus = $paymentDetails['data']['status'];
        $amountNaira = $paymentDetails['data']['amount']/100;
        $date = $paymentDetails['data']['paid_at'];

        $dateExplode = explode("T",$date);
        //put this date in database
        $dateDayFinal = $dateExplode[0];

        return ($dateDayFinal);
        //put transaction id, transaction status, amount and date here

        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}