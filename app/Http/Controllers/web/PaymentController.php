<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kkiapay\Kkiapay;
use App\Models\admin\commerce\Commande;
use Cart;


class PaymentController extends Controller
{
    //
  public function payment(Request $request)
  {

     $public_key = "8f59a0e0f8a911eca56ad905c440058f";
        $private_key = "tpk_8f59a0e2f8a911eca56ad905c440058f";
        $secret = "tsk_8f59c7f0f8a911eca56ad905c440058f";
        $kkiapay = new Kkiapay(
            $public_key,
            $private_key,
            $secret,
            $sandbox = true
        );

        
        $paymentResponse = $kkiapay->verifyTransaction($request->get('transaction_id'));
        if ($paymentResponse->status == "SUCCESS") {
            dd("Vous avez payez une somme de {$paymentResponse->amount}");
            //Enregistre les informations de la commande 
            Commande::create([]);
            //Envoi un mail de sucess
            //Mail::to("dsdsdsd@gmma")->send();
            //Envoi une section success to notifier dans la view
            session()->flash('success', 'Paiment effectuer avec success.');
            Cart::delete();

        }else {
            return redirect()->back();
        }
    
  }

}
