<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){

        $suppliers = Supplier::select('*')->get();

        return view('supplier.index',compact('suppliers'));
    }

    public function create(Request $request){

        if($request->action == 'Save'){

            $createSupplier = Supplier::insert([

                'company_name' => $request->company,
                'contact_name' => $request->first_name,
                'contact_title' => $request->contact,
                'email' => $request->email_address,
                'address' => $request->address,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'phone' => $request->mobile_phone
        ]);
            return redirect()->route('supplier.index')->with('success','Supplier Added');
        }


        return view('supplier.create');
    }
}
