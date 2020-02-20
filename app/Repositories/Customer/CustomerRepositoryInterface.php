<?php
/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/19/20
 * Time: 7:47 PM
 */

namespace App\Repositories\Customer;

interface CustomerRepositoryInterface
{
    public function all();

    public function findById($id);

    public function update($id);

    public function delete($id);
}