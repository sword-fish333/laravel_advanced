<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/17/20
 * Time: 9:39 PM
 */

namespace App\DesignPatterns;


class Facebook
{
        public function postToWall($msg){
            return $msg.' has been posted on the wall';
        }
}