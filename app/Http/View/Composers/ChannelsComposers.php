<?php


namespace App\Http\View\Composers;

use App\Channel;
use Illuminate\View\View;

class  ChannelsComposers{

    public function compose(View $view){

        $view->with('channels',Channel::orderBy('name')->get());
    }
}