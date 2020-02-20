<?php

/**
 * Created by PhpStorm.
 * User: ghiurca
 * Date: 2/19/20
 * Time: 7:25 PM
 */

namespace  App\Repositories\Customer;
use App\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
        public function all(){
         return Customer::orderBy('name')->where('active',1)->with('user')->get()->map->format();

         //the same
//            return Customer::orderBy('name')->where('active',1)->with('user')->get()->map(function($customer){
//                return $customer->format();
//
//            });
        }

        public function findById($id){
            return Customer::where('id',$id)->where('active',1)->with('user')->firstOrFail()->format();
//            return $customer->format();

        }

        public function update($id){
         $customer=  Customer::where('id',$id)->where('active',1)->firstOrFail();
         $customer->update(request()->only('name'));
        }

        public function delete($id){
            Customer::where('id',$id)->delete();
        }
//        protected function format($customer){
//            return [
//                'customer_id'=>$customer->id,
//                'name'=>$customer->name,
//                'created_by'=>$customer->user->email,
//                'last_update'=>$customer->updated_at->diffForHumans(),
//
//            ];
//        }
}