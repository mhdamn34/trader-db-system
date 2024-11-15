<?php

namespace App\Http\Controllers;

use App\Models\Shipper;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    public function index(){

        $shippers = Shipper::select('*')->get();

        return view('shipper.index',compact('shippers'));
    }

    public function create(Request $request){

        if($request->action == 'Save'){

            $insertShipper = Shipper::insert([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email_address,
                'job_title' => $request->job_title,
                'phone' => $request->mobile_phone,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'postal_code' => $request->postal_code,
                'country' => $request->country,
                'notes' => $request->notes,
                'company' => $request->company,
            ]);
            return redirect()->route('shipper.index')->with('success', 'Shipper added');
        }

        return view('shipper.create');
    }

    public function edit(Request $request, $shipper_id){

        $shippers = Shipper::find($shipper_id);

        return view('shipper.edit',compact('shippers'));
    }

    public function update(Request $request, $shipper_id){

        $shippers = Shipper::find($shipper_id);

        $insertShipper = Shipper::where('id', $shipper_id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email_address,
            'job_title' => $request->job_title,
            'phone' => $request->mobile_phone,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postal_code,
            'country' => $request->country,
            'notes' => $request->notes,
            'company' => $request->company,
        ]);


        return redirect()->route('shipper.index',compact('shippers'))->with('success','shipper updated');
    }

    public function delete(Request $request, $shipper_id){

        $shippers = Shipper::find($shipper_id)->delete();

        return redirect()->route('shipper.index',compact('shippers'))->with('success','shipper deleted');
    }
}
