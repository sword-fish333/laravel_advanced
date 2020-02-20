<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Repositories\Customer\CustomerRepositoryInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $customerRepository;
    function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository=$customerRepository;
    }

    public function index(){
        $customers=$this->customerRepository->all();
        return $customers;
    }

    public function show($id){
        return $this->customerRepository->findById($id);
    }

    public function update($id){
        $this->customerRepository->update($id);
        return redirect('/customers/'.$id);
    }


    public function destroy($id){
        $this->customerRepository->delete($id);
        return redirect('/customers');
    }
}
