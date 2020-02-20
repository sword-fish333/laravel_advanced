<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/20/20
 * Time: 2:55 PM
 */

namespace App\DesignPatterns\DecoratorPattern;


class EmailLogger extends LoggerDecorator
{
        public function log($msg)
        {
            $this->logger->log($msg);
            echo "<p>log to email message: {$msg}</p>";
        }
}