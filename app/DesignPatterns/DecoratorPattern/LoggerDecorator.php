<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/20/20
 * Time: 3:00 PM
 */

namespace App\DesignPatterns\DecoratorPattern;


abstract class LoggerDecorator implements LoggerInterface
{
    protected $logger;
    function __construct(LoggerInterface $logger)
    {
        $this->logger=$logger;
    }

    abstract public function log($msg);
}