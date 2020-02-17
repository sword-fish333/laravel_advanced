<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/16/20
 * Time: 9:57 PM
 */

namespace App;


use Illuminate\Support\Facades\Mail;

class PostCardSendingService
{
        private $country;
    private $w;
    private $h;

    function __construct($country, $w, $h)
    {
        $this->country=$country;
        $this->w=$w;
        $this->h=$h;

    }

    public function sendPostCard($message,$email){
//        Mail::raw($message,function ($message)use($email){
//           $message->to($email);
//        });

    dump('message was :' . $message);
    }

}