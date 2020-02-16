<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/15/20
 * Time: 10:54 PM
 */

namespace App\Billing;

interface PaymentGatewayContract
{
    public function charge($amount);

    public function setDiscount($discount);
}