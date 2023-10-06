<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kkiapay\Kkiapay;

class PaymentController extends Controller
{
    //
  public function payment(Request $request)
  {

    $payment = new Kkiapay ( env('KKIAPAY_PUBLIC_KEY'),
    env('KKIAPAY_PRIVATE_KEY'),
    $secret = null,
    $sandbox = true);
    
  }

}
