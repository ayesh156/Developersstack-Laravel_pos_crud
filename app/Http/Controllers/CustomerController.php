<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Validator;

class CustomerController extends Controller
{
    public function customers(){
        $customerList = Customer::all();
        return view('customers.customer',['customers'=>$customerList]);
    }
    public function saveCustomer(){
        return view('customers.new-customer');
    }
    public function addCustomer(Request $request){
        $customer = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'designation' => 'required',
            'age' => 'required'
        ]);

        $savedData=Customer::create($customer);
        return redirect(route('customers.customer'));
    }
    public function modifyCustomer(Customer $customer){
        return view('customers.modify-customer',['customer'=>$customer]);
    }
    public function udpateCustomer(Customer $customer,Request $request){
        $createdCustomer = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'designation' => 'required',
            'age' => 'required'
        ]);

        $customer->update($createdCustomer);
        return redirect(route('customers.customer'));
    }
    public function deleteCustomer(Customer $customer){
        $customer->delete();
        return redirect(route('customers.customer'));
    }
}
