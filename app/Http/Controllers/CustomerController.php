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
                'state' => $request->state,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'phone' => $request->mobile_phone,
                'notes' => $request->notes
        ]);

        return redirect()->route('customer.index')->with('success','Customer has been saved');

        }

        return view('customer.create');

    }

    public function edit(Request $request, $customer_id){

        $customer = Customer::find($customer_id);

        return view('customer.edit',compact('customer'));
    }

    public function update(Request $request, $customer_id){

        $customer = Customer::find($customer_id);

        $update = Customer::where('id', $customer_id)->update([
            
            'company_name' => $request->company,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,       
            'email' => $request->email_address,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postal_code,
            'country' => $request->country,
            'notes' => $request->notes
            
        ]);

        return redirect()->route('customer.index', compact('customer'))
        ->with('success', 'Customer update successfully');
    }

    public function delete($customer_id){

        $customer = Customer::where('id',$customer_id)->delete();

        return redirect()->route('customer.index',compact('customer'))->with('success','customer deleted');
    }
}
