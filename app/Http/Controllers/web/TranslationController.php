<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Mail\ReceiptMail;

use Cart;
use App\Models\admin\commerce\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
       

        if($paymentResponse->status ==='SUCCESS'){

        $adr_livr = $request->get('adr_livr');
     
            
            $order =  Commande::create([
            'adr_livr' => $adr_livr ,
            'user_id' => auth()->id()
            ]);

            $user = auth()->user();
            $products = Cart::getContent();
            $totalAmont = Cart::getTotal();
          $mail = Mail::to($user->email)->send(new ReceiptMail($order, $products, $totalAmont) );

           
            Cart::clear();
            session()->flash('success', 'Paiment effectuer avec success.');
        return view("web.payment", [
            'products' => $products,
            "totalAmont" => $totalAmont
        ]);


        } else{
            return redirect()->back();

        }
       

        
    }
}
