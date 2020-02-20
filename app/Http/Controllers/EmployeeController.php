<?php

namespace App\Http\Controllers;

use App\Repositories\Employee\DbEmployeeRepository;
use App\Repositories\Employee\EmployeeRepository;
use Illuminate\Http\Request;
use Psy\Util\Str;

class EmployeeController extends Controller
{
        private $employeeRepository;

    function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository=$employeeRepository;
    }
public function index(){
        return $this->employeeRepository->getAll();
}

    public function show($id){

        $order=$this->employeeRepository->getById($id);
        return $order;
    }
}
