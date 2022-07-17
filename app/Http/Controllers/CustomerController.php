<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){

        $customer = Customer::select('*')->get();
        
        return view('customer.index',compact('customer'));
    }

    public function create(Request $request){

        if($request->action == 'Save'){
            $createCustomer = Customer::insert([

                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'contact_name' => $request->contact,
                'email' => $request->email_address,
                'company_name' => $request->company,
                'address' => $request->address,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'phone' => $request->mobile_phone,
                'notes' => $request->notes
        ]);

        return redirect()->route('customer.index')->with('success','Customer has been saved');

        }

        return view('customer.create');

    }

    public function update(){

    }
}
