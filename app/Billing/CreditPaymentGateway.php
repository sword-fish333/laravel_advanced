<?php

/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/15/20
 * Time: 4:06 PM
 */
namespace App\Billing;
class CreditPaymentGateway implements PaymentGatewayContract
{
    private $currency, $discount;
    function __construct($currency)
    {
        $this->currency=$currency;
        $this->discount=0;
    }

    public function charge($amount){

        $fees=$amount*0.03;
            return [
                'amount'=>$amount-$this->discount+$fees,
                'confirmation_number'=>\Illuminate\Support\Str::random(),
                'currency'=>$this->currency,
                'discount'=>$this->discount,
                'fees'=>$fees
            ];
        }

        public function setDiscount($discount){
        $this->discount=$discount;
        }

}