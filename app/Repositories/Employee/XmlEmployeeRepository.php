<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/20/20
 * Time: 1:31 PM
 */

namespace App\Repositories\Employee;


use App\Employee;

class XmlEmployeeRepository implements EmployeeRepository
{
    protected $employee;
    function __construct(Employee $employee)
    {
        $this->employee=$employee;
    }


    public function getById($id){
        return 'xml repo employee with id: '.$id;
    }

    public function getAll(){
        return  'all employees!';
    }

}