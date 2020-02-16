<?php

/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/15/20
 * Time: 10:40 PM
 */
namespace App\Orders;
use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;

class OrderDetails
{
    protected $paymentGateway;
    function __construct(PaymentGatewayContract $paymentGateway)
    {
        $this->paymentGateway=$paymentGateway;
    }

    public function all(){

        $this->paymentGateway->setDiscount(500);

        return [
            'name'=>'Dan',

            'address'=>'Coders street',

        ];
    }

}