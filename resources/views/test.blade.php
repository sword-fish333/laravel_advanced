<?php

        class Subscription{

            protected $gateway;
            function __construct(StripeGateWay $gateway)
            {
                $this->gateway;
            }

            public function getCustomer(){
                $customer=$this->gateway->findUser();
                return $customer;
            }
            public function cancel(){

            }
        }

        class StripeGateWay{

            public function findUser(){
                return 'customer';
            }
        }

        $sub=new Subscription(new StripeGateWay());

        echo $sub->getCustomer();