<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/17/20
 * Time: 9:40 PM
 */

namespace App\DesignPatterns;


class FacebookAdapter implements SocialMediaAdapter
{
        private $facebook;

        function __construct(Facebook $facebook)
        {
            $this->facebook=$facebook;
        }

        public function post($msg){
            return $this->facebook->postToWall($msg);
        }
}

