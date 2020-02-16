<?php

/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/15/20
 * Time: 4:06 PM
 */
namespace App\Billing;
class BankPaymentGateway implements PaymentGatewayContract
{
    private $currency, $discount;
    function __construct($currency)
    {
        $this->currency=$currency;
        $this->discount=0;
    }

    public function charge($amount){

            return [
                'amount'=>$amount-$this->discount,
                'confirmation_number'=>\Illuminate\Support\Str::random(),
                'currency'=>$this->currency,
                'discount'=>$this->discount
            ];
        }

        public function setDiscount($discount){
        $this->discount=$discount;
        }

}