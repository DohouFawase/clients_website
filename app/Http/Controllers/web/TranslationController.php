<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kkiapay\Kkiapay;

class TranslationController extends Controller
{
    //

    public function payment(Request $request) 
    {
        $public_key = "8f59a0e0f8a911eca56ad905c440058f";
        $private_key = "tpk_8f59a0e2f8a911eca56ad905c440058f";
        $secret = "tsk_8f59c7f0f8a911eca56ad905c440058f";

        $payment = new Kkiapay(
            $public_key,
            $private_key,
            $secret = null,
            $sandbox = true
        );

        $paymentResponse = $payment->verifyTransaction($request->get('transaction_id'));
        dd($paymentResponse);

        return view("web.success");
        
    }
}
