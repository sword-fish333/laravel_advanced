<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormValidation;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mainPage(){
        return view('main_page');
    }

    public function store(StoreFormValidation $request){

    }
}


class Task {
    private $name;
    public function __construct($name){
        $this->name= $name;
    }

    public  function getTask()
    {
        return $this->name;
}
}