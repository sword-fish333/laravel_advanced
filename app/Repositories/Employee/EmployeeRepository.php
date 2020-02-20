<?php

/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/20/20
 * Time: 12:21 PM
 */

namespace  App\Repositories\Employee;
interface EmployeeRepository
{
    public function getById($id);

    public function getAll();
}