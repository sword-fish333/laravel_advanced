<?php

/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/20/20
 * Time: 12:22 PM
 */

namespace  App\Repositories\Employee;
use App\Employee;

class DbEmployeeRepository implements EmployeeRepository
{
    protected $employee;
        function __construct(Employee $employee)
        {
            $this->employee=$employee;
        }


        public function getById($id){
            return $this->employee->findOrFail($id);
        }

        public function getAll(){
            return $this->employee->get();
        }

}